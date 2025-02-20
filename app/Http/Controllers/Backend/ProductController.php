<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{
    protected $imagePath;

    public function __construct(){
        $this->imagePath = public_path(config('cms.product.directory'));
    }

    public function index()
    {
        $data['products'] = Product::orderBy('created_at', 'desc')->get();
        return view('pages.admin.product.index', $data);
    }

    public function create()
    {
        $data['categories'] = Category::orderBy('name', 'asc')->get();
        return view('pages.admin.product.create', $data);
    }

    public function store(Request $request)
    {
        $data = $this->handleRequest($request);
        $product = Product::create($data);
        return redirect()->route('admin.products');
    }

    public function edit(Product $product)
    {
        $data['categories'] = Category::orderBy('name', 'asc')->get();
        $data['product']= $product;
        return view('pages.admin.product.edit', $data);
    }

    public function update(Request $request, $id)
    {

        $product = Product::findOrFail($id);
        $data = $this->handleRequest($request);
        $product->update($data);
        return redirect()->route('admin.products');
    }

    public function destroy($id)
    {
        $pro = Product::findOrFail($id);
        $pro->delete();
        return redirect()->back();
    }

    public function handleRequest($request)
    {
        $data = $request->all();

        if ($request->hasFile('image')){

            $image = $request->file('image');
            $fileName = $image->getClientOriginalName();
            $destination = $this->imagePath;

            $successUpload = $image->move($destination, $fileName);

            if ($successUpload) {
                $width = config('cms.product.thumbnail.width');
                $height = config('cms.product.thumbnail.height');
                $extension = $image->getClientOriginalExtension();
                $thumbnail = str_replace(".{$extension}", "-thumb.{$extension}", $fileName);

                Image::make($destination . '/' . $fileName)
                    ->resize($width, $height)
                    ->save($destination . '/' . $thumbnail);
            }

            $data['image'] = $fileName;
        }

        return $data;
    }
}
