@extends('layouts.app')

@section('content')
<h1>home</h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum quaerat esse facilis nisi consequatur, adipisci eaque laudantium, qui, quos explicabo ipsa quidem illum asperiores eveniet similique. Ex nobis molestiae voluptate!</p>
@endsection

@section('sidebar')
@parent
<p>This is appended to the sidebar</p>
@endsection