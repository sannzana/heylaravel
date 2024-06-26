@extends('layout')

@section('title','LOGIN')





<header class="header">
<a href="#" class="logo">logo</a>

    <nav class="navbar">
        <a href="#">home</a>
        <a href="#">homeww</a>
        <a href="#">ddhome</a>
        <a href="#">hdfdome</a>
        <a href="#">hffome</a>



    </nav>
</header>



@section('styles')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');

    *{
        font-family: 'Roboto', sans-serif;
        margin:0;
        padding:0;
        box-sizing: border-box;

    }
   body{
        min-height: 100vh;
       background: url("/image/3800.jpg") no-repeat;
       background-size:cover ;
       background-position: center;

    }
   .header{
       position:fixed;
       top:0;
       left:0;
       width: :100%;
       padding: 1.3rem 10%;
       background: #1c7430;
       display:flex:
       justify-content:space-between;
       z-index: 100;
   }
    header#main-header{
        position: fixed;
        left: 0;
        right: 0;
        text-align: center;
        z-index: 99;
        background: rgba(20, 20, 20, 0.5) !important;
        backdrop-filter: blur(10px);
    }
    header .navbar-light .navbar-brand img.logo{
        width: 160px;
    }
    header .navbar .menu-header-menu-container, header .navbar .menu-main-menu-container{
        display: inline-block;
        width: 100%;
    }
    a{
        color: #d1d0cf;
        text-decoration: none;
        outline: medium none;
        transition: all 0.5s ease-out 0s;
    }
    header .navbar ul.navbar-nav{
        display: block;
        text-align: center;
    }
    header .navbar ul li{
        list-style: none;
        margin-right: 18px;
        position: relative;
        transition: all 0.3s ease-in-out;
        display: inline-block;
    }
    header .navbar ul li.menu-item a{
        font-size: 16px;
        font-weight: 400;
        position: relative;
        padding: 0 0 0 10px;
        line-height: 70px;
        z-index: 9;
        text-decoration: none;
        transition: all 0.3s ease-in-out;
        text-transform: uppercase;
    }
    header .navbar ul li.menu-item a:hover{
        color: #e50914 !important;
    }
    .navbar ul li:hover > .sub-menu{
        display: block !important;
        animation: fade-in 0.5s cubic-bezier(0.39,0.575,0.565,1) both;
    }
    .navbar ul li:hover .sub-menu{
        display: block;
        padding: 15px 0;
        background: #141414;
        position: absolute;
        top: 100%;
        left: 0;
        padding-left: 0;
        display: inline-block;
        min-width: 256px;
        box-shadow: 0 1px 30px 0 rgb(36 38 43 / 10%);
    }
    .navbar ul li .sub-menu li>.sub-menu{
        display: none;
    }
    .navbar .navbar-nav li:last-child .sub-menu li:hover>.sub-menu, .navbar .navbar-nav li:nth-last-child(2) .sub-menu li:hover > .sub-menu{
        left: auto;
        right: 100%;
        top: -15px;
    }
    .navbar ul li:last-child{
        margin-right: 0;
    }
    .navbar ul.navbar-nav>li.menu-item:hover > a, .navbar ul.navbar-nav > li.menu-item:hover>i{
        color: #e50914;
    }

    .navbar ul.navbar-nav>li.menu-item>a{
        text-transform: uppercase;
    }
    .navbar ul.navbar-nav>li:hover > a{
        font-weight: 600;
    }

    .navbar ul li.menu-item a{
        font-size: 16px;
        font-weight: 400;
        position: relative;
        padding: 0 0 0 10px;
        line-height: 70px;
        z-index: 9;
        text-decoration: none;
        transition: all 0.3s ease-in-out;
        text-transform: capitalize;
    }
    .navbar ul li .sub-menu{
        display: none;
    }
    .navbar ul li .sub-menu li{
        margin-right: 0;
        padding: 0 15px;
    }
    .navbar ul.sub-menu li{
        display: block;
        text-align: left;
    }
    .navbar ul li{
        list-style: none;
        margin-right: 18px;
        position: relative;
        transition: all 0.3s ease-in-out;
        display: inline-block;
    }

    .menu-sticky .navbar ul li .sub-menu > li a{
        line-height: 1em;
    }

    .navbar ul li .sub-menu li > a{
        font-size: 14px;
        border-radius: 0;
        display: inline-block;
        width: 100%;
        line-height: 1em;
        padding: 15px;
        color: #d1d0cf;
        position: relative;
        overflow: hidden;
    }

    .navbar ul li.menu-item a{
        font-size: 16px;
        font-weight: 400;
        position: relative;
        padding: 0 0 0 10px;
        line-height: 70px;
        position: relative;
        z-index: 9;
        text-decoration: none;
        transition: all 0.3s ease-in-out;
        text-transform: capitalize;
    }
    .navbar ul li .sub-menu li>a::before{
        position: absolute;
        content: "";
        background: #e50914;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        width: 4px;
        opacity: 0;
        transform: translate3d(-100%,0,0);
        transition: all 0.5s ease-in-out;
    }

    header .navbar ul li .sub-menu li.current-menu-parent>a::after,
    header .navbar ul li .sub-menu li .sub-menu li.menu-item.current-menu-item>a::after,
    header .navbar ul li .sub-menu li .sub-menu li.menu-item:hover>a::after{
        opacity: 1;
        transform: translate3d(0,0,0);
        transition: all 0.5s ease-in-out;
    }

    header .navbar ul li .sub-menu li:hover>a::after{
        opacity: 1;
        transform: translate3d(0,0,0);
        transition: all 0.5s ease-in-out;
    }
    .navbar ul li .sub-menu li >a::after{
        position: absolute;
        content: "";
        background: linear-gradient(270deg, rgba(11,1,2,0) 0% , rgba(255,55,65,0.3) 100%);
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        transform: translate3d(-100%,0,0);
        transition: all 0.5s ease-in-out;
        z-index: -1;
        opacity: 0;
    }

    header .navbar ul li .sub-menu li:hover>a::before{
        opacity: 1;
        transform: translate3d(0,0,0);
        transition: all .5s ease-in-out;
    }
    .nav-open .nav-overlay{
        visibility: visible;
        transition: 0.3s;
    }

    .nav-overlay{
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        opacity: 0;
        z-index: 900;
        display: block;
        width: 100%;
        position: fixed;
        visibility: hidden;
        background: rgba(0, 0, 0, 0.6);
        transition: 0.3s;
    }
    .more-toggle{
        color: #fff !important;
        font-size: 22px;
    }

    .dropdown-toggle.more-toggle::after{
        content: none;
    }
    .mobile-more-menu{
        display: none;
    }
    .more-menu{
        position: absolute;
        top: 50px;
        left: auto;
        right: 0;
        min-width: 18rem;
        padding: 0.35rem 0.5rem;
        margin: 0;
        opacity: 0;
        transform: translate(0,70px);
        transition: all 0.3s ease-out 0s;
        background: #191919;
        box-shadow: 0px 3px 10px rgba(0, 0, 0, 0.75);
        visibility: hidden;
        z-index: 999;
    }
    .more-menu.show{
        opacity: 1;
        transform: translate(0,0);
        visibility: visible;
    }

    header .navbar ul li:last-child{
        margin-right: 0;
    }

    .nav-item span.dots{
        height: 10px;
        width: 10px;
        font-size: 0;
        text-align: center;
        padding: 0;
        position: absolute;
        top: 3px;
        right: 12px;
        border-radius: 50%;
    }
    .menu-right .nav-items span.dots{
        right: 0;
    }

    .navbar-right li .iq-sub-dropdown .iq-sub-card{
        position: relative;
        font-size: inherit;
        padding: 15px 15px;
        line-height: normal;
        color: inherit;
        text-align: left;
        display: inline-block;
        width: 100%;
        border: 1px solid;
        border-image-slice: 1;
        border-width: 0 0 1px 0;
        border-image-source: linear-gradient(to right, rgba(209,208,207,0.6), rgba(209,208,207,0.3), rgba(209,208,207,0));
    }
    .iq-sub-card.setting-dropdown{
        padding: 15px 15px 15px 0 !important;

    }

    .navbar-right li .iq-sub-dropdown a.iq-sub-card:last-child{
        border-bottom: 0;
    }
</style>
@endsection
