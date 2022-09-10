<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Contact;
use App\Faq;
use App\Gallery;
use App\GalleryCategory;
use App\Media;
use App\Message;
use App\PagesBackgroud;
use App\Product;
use App\Service;
use App\Slider;
use App\Team;
use App\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $contacts = Contact::first()->translate(app()->getLocale());
        $sliders = Slider::all()->translate(app()->getLocale());
        $media = Media::first();
        $categories = GalleryCategory::all()->translate(app()->getLocale());
        $gallery = Gallery::all()->translate(app()->getLocale());
        $teams = Team::all()->translate(app()->getLocale());
        $testimonials = Testimonial::all()->translate(app()->getLocale());
        $blogs = Blog::all()->translate(app()->getLocale());

        return view('layout.home')->with([
            'contacts'  => $contacts,
            'sliders' => $sliders,
            'media' => $media,
            'categories' => $categories,
            'galleries' => $gallery,
            'teams' => $teams,
            'testimonials' => $testimonials,
            'blogs' => $blogs,
        ]);
    }

    public function service($id)
    {
        $service = Service::findOrFail($id)->translate(app()->getLocale());
        $services = Service::all()->translate(app()->getLocale());
        $background = PagesBackgroud::where('slug', 'single-service')->first()->image;
        $contacts = Contact::first()->translate(app()->getLocale());

        return view('layout.service')->with([
            'path'     => $background,
            'services' => $services,
            'service' => $service,
            'contacts'  => $contacts,
        ]);
    }

    public function services()
    {
        $services = Service::all()->translate(app()->getLocale());
        $background = PagesBackgroud::where('slug', 'services')->first()->image;
        $media = Media::first();
        $contacts = Contact::first()->translate(app()->getLocale());

        return view('layout.services')->with([
            'path'     => $background,
            'media' => $media,
            'services' => $services,
            'contacts'  => $contacts,
        ]);
    }

    public function product($id)
    {
        $product = Product::findOrFail($id)->translate(app()->getLocale());
        $products = Product::get()->translate(app()->getLocale());
        $background = PagesBackgroud::where('slug', 'single-product')->first()->image;
        $contacts = Contact::first()->translate(app()->getLocale());

        return view('layout.product')->with([
            'product' => $product,
            'path' => $background,
            'products' => $products,
            'contacts'  => $contacts,
        ]);
    }

    public function products()
    {
        $products = Product::get()->translate(app()->getLocale());
        $background = PagesBackgroud::where('slug', 'products')->first()->image;
        $contacts = Contact::first()->translate(app()->getLocale());

        return view('layout.products')->with([
            'products' => $products,
            'path' => $background,
            'contacts'  => $contacts,
        ]);
    }

    public function faq()
    {
        $faqs = Faq::get()->translate(app()->getLocale());
        $background = PagesBackgroud::where('slug', 'faq')->first()->image;
        $media = Media::first();
        $contacts = Contact::first()->translate(app()->getLocale());

        return view('layout.faq')->with([
            'faqs' => $faqs,
            'path' => $background,
            'media' => $media,
            'contacts'  => $contacts,
        ]);
    }

    public function message(Request $request)
    {
        $request->validate([
            'name'    => 'required',
            'email'   => 'required|email',
            'message' => 'required',
        ]);

        $message = new Message();
        $message->name = $request->name;
        $message->email = $request->email;
        $message->message = $request->message;
        $message->save();

        $dzRes['status'] = 1;
        $dzRes['msg'] = __('contact.success_message');
        echo json_encode($dzRes);
        //return redirect()->back()->with('status', 'Sent Successfully!');
    }

    public function contact()
    {
        $background = PagesBackgroud::where('slug', 'contact')->first()->image;
        $contacts = Contact::first()->translate(app()->getLocale());
        $coordinates = Contact::first()->getCoordinates();

        return view('layout.contact')->with([
            'path'      => $background,
            'contacts'  => $contacts,
            'point'     => $coordinates,
        ]);
    }

    public function about()
    {
        $background = PagesBackgroud::where('slug', 'about')->first()->image;
        $contacts = Contact::first()->translate(app()->getLocale());
        $about = Media::first();

        return view('layout.about')->with([
            'path'     => $background,
            'about'    => $about,
            'contacts'  => $contacts,
        ]);
    }
}
