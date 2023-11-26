@extends('layouts.app')


@section('content')

    <!-- Projects -->
    <div id="projects" class="basic-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-heading">Delivered projects</h2>
                    <p class="p-heading">Listed below are some of the most representative projects I've worked on. They range from basic web design for presentation sites to advanced web development for online shops</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-container">
                        <div class="image-container">
                            <a href="project.html">
                                <img class="img-fluid" src="{{ asset('assets/images') }}/project-1.jpg" alt="alternative">
                            </a>
                        </div> <!-- end of image-container -->
                        
                    </div> <!-- end of text-container -->
                   
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-3 -->
    <!-- end of projects -->


    <!-- Works -->
    <div class="basic-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="text-container">
                        <div class="image-container">
                            <a href="/project">
                                <img class="img-fluid" src="{{ asset('assets/images') }}/work-1.jpg" alt="alternative">
                            </a>
                        </div> <!-- end of image-container -->
                        <p><strong>Project:</strong> started a new website from ground up for a new product</p>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-4">
                    <div class="text-container">
                        <div class="image-container">
                            <a href="project.html">
                                <img class="img-fluid" src="{{ asset('assets/images') }}/work-2.jpg" alt="alternative">
                            </a>
                        </div> <!-- end of image-container -->
                        <p> <strong>Project:</strong> developed a new forum for the Visodream community </p>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-4">
                    <div class="text-container">
                        <div class="image-container">
                            <a href="project.html">
                                <img class="img-fluid" src="{{ asset('assets/images') }}/work-3.jpg" alt="alternative">
                            </a>
                        </div> <!-- end of image-container -->
                        <p><strong>Project:</strong> complete redesign of their corporate website and platform </p>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-4 -->
    <!-- end of works -->

@endsection