@extends('backend.layouts.app')
@section('title','News List')
@section('content')
    <style type="text/css">
        .ribbon {
            background-color: #a00;
            overflow: hidden;
            white-space: nowrap;
            /* top left corner */
            position: absolute;
            left: -40px;
            top: -15px;
            /* for 45 deg rotation */
            -webkit-transform: rotate(-45deg);
            -moz-transform: rotate(-45deg);
            -ms-transform: rotate(-45deg);
            -o-transform: rotate(-45deg);
            transform: rotate(-45deg);
            /* for creating shadow */
            -webkit-box-shadow: 0 0 10px #888;
            -moz-box-shadow: 0 0 10px #888;
            box-shadow: 0 0 10px #888;
            z-index: 10;
        }

        .ribbon a {
            border: 1px solid #faa;
            color: #fff;
            display: block;
            font-size: 8px;
            margin: 1px 0;
            padding: 5px 15px;
            text-align: center;
            text-decoration: none;
            /* for creating shadow */
            text-shadow: 0 0 5px #444;
        }
    </style>
    <div class="content">
        <!-- BEGIN: Top Bar -->
    @include('backend.layouts.header')
    <!-- END: Top Bar -->
        <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
            <h2 class="text-lg font-medium mr-auto">
                News List
            </h2>
            <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
                <a href="{{route('news.create')}}" class="button text-white bg-theme-1 shadow-md mr-2">Add New News</a>
            </div>
        </div>
        <div class="grid grid-cols-12 gap-6 mt-5">

            <!-- BEGIN: Data List -->
            <div class="i   ntro-y col-span-12 overflow-auto lg:overflow-visible" style="overflow-x: scroll">
                <table class="table table-report -mt-2" id="example" style="width:100%">
                    <thead>
                    <tr>
                        <th class="whitespace-no-wrap">IMAGES</th>
                        <th class="whitespace-no-wrap">Author Name</th>
                        <th class="text-center whitespace-no-wrap">News Title</th>
                        <th class="text-center whitespace-no-wrap">Share</th>
                        <th class="text-center whitespace-no-wrap">Posted At</th>
                        <th class="text-center whitespace-no-wrap">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($news as $new)

                        <tr class="intro-x">
                            <td class="w-40" style="overflow: hidden;">
                                <div class="flex">
                                    <div class="w-10 h-10 image-fit zoom-in">
                                        @if($new->flash_news == 1)
                                            <div class="ribbon">
                                                <a href="#">Flash News</a>
                                            </div>
                                        @endif
                                        @if($new->feature_image)
                                            <img alt="news image" class="tooltip rounded-full"
                                                 src="{{$new->feature_image}}"
                                                 title="Created at {!!$new->english_created_at!!}">
                                        @else
                                            <img alt="news image" class="tooltip rounded-full"
                                                 src="{{asset('uploads/default.jpg')}}"
                                                 title="No Image">
                                        @endif
                                    </div>
                                </div>
                            </td>
                            <td>{{ucfirst($new->posted_by)}}</td>
                            <td>
                                <a href="" class="font-medium whitespace-no-wrap">{{Str::limit($new->title,20)}}</a>
                                @forelse(getCategoryByNews($new->id) as $categoryTitle)
                                    <div class="text-gray-600 text-xs whitespace-no-wrap"> {{$categoryTitle}},</div>
                                @empty
                                @endforelse
                            </td>
                            <td>{{$new->share}}</td>
                            <td>{!!$new->created_at!!}</td>
                            <!--<td>-->
                        <!--    {!! Str::limit($new->description, 90) !!}-->
                            <!--</td>-->
                            <td class="table-report__action w-56">
                                <div class="flex justify-center items-center">

                                    <a href="{{route('news.show',$new->id)}}" title="View"
                                       class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                        <i data-feather="eye" class="w-4 h-4 mr-2"></i></a>
                                    <a href="{{route('news.edit',$new->id)}}" title="Edit"
                                       class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                        <i data-feather="edit-2" class="w-4 h-4 mr-2"></i></a>

                                    {!! Form::open(['method' => 'DELETE','route'=>['news.destroy',$new->id],'class'=>'inline']) !!}
                                    <button type="submit" title="Delete"
                                            class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"
                                            onclick="javascript:return confirm('Are you sure you want to delete?');">
                                        <i data-feather="trash" class="w-4 h-4 mr-2"></i>
                                    </button>
                                    {!! Form::close() !!}
                                </div>
                            </td>
                        </tr>

                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- END: Data List -->
        </div>
    </div>
@endsection
@section('js')
    @include('backend.layouts.flashMessage')
@endsection
