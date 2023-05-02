<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function listProjects(){
        $listproject = [
            ['id' => 1,
            'name' => 'MuRee',
            'desc' => 'This project is about Artificial Intelligence music recommendation system with content-based filtering based on genre and release year of the music.',
            'complexity' => 'Medium',
            'picture' => 'music.png'],

            ['id' => 2,
            'name' => 'AnderCooked',
            'desc' => 'This project is a website that gives information about cooking recipes and calories consumed every week, also there is a virtual assistant that helps user in cooking.',
            'complexity' => 'High',
            'picture' => 'cooking.jpg'],

            ['id' => 3,
            'name' => 'B-Lib',
            'desc' => 'This project is about library system, like borrowing, returning, extending books in BCA Learning Institute Training Lounge and Library.',
            'complexity' => 'High',
            'picture' => 'library.jpg'],

            ['id' => 4,
            'name' => 'Pneumonia Detection',
            'desc' => 'This project is for detecting pneumonia by reading the CT-Scan of lungs. The model for detecting the pneumonia is trained by using a Deep Learning method.',
            'complexity' => 'Low',
            'picture' => 'pneumonia.jpg']
        ];

        return view('myprofile', compact('listproject'));
    }

    public function detailProjects($id){
        $listproject = [
            ['id' => 1,
            'name' => 'MuRee',
            'desc' => 'This is my very first project and also my first time learning about Artificial Intelligence. My team tries to implement AI into a music recommendation system with content-based filtering based on genre and release year of the music. MuRee is similar to Youtube music, Spotify, etc but in a smaller scope and only has 100 songs.',
            'complexity' => 'Medium',
            'picture' => 'music.png',
            'team' => '5 people',
            'duration' => '3 months',
            'github' => 'https://github.com/StefanusLuigiMarcellino/muree'],

            ['id' => 2,
            'name' => 'AnderCooked',
            'desc' => 'This is a Web Programming project. My team is trying to create a website called AnderCooked that gives information about cooking recipes and calories consumed every week, also there is a virtual assistant that helps user in cooking. This project is still in development. Estimation done in July 2023.',
            'complexity' => 'High',
            'picture' => 'cooking.jpg',
            'team' => '5 people',
            'duration' => '5 months',
            'github' => 'https://github.com/StefanusLuigiMarcellino/andercooked'],

            ['id' => 3,
            'name' => 'B-Lib',
            'desc' => 'This is a Software Engineering project. My team build a library system website-based, like borrowing, returning, extending books in BCA Learning Institute Training Lounge and Library. B-Lib also provides e-book which allows students to read, borrow, return via online.',
            'complexity' => 'High',
            'picture' => 'library.jpg',
            'team' => '5 people',
            'duration' => '4 months',
            'github' => 'https://github.com/StefanusLuigiMarcellino/b-lib'],

            ['id' => 4,
            'name' => 'Pneumonia Detection',
            'desc' => 'This is my easiest project. It is for detecting pneumonia by reading the CT-Scan of lungs. The model for detecting the pneumonia is trained by using a Deep Learning method called Convolutional Neural Network. This project has no UI/UX. Therefore it can be done in 1 month.',
            'complexity' => 'Low',
            'picture' => 'pneumonia.jpg',
            'team' => '5 people',
            'duration' => '1 month',
            'github' => 'https://github.com/StefanusLuigiMarcellino/pneumonia']
        ];

        $project = [];
        foreach($listproject as $temp){
            if($temp["id"] == $id){
                $project = $temp;
            }
        }

        return view('detail', compact('project'));
    }
}
