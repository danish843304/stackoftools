<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class Home extends Controller
{
    public function index(){
        $data['title'] = 'Stackoftools | All Your Tools in One Place';
        return view('users/home', $data);
    }
    // public function dashboard(){
    //     return view('admin/dashboard');
    // }
    // public function authLogin(Request $request)
    // {

    //     $validator = Validator::make($request->all(), [
    //         'email' => 'required|email',
    //         'password' => 'required|min:6',
    //     ]);

    //     if ($validator->fails()) {
    //         $firstError = $validator->errors()->first();
    //         return response()->json([
    //             'status' => 1,
    //             'message' => $firstError,
    //         ]);
    //     }

    //     $email = $request->email;
    //     $password = $request->password;

    //     $check = AdminModel::where('email', $email)->where('password', $password)->where('status', 1)->first();

    //     if($check){
    //         $id = $check->id;
    //         session(['user_id' => $id]);
    //         return response()->json([
    //             'status' => 0,
    //             'message' => 'success',
    //         ]);
    //     }else{
    //         return response()->json([
    //             'status' => 1,
    //             'message' => 'Invalid email or password',
    //         ]);
    //     }
    // }
    // public function logout(Request $request)
    // {
    //     Auth::logout();
    //     session()->invalidate();
    //     session()->regenerateToken();
    //     return redirect()->route('authentication')->with('success', 'Logged out successfully');
    // }
    // public function category(){

    //     return view('admin/category/category');
    // }
    // public function saveCategory(Request $request)
    // {
    //     // Validate the incoming request
    //     $validator = Validator::make($request->all(), [
    //         'name' => 'required|string|max:255',
    //         'status' => 'required|string',
    //     ]);

    //     // Return error if validation fails
    //     if ($validator->fails()) {
    //         $firstError = $validator->errors()->first();
    //         return response()->json([
    //             'status' => 1,
    //             'message' => $firstError,
    //         ]);
    //     }

    //     // Prepare data for insertion or update
    //     $data = [
    //         'name' => $request->name,
    //         'status' => $request->status,
    //     ];

    //     if ($request->action_type == 'add') {
    //         $data['created_by'] = session('user_id');
    //         CategoryModel::create($data);

    //         return response()->json([
    //             'status' => 0,
    //             'message' => 'Category added successfully!',
    //         ]);
    //     } else {
    //         $data['updated_by'] = session('user_id');
    //         $updated = CategoryModel::where('id', $request->cat_id)->update($data);

    //         if ($updated) {
    //             return response()->json([
    //                 'status' => 0,
    //                 'message' => 'Category updated successfully!',
    //             ]);
    //         } else {
    //             return response()->json([
    //                 'status' => 1,
    //                 'message' => 'Failed to update category.',
    //             ]);
    //         }
    //     }
    // }
    // public function category_ajax(Request $request)
    // {
    //     // Pagination logic
    //     $columns = ['id', 'name', 'status', 'created_at'];

    //     $length = $request->input('length');
    //     $start = $request->input('start');
    //     $order = $columns[$request->input('order.0.column')];
    //     $dir = $request->input('order.0.dir');

    //     // Search functionality
    //     $search = $request->input('search.value');

    //     $query = CategoryModel::query();

    //     if (!empty($search)) {
    //         $query->where(function ($q) use ($search) {
    //             $q->where('name', 'LIKE', "%{$search}%");
    //         });
    //     }

    //     $totalFiltered = $query->count();

    //     $data1 = $query->offset($start)
    //         ->limit($length)
    //         ->orderBy($order, $dir)
    //         ->get();
    //         $rowdata = array();
    //         foreach ($data1 as $key => $value) {

    //             $edit = '<a href="javascript:void(0);" class="edit_button" data-val="'.$value['id'].'"><i class="fa-solid fa-pen-to-square"></i></a>';
    //             // $delete = '<button class="btn btn-sm btn-danger delete_button" style="margin-left: 10px;" data-val="'.$value['id'].'">Delete</button>';
    //             $rowdata[$key][] = (($key + $start) + 1);
    //             $rowdata[$key][] = $value['name'];
    //             $rowdata[$key][] = ($value['status'] == 1) ? 'Active' : 'Inactive';
    //             $rowdata[$key][] = date("d-m-Y", strtotime($value['created_at']));
    //             $rowdata[$key][] = $edit;

    //         }

    //     // Prepare JSON response
    //     $response = [
    //         "draw" => intval($request->input('draw')),
    //         "recordsTotal" => CategoryModel::count(),
    //         "recordsFiltered" => $totalFiltered,
    //         "data" => $rowdata,
    //     ];

    //     return response()->json($response);
    // }
    // public function fetch_category(Request $request){
    //     $id = $request->input('id');

    //     $data = CategoryModel::select('name', 'status')->where('id', $id)->first();
    
    //     if($data){
    //         $result = response()->json(['status' => 0,'message' => 'success', 'data'=>$data]);
    //     }else{
    //         $result = response()->json(['status' => 1,'message' => 'Failed']);
    //     }
    //     return $result;
    // }
    // public function delete_category(Request $request){

    //     $id = $request->input('id');
    //     $where = array('id'=>$id);
    //     $result =  delete_record('category', $where);

    //     if($result){
    //         $result = response()->json(['status' => 0,'message' => 'success']);
    //     }else{
    //         $result = response()->json(['status' => 1,'message' => 'Failed']);
    //     }
    //     return $result;
    // }
    // public function products(){

    //     $data['categories'] = CategoryModel::where('status', 1)->get();
    //     return view('admin/product/products', $data);
    // }
    // public function saveProduct(Request $request)
    // {

    //     // print_r($request->file('images'));
    //     // Validate the incoming request
    //     $validator = Validator::make($request->all(), [
    //         'name' => 'required|string|max:255',
    //         'category_id' => 'required|numeric',
    //         'qty' => 'required|numeric',
    //         'status' => 'required|numeric',
    //         'price' => 'required|numeric',
    //         'description' => 'string',
    //         'cover_image' => 'required|mimes:jpg,jpeg,png,webp|max:2048',
    //         'images' => 'nullable|array',
    //         'images.*' => 'mimes:jpg,jpeg,png,webp|max:2048',
    //     ]);

    //     // print_r($request);
    //     // exit();

    //     if ($validator->fails()) {
    //         $firstError = $validator->errors()->first();
    //         return response()->json([
    //             'status' => 1,
    //             'message' => $firstError,
    //         ]);
    //     }

    //     // Upload cover image
    //     $coverImageName = null;
    //     if ($request->hasFile('cover_image')) {
    //         $coverImage = $request->file('cover_image');
    //         $coverImageName = time() . '_cover.' . $coverImage->getClientOriginalExtension();
    //         $coverImage->move(public_path('assets/uploads/books'), $coverImageName);
    //     }

    //     // Upload multiple images
    //     $imageNames = [];
    //     if ($request->hasFile('images')) {
    //         foreach ($request->file('images') as $image) {
    //             $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
    //             $image->move(public_path('assets/uploads/books'), $imageName);
    //             $imageNames[] = $imageName;
    //         }
    //     }

    //     // Prepare data for insertion or update
    //     $data = [
    //         'name' => $request->name,
    //         'category_id' => $request->category_id,
    //         'qty' => $request->qty,
    //         'status' => $request->status,
    //         'price' => $request->price,
    //         'type' => $request->type,
    //         'description' => $request->description,
    //         'cover_image' => $coverImageName,
    //         'images' => implode(',', $imageNames),
    //     ];

    //     $data['created_by'] = session('user_id');
    //     ProductModel::create($data);

    //     return response()->json([
    //         'status' => 0,
    //         'message' => 'Product added successfully!',
    //     ]);
    // }
    // public function products_list(Request $request)
    // {
    //     $columns = ['id', 'name', 'category_name','cover_inage','price','qty', 'status', 'created_at'];

    //     $length = $request->input('length');
    //     $start = $request->input('start');
    //     $order = $columns[$request->input('order.0.column')];
    //     $dir = $request->input('order.0.dir');

    //     $search = $request->input('search.value');

    //     $query = DB::table('products')
    //         ->leftJoin('category', 'products.category_id', '=', 'category.id')
    //         ->select('products.*', 'category.name as category_name');

    //     if (!empty($search)) {
    //         $query->where(function ($q) use ($search) {
    //             $q->where('products.name', 'LIKE', "%{$search}%")
    //             ->orWhere('category.name', 'LIKE', "%{$search}%");
    //         });
    //     }

    //     $totalFiltered = $query->count();

    //     $data1 = $query->offset($start)
    //         ->limit($length)
    //         ->orderBy($order, $dir)
    //         ->get();

    //     $rowdata = [];
    //     foreach ($data1 as $key => $value) {
    //         $edit = '<a href="javascript:void(0);" class="edit_button" data-val="'.$value->id.'"><i class="fa-solid fa-pen-to-square"></i></a>';

    //         $rowdata[$key][] = (($key + $start) + 1);
    //         $rowdata[$key][] = $value->name;
    //         $rowdata[$key][] = $value->category_name;
    //         $rowdata[$key][] = ($value->cover_image) ? '<img src="'.url('public/assets/uploads/books/'.$value->cover_image).'" class="width: 40px;">' : '';
    //         $rowdata[$key][] = $value->price;
    //         $rowdata[$key][] = $value->qty;
    //         $rowdata[$key][] = ($value->status == 1) ? 'Active' : 'Inactive';
    //         $rowdata[$key][] = date("d-m-Y", strtotime($value->created_at));
    //         $rowdata[$key][] = $edit;
    //     }

    //     // Prepare JSON response
    //     $response = [
    //         "draw" => intval($request->input('draw')),
    //         "recordsTotal" => DB::table('products')->count(),
    //         "recordsFiltered" => $totalFiltered,
    //         "data" => $rowdata,
    //     ];

    //     return response()->json($response);
    // }
}