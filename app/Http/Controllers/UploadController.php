<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * 
 */
class UploadController extends Controller
{
		public function getAdd()
		{
			//hien thi anh
			return view('news.add');
		}
		public function postAdd(Request $request)
		{
			//xu li anh
			$Anh = $request->Anh;

			if ($Anh != "") {
				$path = $request->Anh->store('files');
				echo "path: {$path}";
				echo "up thanh cong";
				return view('news.add');
			}

		}
}
?>