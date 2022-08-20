<?php

namespace App\Http\Controllers;

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
        $contacts = Contact::first();
        $sliders = Slider::all();
        $media = Media::first();
        $categories = GalleryCategory::all();
        $gallery = Gallery::all();
        $teams = Team::all();
        $testimonials = Testimonial::all();

        return view('layout.home')->with([
            'contacts'  => $contacts,
            'sliders' => $sliders,
            'media' => $media,
            'categories' => $categories,
            'galleries' => $gallery,
            'teams' => $teams,
            'testimonials' => $testimonials,
        ]);
    }

    public function service($id)
    {
        $service = Service::findOrFail($id);
        $services = Service::all();
        $background = PagesBackgroud::where('slug', 'single-service')->first()->image;
        $contacts = Contact::first();

        return view('layout.service')->with([
            'path'     => $background,
            'services' => $services,
            'service' => $service,
            'contacts'  => $contacts,
        ]);
    }

    public function services()
    {
        $services = Service::all();
        $background = PagesBackgroud::where('slug', 'services')->first()->image;
        $media = Media::first();
        $contacts = Contact::first();

        return view('layout.services')->with([
            'path'     => $background,
            'media' => $media,
            'services' => $services,
            'contacts'  => $contacts,
        ]);
    }

    public function product($id)
    {
        $product = Product::findOrFail($id);
        $products = Product::get();
        $background = PagesBackgroud::where('slug', 'single-product')->first()->image;
        $contacts = Contact::first();

        return view('layout.product')->with([
            'product' => $product,
            'path' => $background,
            'products' => $products,
            'contacts'  => $contacts,
        ]);
    }

    public function products()
    {
        $products = Product::get();
        $background = PagesBackgroud::where('slug', 'products')->first()->image;
        $contacts = Contact::first();

        return view('layout.products')->with([
            'products' => $products,
            'path' => $background,
            'contacts'  => $contacts,
        ]);
    }

    public function faq()
    {
        $faqs = Faq::get();
        $background = PagesBackgroud::where('slug', 'faq')->first()->image;
        $media = Media::first();
        $contacts = Contact::first();

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
        $contacts = Contact::first();
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
        $contacts = Contact::first();
        $about = Media::first();

        return view('layout.about')->with([
            'path'     => $background,
            'about'    => $about,
            'contacts'  => $contacts,
        ]);
    }
}
