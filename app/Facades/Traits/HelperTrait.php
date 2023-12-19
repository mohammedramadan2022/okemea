<?php

namespace App\Facades\Traits;

use App\Http\Traits\photo;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use Laravel\Passport\HasApiTokens;
use phpDocumentor\Reflection\Types\False_;


trait HelperTrait
{


    public function responseJson($status, $message, $data = null, $resource = null)
    {
        if ($resource) {
            return $resource->additional([
                'status' => $status,
                'message' => $message,
                'additional_data' => $data,
            ]);
        }

    }


    public function returnErrors($validator)
    {
        $errors = $validator->errors();
        $error_data = [];
        foreach ($errors->all() as $error) {
            array_push($error_data, $error);
        }
        $data = $error_data;
        return $data;
    }

    function saveImage($image, $folder , $resize = false)
    {
        $result = $this->saveFile($image, $folder, $resize = false);
        return $result;

    }

    function saveFile($file, $folder, $resize = false)
    {


        $destinationFolder = 'files/' . $folder;
        $destinationPath = public_path($destinationFolder);
        File::isDirectory($destinationPath) or File::makeDirectory($destinationPath, 0755, true, true);
        $extension = strtolower($file->getClientOriginalExtension());


        $fileName = time() . rand(1111, 9999).'.'. $extension;


        if ($resize == true && $extension != 'svg') {
            $image = Image::make(file_get_contents($file));
            $image->resize(150, 150, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath . '150x150-' . $fileName);
            $image->resize(256, 256, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath . '256x256-' . $fileName);
            $image->resize(800, 800, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath . '800x800-' . $fileName);
        }

        $file->move($destinationPath, $fileName);

        return [$fileName, $extension ,$destinationFolder];

    }
    function updateFile($file, $folder, $resize = false , $old=null ,$filePath=null)
    {


        $destinationFolder = 'files/' . $folder;
        $destinationPath = public_path($destinationFolder);
        File::isDirectory($destinationPath) or File::makeDirectory($destinationPath, 0755, true, true);
        $extension = strtolower($file->getClientOriginalExtension());
        $fileName = time() . rand(1111, 9999) . $file->getClientOriginalName();
        $getid3 = new \getID3();
        $fileSize = round($getid3->analyze($file)['filesize'] ?? 0, 2);
        $sizeUnit = 'Byte';

        if ($fileSize > 1024) {
            $fileSize = round($fileSize / 1024, 2);
            $sizeUnit = 'KB';
        }
        if ($fileSize > 1024) {
            $fileSize = round($fileSize / 1024, 2);
            $sizeUnit = 'MB';
        }
        if ($fileSize > 1024) {
            $fileSize = round($fileSize / 1024, 2);
            $sizeUnit = 'GB';
        }

        if ($resize == true) {
            $image = Image::make(file_get_contents($file));
            $image->resize(150, 150, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath . '150x150-' . $fileName);
            $image->resize(256, 256, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath . '256x256-' . $fileName);
            $image->resize(800, 800, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath . '800x800-' . $fileName);
        }

        $file->move($destinationPath, $fileName);


        if ($old) {
            if (file_exists(public_path() . '/' .$filePath. $old)) {
                unlink(public_path() . '/' . $filePath.$old);
            }
        }
        return [$fileName, $extension, $fileSize, $sizeUnit ,$destinationFolder];

    }

    function updateImage($image, $folder, $old_image=null , $filePath=null)
    {
        if ($old_image) {
            if (file_exists(public_path() . '/' .$filePath. $old_image)) {
                unlink(public_path() . '/' . $filePath.$old_image);
            }
        }
        $result = $this->saveFile($image, $folder, $resize = true);
        return $result;
    }


    /**
     *  Delete Image
     * @param string $image
     * @param string $image_folder
     * @return void
     */
    function deleteImage($image, $image_folder = null)
    {

        // Find the path for this image
        $image_path = public_path() . '/' . $image;

        // Delete image
        File::delete($image_path);
    }


// Soft delete for products
    protected function paginated($items, $perPage)
    {
        $pageStart = request('page', 1);
        $offSet = ($pageStart * $perPage) - $perPage;
        $itemsForCurrentPage = $items->slice($offSet, $perPage);

        return new LengthAwarePaginator(
            $itemsForCurrentPage, $items->count(), $perPage,
            Paginator::resolveCurrentPage(),
            ['path' => Paginator::resolveCurrentPath()]
        );
    }

    function paginateTheResult($items, $perPage)
    {
        $pageStart = request('page', 1);
        $offSet = ($pageStart * $perPage) - $perPage;
        $itemsForCurrentPage = $items->slice($offSet, $perPage);

        $itemsForCurrentPage = $itemsForCurrentPage->values();

        return new LengthAwarePaginator(
            $itemsForCurrentPage, $items->count(), $perPage,
            Paginator::resolveCurrentPage(),
            ['path' => Paginator::resolveCurrentPath()]
        );
    }


    function generateRandomString($length = 1)
    {
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString.$this->generateRandomNumber(4);
    }
    function generateRandomNumber($length = 4)
    {
        $randomString = mt_rand(1000 ,9999);

        return $randomString;
    }

    public function setNotificationLocal($client)
    {
        app()->setLocale($client->lang);
    }


    function categorizedArray($array)
    {
        $ret = [];
        $re = '/(.*)\[(.*)\]/U';
        foreach ($array as $i => $value) {
            preg_match_all($re, $i, $matches, PREG_SET_ORDER, 0);
            if ($matches == []) {
                $ret[$i] = $i;
            } else {
                $ret[$matches[0][1]][$matches[0][2]] = $value;
            }
        }
        return $ret;
    }


}
