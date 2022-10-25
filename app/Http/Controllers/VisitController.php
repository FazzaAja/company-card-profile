<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use JeroenDesloovere\VCard\VCard;

class VisitController extends Controller
{
    public function index(Product $product)
    {
        // $product = Product::all();

        // define vcard
        $vcard = new VCard();


        // define variables
        $lastname = $product->nama;
        $firstname = '';
        $additional = '';
        $prefix = '';
        $suffix = '';

        // add personal data
        $vcard->addName($lastname, $firstname, $additional, $prefix, $suffix);

        // add work data
        $vcard->addCompany('Antarestar');
        $vcard->addJobtitle($product->posisi);
        $vcard->addRole($product->deskripsi);
        $vcard->addEmail($product->email);
        $vcard->addPhoneNumber($product->phone, 'PREF;WORK');
        $vcard->addPhoneNumber($product->phone, 'WORK');
        $vcard->addAddress(null, null, 'Jl. Harapan Indah Boulevard', 'Bekasi', 'Jawa Barat', '17214', 'Indonesia');
        $vcard->addLabel('Jl. Harapan Indah Boulevard, Bekasi, Jawa Barat, 17214, Indonesia');
        $vcard->addURL('https://antarestar.com/');

        $vcard->addPhoto(public_path('/storage/' . $product->image));

        // dd($vcard);

        // return vcard as a string
        // return $vcard->getOutput();

        // return vcard as a download
        return $vcard->download();

        // save vcard on disk
        //$vcard->setSavePath('/path/to/directory');
        //$vcard->save();
    }
}
