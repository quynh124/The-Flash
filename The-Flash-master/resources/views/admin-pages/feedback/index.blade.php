@extends('layouts.admin.admin-layout')

@section('content')
<x-create-form title="Create New User" :columnsName="$feedbacks"></x-create-form>
<x-jquery-data-table :records="$records" :columnsName="$feedbacks" title="Example Title" subTitle="Basic Example"></x-jquery-data-table>
@endsection
