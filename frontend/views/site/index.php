<?php

/* @var $this yii\web\View */

$this->title = 'Homework Bonus site';
?>

<style>
    .myClass{
        display: flex;
        flex-direction: column;
    }
    .my-btn{
        width: 200px;
        margin-top: 20px;
    }
</style>
<div class="myClass">

    <a class="button btn-success btn-lg my-btn" href="/users">Users</a>
    <a class="button btn-success btn-lg my-btn" href="/doctor">Doctors</a>
    <a class="button btn-success btn-lg my-btn" href="/publicservant">Public Servants</a>
    <a class="button btn-success btn-lg my-btn" href="/country">Countries</a>
    <a class="button btn-success btn-lg my-btn" href="/disease">Diseases</a>
    <a class="button btn-success btn-lg my-btn" href="/diseasetype">Disease types</a>
    <a class="button btn-success btn-lg my-btn" href="/specialize">Specializations</a>
    <a class="button btn-success btn-lg my-btn" href="/discover">Discover</a>
    <a class="button btn-success btn-lg my-btn" href="/record">Records</a>
</div>
