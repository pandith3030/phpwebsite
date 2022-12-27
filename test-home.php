<!--Designed by CodingTuting.Com-->
<!DOCTYPE html>
<html lang="en">
<style>
/*Designed by CodingTuting.Com*/
html {
    scroll-behavior: smooth;
}

body {
    padding: 0;
    margin: 0;
}

section {
    display: block;
    padding:0 4em 5em;
}

h1, h2, h3 {
    font-family: roboto;
    color:#2E2E2E
}

.col-5 {
    width: 40%;
    display: inline-table;    
}

.col-6 {
    width:50%;
    display: inline-table;
}

.col-7 {
    width: 60%;
    display: inline-table;
}

.sec-heading {
    text-align: center;
    font-size: 40px;
    padding: 1.5em 0;
    margin: 0;
}

p {
    font-family: lato;
    color: #717171;
    line-height: 1.5;
    text-align: justify
}

#topHeader {
    padding: 1em 4em;    
    font-family: roboto;
}

#topInfo {
    padding: 0;
    margin-top: 10px;
    text-align: right;
    color:#2E2E2E
}

    #topInfo li {
        list-style-type: none;
        display: inline;
    }

    #topInfo li:last-child {
        padding-left: 21px;
    }

.logo {
    color: #ef4b42;
    font-size: 28px;
    font-family: roboto;
}

nav {
    padding: 18px 0;
}

.mainMenu {
    float: right;
}

.mainMenu a {
    padding:15px 0;
    margin-left: 35px;
    font-size: 20px;
    text-decoration: none;
    font-weight: 500;
    color: #2E2E2E;
    position: relative;

    -webkit-transition: all .3s ease-in-out;
    transition: all .3s ease-in-out;
}

.mainMenu a:hover, .mainMenu a:focus {
    color: #ef4b42;
}

.mainMenu a:not(:last-child):hover:after,
.mainMenu a:not(:last-child):focus:after {
    width: 100%;
    left: 0;
}

.mainMenu a:after {
    top: 40px;
    content: "";
    display: block;
    height: 2px;
    left: 50%;
    position: absolute;
    width: 0;
    background: #ef4b42;

    -webkit-transition: width 0.3s ease 0s, left 0.3s ease 0s;
    transition: width 0.3s ease 0s, left 0.3s ease 0s;
}

.mainMenu a:first-child {
    margin:0;
}

.mainMenu a:last-child {
    border: 2px solid #ef4b42;
    padding: 8px 16px !important;
    font-size: 17px;
    border-radius: 20px;
    text-align: center;
    color: #ef4b42;
}

.mainMenu a:last-child:hover,
.mainMenu a:last-child:focus {
    background-color: #ef4b42;
    color: white;
}

#intro {
    padding-top: 3em;
    position: relative;
}

    #intro div {
        display: inline-table;
    }

#intro-info {
    width:50%;
    float: left;
    margin-top: 5.8%;
}

    #intro-info h1 {
        font-size: 50px;        
        font-weight: 600;
        margin: 0px 0 30px;
    }

    #intro-info span {
        display: block;
        font-family: raleway;
        font-weight: 600;
        padding: 0 0 55px;
        font-size: 23px;
    }

    .brand-btn {
        text-decoration: none;
        background-color: #ef4b42;
        border:2px solid #ef4b42;
        color: white;
        padding: 10px 40px;
        border-radius: 30px;
        font-size: 17px;
        font-family: roboto;

        -webkit-transition: all .3s ease-in-out;
        transition: all .3s ease-in-out;
    }

    .brand-btn:hover, .brand-btn:focus {
        background-color: transparent;
        color: #ef4b42;
    }

#development-img {
    width:50%;
    text-align: right;
}

#development-img img {
    height:430px;
}

#delivery {
    background-color: #f6f6f6
}
    
    #delivery img {
        height:300px;
    }
    #delivery h2 {
        font-weight: 500;
        font-size: 30px
    }

    #delivery p {        
        margin-bottom: 40px;
    }

    .delivery-img {
        float: left;    
    }

#services ul {
    margin: 0;
    padding: 0;
    text-align: center;
}

    #services ul li {
        list-style-type: none;
        display: inline-block;
        width: 16%;
        text-align: center;
    }

        #services ul li .fas, #services ul li .fab {
            font-size: 80px;
            color:#ef4b42;
        }

        #services ul li div {
            width: 115px;
            padding: 15px;
            border-radius: 6px;
            border: 3px solid transparent;
            margin-left: auto;
            margin-right: auto;
            text-align: center;

            -webkit-transition: all .2s ease-in;
            transition: all .2s ease-in
        }

        #services ul li div:hover {
            border-color: #f7f7f7;
        }
        
            #services ul li div a {
                text-decoration: none;
            }

        #services ul li span {
            display: block;
            padding-top: 15px;
            color: #5d5d5d;
            font-family: lato;            
        }

#services #service-footer {
    text-align: center;
    padding-top: 60px
}

#success-story {
    background-color: #f6f6f6;
}

    .slider img {
        height: 300px;
    }

    .slider .slide-text {
        float: left;
    }

    .slider .slide-img {
        text-align: center;
    }

        .slider .slide-text div {
            width: 75%;
            margin-left: auto;
            margin-right: auto;
            margin-top: 40px;
        }

    .slider p {
        padding-bottom: 30px;
    }

.brand-logos div {
    margin-left: auto;
    margin-right: auto;
    padding:10px 0;
}

.brand-logos div::-webkit-scrollbar {
    background: transparent;
}

    .brand-logos div a {
        text-align: center;
        display: table-cell;
        width: 12%;
        border: 2px solid #eaeaea;
        background-color: #fff;
        padding: 25px;
        cursor: pointer;

        -webkit-transition: all .2s ease-in;
        transition: all .2s ease-in;
    }

    .brand-logos div a:hover, .brand-logos div a:focus {        
        border-right: 2px solid #eaeaea !important;

        -webkit-transform: scale(1.1);
        transform: scale(1.1);

        -webkit-transition: all .2s ease-in;
        transition: all .2s ease-in;
    }

    .brand-logos div a:not(:last-child) {
        border-right: none;
    }

        .brand-logos div a img {
            height:30px;
        }

    #highlights {
        background-color: #f6f6f6;
    }

    #highlights .slider img {
        border-top-left-radius: 118px;
        border-top-right-radius: 55px;
        border-bottom-right-radius: 120px;
        border-bottom-left-radius: 55px;
    }

    #topList {
        background-color: #f6f6f6;
    }

        #topList a {
            border:none;
            padding: 0 20px;
            background-color: #f6f6f6;
        }

        #topList a:hover {
            border:none !important;
        
            -webkit-transform: scale(1);
            transform: scale(1);
        }

            #topList a span {
                font-size: 13px;
                color: #717171;
                font-family: lato;
                display: block;
            }

        #topList img {
            height: 70px;
        }

footer {
    background-color: #ef4b42;
    padding: 3em 4em 2em;
}

    footer .logo {
        color:#fff;
    }

    footer .row {
        margin: 2em 0;
        font-family: lato;
        color: #fff;
        position: relative;
        border-bottom: 1px solid;
    }

    footer ul {
        padding:0;
    }

        footer ul li {
            list-style-type: none;
            padding:0;            
            line-height: 2;
        }
            
        footer .footer-cat {
            font-size: 20px;
        }

        .footer-cat-links a {
            color: #fff;
            text-decoration: none;
            position: relative;
        }

        .footer-cat-links a:after {
            top: 21px;
            content: "";
            display: block;
            height: 2px;
            left: 50%;
            position: absolute;
            width: 0;
            background: #fff;
            
            -webkit-transition: width 0.3s ease 0s, left 0.3s ease 0s;
            transition: width 0.3s ease 0s, left 0.3s ease 0s;
        }

        .footer-cat-links a:hover:after, .footer-cat-links a:focus:after {
            width: 100%;
            left: 0;
        }

        footer #subscribe {
            margin: 20px 0px 30px;
        }

        input#subscriber-email {
            outline: none;
            padding: 8px;
            background: #ff6962;
            border: 1px solid #fff;
            color: #fff;
            border-radius: 4px 0px 0px 4px;
        }

        input#subscriber-email::-webkit-input-placeholder {
            color:#fff;
        }

        input#subscriber-email:-ms-input-placeholder {
            color:#fff;
        }

        input#subscriber-email::-ms-input-placeholder {
            color:#fff;
        }

        input#subscriber-email::placeholder {
            color:#fff;
        }

    .col-3 {
        display: inline-table;
        width:25%;
    }

    .col-3#newsletter {
        width:24%
    }

    .col-3#newsletter #btn-scribe {
        margin-left: -4px;
        border: 1px solid #fff;
        border-radius: 0px 4px 4px 0;
        padding: 8px 5px;
        background-color: #fff;
        color: #ff6962;
        cursor:pointer;
    }

    .social-2 {
        display: none;
    }
    .social-links {
        bottom: 44px;
        position: absolute;
        left: 0;
    }
    
        .social-links a {
            color: #fff;
            font-size: 20px;
            border: 1px solid;
            border-radius: 20px;
            padding: 6px;

            -webkit-transition:all .2s ease-in;
            transition:all .2s ease-in;
        }

        .social-links a:not(:last-child) {
            margin-right: 10px;
        }

        .social-links a:hover, .social-links a:focus {
            background-color: #ff6962;
        }

            .social-links a i {
                width: 25px;
                height: 25px;
                text-align:center;
            }

            #newsletter #address li:not(:first-child) {
                padding: 20px 0;
            }
        
                #newsletter #address li i {
                    font-size: 45px;
                    width: auto;
                    padding: 5px;
                }

                    #newsletter #address li div {
                        font-size: 14px;
                        width: 80%;
                        text-align: left;
                        float: right;
                        line-height: 1.3;
                    }

    #copyright {
        text-align: center;
        color:#fff;
        font-family: lato;
    }

    a#gotop {
        color: #fff;
        text-decoration: none;
        z-index:9999;
        display: none;
        font-family: lato;
        position: fixed;
        bottom: 1.5em;
        right: 1.5em;
        padding: 10px;
        background-color: #ff6962;
        border-radius: 5px;

        -webkit-box-shadow: 0px 5px 7px 0px rgba(0,0,0,0.75);
        box-shadow: 0px 5px 7px 0px rgba(0,0,0,0.75)
    }

#owner {
    text-align: center;
    padding: 20px 0 0px;
    color: #fff;
    font-family: lato;
    font-size: 25px;
}

    #owner a {
        color:#fff;        
    }

/* Desktops and laptops ----------- */  
@media only screen and (max-width : 1280px) {  
    #intro-info {
        width: 40%;
    }
    #intro-info h1 {
        font-size: 36px;
    }
    #development-img {
        width: 60%;
    }
    #development-img img {
        height: 400px;
    }
}

/* iPads to Smartphone for Common Elements ----------- */  
@media only screen and (max-width : 1024px) {

    nav {
        padding: 0;
    }

    .menu-btn-3 {
        height: 32px;
        width: 40px;
        cursor: pointer;
        z-index: 2;
        position: absolute;
        right: 0;
        padding-right: 2em;
        top: 1.75em;
    }
    
    .menu-btn-3 span,
    .menu-btn-3 span::before,
    .menu-btn-3 span::after {
        background: #fff; 
        content: '';
        position: absolute;
        width: 40px;
        height: 6px;         
        margin-top: 13px;
        
        -webkit-transform: rotate(180deg);
        transform: rotate(180deg);
    
        -webkit-transition: .5s ease-in-out;
        transition: .5s ease-in-out;
    }
    
    .menu-btn-3 span::before {
        margin-top:-12px;
    }
    
    .menu-btn-3 span::after {
        margin-top:12px;
    }
    
    .menu-btn-3.active span {
        background: transparent;
    }
    
    .menu-btn-3.active span::before {
        margin-top: 0;
    
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
    }
    
    .menu-btn-3.active span::after {
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);

        margin-top: 0;
    }

    #intro-info {
        width: 40%;
    }
    
        #intro-info h1 {
            font-size: 25px;
            margin: 0px 0 20px;
        }

        #intro-info span {
            font-size: 19px;
            padding: 0 0 45px;
        }
    
    #development-img {
        width: 60%;
    }
    
        #development-img img {
            height: 290px;
        }    
    
    #topHeader {
        position: relative;
        padding-bottom: 0;
    }

        #topHeader .logo {
            position: absolute;
            color: #fff;
            z-index: 2;
            top: 0;
            padding-top: .5em;
            font-size: 40px;
            left: 0;
            padding-left: 1em;
        }

    .mainMenu {
        position: absolute;
        top: 0;
        right: 0;
        background-color: #ef4b42;
        width: 100%;
        padding: 1em 2em 2em;
        z-index: 1;
        
        -webkit-transition: all 1s ease-in-out;
        transition: all 1s ease-in-out;
    }

    .mainMenu.active  {
        padding-top:5em;
    }

        .mainMenu a {
            display: list-item;
            text-align: right;
            width: 100%;
            list-style-type: none;
            margin: 0;
            color: #fff;
            pointer-events: none;
            line-height: 0;
            padding: 0 2em 0 0;
            opacity: 0;
            visibility: hidden;
            
            -webkit-transition: all .6s ease-in-out;
            transition: all .6s ease-in-out;
        }
        
        .mainMenu a:last-child {
            background-color: #ff6962;
            color: #fff;
            border-color: #fff;
            width: 120px;
            float: right;
            text-align: center;
            margin-top: 20px;
        }


        .mainMenu a.active {
            pointer-events: auto;
            line-height: 1.3;
            padding-top: 15px;
            padding-bottom: 15px;
            opacity: 1;
            visibility: visible;
        }

        .mainMenu a.active:hover {
            background-color: #ff6962;
        }

        .mainMenu a.active:first-child {
            border-top: 1px solid;
            margin-top: 18px;
            padding-top: 30px;
        }

            .mainMenu a span {
                color: #fff;
            }
            .mainMenu a:after {
                display:none;
            }

    .brand-logos div {
        overflow-x: auto;
        overflow-y: hidden;        
    }

    #delivery .col-5 {
        display: block;
        float: none;
        width: 100%;
        text-align: center;
    }

    #delivery .col-7 {
        width: 100%;
        display: block;
        text-align: center;
    }
    .col-3 {
        display: block;
        width: 100%;
        padding-bottom: 1em;
    }
    .col-3#newsletter {
        width: 100%;
        position: relative;
        padding-bottom: 0;
    }

    .social-1 {
        display: none !important;
    }

    .social-2 {
        display: inline-table;
        position: absolute;
        top: 7em;
        padding-bottom: 1.5em;
        width: 100%;
    }

    #address {
        margin-top: 8em;
    }

    #newsletter #address li i {
        width: auto;
    }

    #newsletter #address li div {
        font-size: 14px;
        width: auto;
        text-align: -webkit-auto;
        float: none;
        line-height: 2;
        display: inline-block;
        padding: 10px 0 15px;
    }

    #newsletter #address li div:last-child {
        padding-bottom: 0;
    }

    #newsletter #address li:not(:first-child) {
        padding: 20px 0 0;
    }
}

/* iPads (portrait)----------- */  
@media only screen and (min-width : 768px) and (max-width : 1024px) and (orientation : portrait) {

    section {
        padding: 0 3em 3em;
    }

    .sec-heading {
        padding:1em 0;
    }

    #services ul li {
        width: 30%;
    }

    #delivery img {
        height: 230px;
    }

    #highlights {
        display: inline-block;
    }

    .slider img{
        height: 220px;
    }

    .slider .slide-text div {
        width: 85%;
        margin-top: 0px;
    }

    footer {
        padding-right:3em;
        padding-left:3em;
    }

    .col-3 {
        display: block;
        width: 100%;
        padding-bottom: 1em;
    }
}

/* iPads (landscape) ----------- */  
@media only screen and (min-width : 768px) and (max-width : 1024px) and (orientation : landscape) {  
    
    section {
        padding-bottom: 3em;
    }

    .sec-heading {
        padding:1em 0;
    }
    
    #intro {
        padding-top: 4em;
        padding-bottom: 3em;
    }
    
    #development-img img {
        height: 290px;
    }
    
    #intro-info {
        margin-top: 4.8%;
    }
        
        #intro-info h1 {
            font-size: 23px;
            margin: 0px 0 20px;
        }

        #intro-info span {
            font-size: 20px;
            padding: 0 0 45px;
        }

    .sec-heading {
        font-size: 30px;
    }

    #services ul li {
        width: 30%;
    }

    #services ul li .fas, #services ul li .fab {
        font-size: 60px;
    }

    .slider img {
        height: 210px;
    }

    #highlights, #success-story {
        display: inline-block;
    }

    .slider .slide-text div {
        margin-top: 0px;
    }

    .col-3 {
        display: block;
        width: 100%;
        padding-bottom: 1em;
    }
}

/* Mini Tablet and Big Mobile */
@media only screen and (min-width : 640px) and (max-width : 760px) and (orientation : landscape) {  
    
    section {
        padding: 0 2em 3em;
    }

    .sec-heading {
        font-size: 26px;
        padding:1em 0;
    }

    #intro {
        padding-bottom: 2em;
        padding-right: 2em;
        padding-left: 2em;
    }

    #intro-info {
        width: 45%;
        margin-top: 2.8%;
    }
        
        #intro-info h1 {
            font-size: 22px;
            margin: 0px 0 15px;
        }

        #intro-info span {
            font-size: 17px;
            padding: 0 0 35px;
        }

    #development-img {
        width: 55%;
    }

        #development-img img {
            height: 210px;
        }

    #delivery h2 {
        font-size: 24px;
    }

    #services ul li {
        width: 30%;
    }

    #services ul li .fas, #services ul li .fab {
        font-size: 60px;
    }

    #services #service-footer {
        padding-top: 40px;
    }

    #success-story, #highlights {
        display: inline-block;
    }

    .slider img {
        height: 190px;
    }

    .slider .slide-text div {
        width: 90%;
        margin-top: 0px;
    }    
}

/* Mini Tablet ----------- */  
@media only screen and (max-width : 600px) {  
     section {
        display: block;
        padding: 0 2em 5em;
    }

    .sec-heading {
        font-size: 26px;
    }
    
    #intro {
        padding-bottom:12em;
        padding-top: 1em;
    }
        
        #intro-info h1 {
            font-size: 26px;
        }

        #intro-info span {
            padding: 0 0 45px;
            font-size: 20px;
        }

        #intro-info, #development-img {
            display: block !important;
            width: 100%;
            text-align: center;
        }

        #intro-tag-btn {
            position: absolute;
            display: block !important;
            bottom: 60px;
            width: 100%;
            left: 0;
            right: 0;
        }

    .col-3 {
        display: block;
        width: 100%;
        padding-bottom: 1em;
    }

    .col-5 {
        width: 100%;
    }

    .col-7 {
        width: 100%;
    }

    .sec-heading {
        padding: 1em 0;
    }

    .delivery-img {
        float: none;
        text-align: center;
    }

    #delivery img {
        height: 350px;
    }

    #delivery h2 {
        text-align: center;
        font-size: 24px;
    }
    
    .btn-footer {
        text-align: center;
    }

    #services ul li {
        width: 32.5%;
    }

    #success-story {
        background-color: #f6f6f6;
        display: inline-block;
    }

    .slider .slide-text div {
        width: 75%;
        text-align: center;
        margin-top: 0;
    }

    .brand-logos div {
        overflow-x: auto;
        overflow-y: hidden;
    }

        .slider .slide-text div h2 {
            margin: 0;
        }

    #highlights .slider .slide-text div {
        width: 85%;
        margin-top: 0;
    }

    .slider img {
        height: 200px;
    }

    .slider .slide-text div h2 {
        margin: 0;
    }

    .slider {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
            -ms-flex-flow: column;
                flex-flow: column;
    }

    .col-6 {
        width: 100%;
        display: block;
    }

    .slider .slide-text {
        float: none;
        -webkit-box-ordinal-group: 3;
        -ms-flex-order: 2;
        order: 2;
    }

    .slider .slide-img {
        -webkit-box-ordinal-group: 2;
        -ms-flex-order: 1;
        order: 1;
    }

    .slider .slide-text div, #highlights .slider .slide-text div {
        margin-top: 30px;
    }

    footer {
        padding: 3em 2em 2em;
    }
}

/* Smartphones (portrait and landscape) ----------- */  
@media only screen and (max-width : 480px) {  
    #topHeader .logo {
        padding-top: .8em;
        font-size: 30px;
        padding-left: .8em;
    }

    #intro {
        padding: 1em 1em 12em 1em;
    }

    #development-img img {
        height: 280px;
    }

    .mainMenu a.active:first-child {
        margin-top: 15px;
    }

    section {
        padding: 0 1em 3em;
    }

    .sec-heading {
        padding: 1em 0;
    }

    #delivery img {
        height: 230px;
    }

    #services ul li {
        width: 38%;
    }
    
    #services ul li:nth-child(even) {
        margin-left: 40px;
    }

    #services ul li:nth-child(odd) {
        margin-right: 40px;
    }
    
    .col-6 {
        width: 100%;
        display: block;
    }

    #success-story .slider {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-flow: column;
        flex-flow: column;
    }
    
        .slider .slide-text {
            float: none;
            -webkit-box-ordinal-group: 3;
            -ms-flex-order: 2;
            order: 2;
        }
        
        .slider .slide-img {
            text-align: center;
            -webkit-box-ordinal-group: 2;
            -ms-flex-order: 1;
            order: 1;
        }

        .slider .slide-text div {
            width: 100%;
            text-align: center;
        }

    footer {
        padding-right: 1em;
        padding-left: 1em;
    }

    a#gotop {
        right: 2.5em;
    }
}

/* Small Devices (portrait and landscape) ----------------- */
@media only screen and (max-width : 380px) {  
    #development-img img {
        height: 230px;
    }
    
    #intro-tag-btn {
        width: 90%;
        margin-right: auto;
        margin-left: auto;
    }

    #delivery img {
        height: 180px;
    }

    #services ul li {
        width: 40%;
    }

    #services ul li:nth-child(even) {
        margin-left: 20px;
    }

    #services ul li:nth-child(odd) {
        margin-right: 20px;
    }

    #services ul li div {
        padding: 15px 5px;
    }

    .slider img {
        height: 200px;
    }
}

/* X-Tra Small Devices  (portrait and landscape) ----------- */  
@media only screen and (max-width : 320px) {  
    #development-img img {
        height: 210px;
    }
    
    #services ul li:nth-child(odd) {
        margin-right: 0;
    }

    #services ul li:nth-child(even) {
        margin-right: 0;
    }

    #services ul li {
        width: 45%;
    }

        #services ul li div {
            padding: 15px 5px;
        }

    .slider img {
        height: 180px;
    }
}
</style>
<script>
/*Designed by CodingTuting.Com*/
$(document).ready(function(){
    
    $(window).scroll(function(){
        if($(this).scrollTop() >= 500) {
            $("#gotop").fadeIn();
      
            $("#top-btn").click(function(){
                $(window).scrollTop(0);
            });
         }
         else {
             $("#gotop").fadeOut();
         }    
    });
});

function menuBtnFunction(menuBtn) {
    menuBtn.classList.toggle("active");
    $(".mainMenu").toggleClass("active");
    $(".mainMenu a").toggleClass("active");
}
</script>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://fonts.googleapis.com/css?family=Lato|Nanum+Gothic:700|Raleway&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css" rel="stylesheet">
    
    <link rel="stylesheet" href="StyleIT.css">

    <title>iTechnology</title>
</head>
<body>    
    
    <header id="topHeader">
        <ul id="topInfo">
            <li>+974 98765432</li>
            <li>info@itecnology.com</li>
        </ul>
        
        <nav>
            <span class="logo">iTechnology</span>
            <div class="menu-btn-3" onclick="menuBtnFunction(this)">
                <span></span>
            </div>
            <div class="mainMenu">
                <a href=""><span>Technology</span></a>
                <a href=""><span>Service</span></a>
                <a href=""><span>Portfolio</span></a>
                <a href=""><span>About Us</span></a>
                <a href=""><span>Career</span></a>
                <a href=""><span>Blog</span></a>
                <a href="">Work With Us</a>
            </div class="mainMenu">
        </nav>
    </header>

    <section id="intro">
        <div id="intro-info">
            <div>
                <h1>Full Service Mobile App Development Company</h1>
                <div id="intro-tag-btn">
                    <span>Over 100M app downloads across 1500+ projects.</span>
                    <a href="" class="brand-btn">Let's Talk</a>
                </div>
            </div>
        </div>

        <div id="development-img">
            <img src="https://www.dropbox.com/s/7hwnjccu15vt90e/mobileDevlopment.svg?raw=1" alt="Mobile App Development" title="Mobile App Development"/>
        </div>
    </section>

    <section id="delivery">
        <h1 class="sec-heading">Delivering Experience Since 2009</h1>
        <div class="col-5 delivery-img">
            <img src="https://www.dropbox.com/s/ipx91osglyczpdt/delivery_experience.svg?raw=1" alt="Productivity Delivering Experience" title="Delivering Experience Since 2009"/>
        </div>
        <div class="col-7">
            <h2>Accelerating your business growth with Digital Experiences</h2>
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br/><br/> It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
            <div class="btn-footer">
                <a href="" class="brand-btn">Contact Us</a>
            </div>
        </div>
    </section>

    <section id="services">
        <h1 class="sec-heading">Our Services</h1>
        <ul>
            <li>
                <div>
                    <a href="">
                        <i class="fas fa-laptop"></i><span>Stratagy and Consultant</span>
                    </a>
                </div>
            </li>
            <li>
                <div>
                    <a href="">
                        <i class="fas fa-users"></i><span>User Experience Design</span>
                    </a>
                </div>
            </li>
            <li>
                <div>
                    <a href="">
                        <i class="fas fa-mobile-alt"></i><span>Mobile App Development</span>
                    </a>
                </div>
            </li>
            <li>
                <div>
                    <a href="">
                        <i class="fab fa-chrome"></i><span>Web App Development</span>
                    </a>
                </div>
            </li>
            <li>
                <div>
                    <a href="">
                        <i class="fas fa-ribbon"></i><span>Quality Analysis and Testing</span>
                    </a>
                </div>
            </li>
            <li>
                <div>
                    <a href="">
                        <i class="fas fa-ticket-alt"></i><span>Application Management & Support</span>
                    </a>
                </div>
            </li>
        </ul>
        
        <div id="service-footer">
            <a href="" class="brand-btn">View All Service</a>
        </div>
    </section>
    
    <section id="success-story">
        <h1 class="sec-heading">Our Success Stories</h1> 
        
        <div class="slider">
            <div class="col-6 slide-text">
                <div>
                    <h2>World Travel Protection</h2>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.
                    </p>
                    <a href="" class="brand-btn">Contact Us</a>
                </div>
            </div>
            <div class="col-6 slide-img">
                <img src="https://www.dropbox.com/s/ipx91osglyczpdt/delivery_experience.svg?raw=1" alt="World Travel App Development" title="World Travel Protection"/>
            </div>
        </div>
    </section>
       
    <section id="revenue" class="brand-logos">
        <h1 class="sec-heading">We Drive Growth & Revenue for the Best Companies</h1> 
        <div>
            <a><img src="https://www.dropbox.com/s/lmvtthec9yn0ti6/Allianz.png?raw=1" alt="Allianz" title="Work with Allianz"></a>
            <a><img src="https://www.dropbox.com/s/kotgq2u4qr34i2u/audi.jpg?raw=1" alt="Audi" title="Work with Audi"></a>
            <a><img src="https://www.dropbox.com/s/t5dapt3lkz7rdhe/BMW.png?raw=1" alt="BMW" title="Work with BMW"></a>
            <a><img src="https://www.dropbox.com/s/ocqbsbgj590ztyy/ESPN.png?raw=1" alt="ESPN" title="Work with ESPN"></a>
            <a><img src="https://www.dropbox.com/s/2maaqxijcmbaqxg/LG.png?raw=1" alt="LG" title="Work with LG"></a>
            <a><img src="https://www.dropbox.com/s/yn3gj203hrdjfu7/Logo_NIKE.png?raw=1" alt="Nike" title="Work with Nike"></a>
            <a><img src="https://www.dropbox.com/s/gfxa6exv7h1ro6q/Suzuki_logo.png?raw=1" alt="Suzuki" title="Work with Suzuki"></a>
            <a><img src="https://www.dropbox.com/s/b7vwmjf6e0owybv/Visa.svg?raw=1" alt="Visa" title="Work with Visa"></a>
        </div>
    </section>    

    <section id="highlights">
        <h1 class="sec-heading">Company Highlights</h1> 
    
        <div class="slider">
            <div class="col-6 slide-text">
                <div>
                    <h2>Team iTechnology at IBM, Americas 2019, Los Angeles</h2>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.
                    </p>
                    <a href="" class="brand-btn">See More</a>
                </div>
            </div>
            <div class="col-6 slide-img">
                <img src="https://www.dropbox.com/s/vnkswx20c0dg5ta/analyzing.jpg?raw=1" alt="Team Work in Los Angeles" title="Company Team Work"/>
            </div> 
        </div>
    </section>
  
    <section id="partners" class="brand-logos">
        <h1 class="sec-heading">Our Partners</h1> 
        <div>
            <a><img src="https://www.dropbox.com/s/mk5ca04seizpf8l/aws.svg?raw=1" alt="Work with AWS" title="Our Work"></a>
            <a><img src="https://www.dropbox.com/s/r9utt5nj9k9m1t8/Dell.png?raw=1" alt="Dell" title="Work with Dell"></a>
            <a><img src="https://www.dropbox.com/s/umw9g0zgm1ecfvn/Intel.png?raw=1" alt="intel" title="Work with intell"></a>
            <a><img src="https://www.dropbox.com/s/x0hrha2dosey99z/ibm.png?raw=1" alt="IBM" title="Work with IBM"></a>
            <a><img src="https://www.dropbox.com/s/ekzu1wcki6jziay/Microsoft.svg?raw=1" alt="Microsoft" title="Work with Microsoft"></a>
            <a><img src="https://www.dropbox.com/s/lvl5cp14i3v0wgi/Nasscom.png?raw=1" alt="Nasscom" title="Work with Nasscom"></a>
            <a><img src="https://www.dropbox.com/s/h66k9jaaknxaum4/Samsung.png?raw=1" alt="Samsung" title="Work with Samsung"></a>
            <a><img src="https://www.dropbox.com/s/86cbtf78khj0q9z/Nvidia.png?raw=1" alt="Nvidia" title="Work with Nvidia"></a>            </div>
    </section>
    
    <section id="topList" class="brand-logos">
        <h1 class="sec-heading">Recognition as Top Mobile Development Company</h1> 
        <div>
            <a>
                <img src="https://www.dropbox.com/s/19czj59oq0orbfa/tm.png?raw=1" alt="Top 10 MobleApp Development Companies" title="Top 10 MobleApp Development Companies">
                <span>Recognised Among Top 10 MobleApp Development Companies</span>
            </a>
            <a>
                <img src="https://www.dropbox.com/s/130734rofy1f261/tata.png?raw=1" alt="Top 10 MobleApp Development Companies" title="Top 10 MobleApp Development Companies">
                <span>Recognised Among Top 10 MobleApp Development Companies</span>
            </a>
            <a>
                <img src="https://www.dropbox.com/s/k17kwv9hiu9w98d/Infosys_logo.png?raw=1" alt="Top 10 MobleApp Development Companies" title="Top 10 MobleApp Development Companies">
                <span>Recognised Among Top 10 MobleApp Development Companies</span>
            </a>
            <a>
                <img src="https://www.dropbox.com/s/mm4cnforc4pvwac/Wipro_Logo.png?raw=1" alt="Top 10 MobleApp Development Companies" title="Top 10 MobleApp Development Companies">
                <span>Recognised Among Top 10 MobleApp Development Companies</span>
            </a>            
            <a>
                <img src="https://www.dropbox.com/s/n4scpig8b3tfqkq/Amazon_logo.svg?raw=1" alt="Top 10 MobleApp Development Companies" title="Top 10 MobleApp Development Companies">
                <span>Recognised Among Top 10 MobleApp Development Companies</span>
            </a>
        </div>
    </section>
    
    <footer>
       <div>
            <span class="logo">iTechnology</span>
       </div>

       <div class="row">
            <div class="col-3">
                <span class="footer-cat">Solution</span>
                <ul class="footer-cat-links">
                    <li><a href=""><span>Interprise App Development</span></a></li>
                    <li><a href=""><span>Android App Development</span></a></li>
                    <li><a href=""><span>ios App Development</span></a></li>
                </ul>
            </div>
            <div class="col-3">
                <span class="footer-cat">Industries</span>
                <ul class="footer-cat-links">
                    <li><a href=""><span>Healthcare</span></a></li>
                    <li><a href=""><span>Sports</span></a></li>
                    <li><a href=""><span>ECommerce</span></a></li>
                    <li><a href=""><span>Construction</span></a></li>
                    <li><a href=""><span>Club</span></a></li>
                </ul>
            </div>
            <div class="col-3">
                <span class="footer-cat">Quick Links</span>
                <ul class="footer-cat-links">
                    <li><a href=""><span>Reviews</span></a></li>
                    <li><a href=""><span>Terms & Condition</span></a></li>
                    <li><a href=""><span>Disclaimer</span></a></li>
                    <li><a href=""><span>Site Map</span></a></li>
                </ul>
            </div>
            <div class="col-3" id="newsletter">
                <span class="footer-cat">Stay Connected</span>
                <form id="subscribe">
                    <input type="email" id="subscriber-email" placeholder="Enter Email Address"/>
                    <input type="submit" value="Subscribe" id="btn-scribe"/>
                </form>
                
                <div class="social-links social-2">
                    <a href=""><i class="fab fa-facebook-f"></i></a>
                    <a href=""><i class="fab fa-twitter"></i></a>
                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                    <a href=""><i class="fab fa-instagram"></i></a>
                    <a href=""><i class="fab fa-tumblr"></i></a>
                    <a href=""><i class="fab fa-reddit-alien"></i></a>
                </div>

                <div id="address">
                    <span class="footer-cat">Office Location</span>
                    <ul>
                        <li>
                            <i class="far fa-building"></i>
                            <div>Los Angeles<br/>
                            Office 9B, Sky High Tower, New A Ring Road, Los Angeles</div>
                        </li>
                        <li>
                            <i class="fas fa-gopuram"></i>
                            <div>Delhi<br/>
                            Office 150B, Behind Sana Gate Char Bhuja Tower, Station Road, Delhi</div>
                        </li>
                    </ul>
                </div>
                
            </div>
            <div class="social-links social-1 col-6">
                <a href=""><i class="fab fa-facebook-f"></i></a>
                <a href=""><i class="fab fa-twitter"></i></a>
                <a href=""><i class="fab fa-linkedin-in"></i></a>
                <a href=""><i class="fab fa-instagram"></i></a>
                <a href=""><i class="fab fa-tumblr"></i></a>
                <a href=""><i class="fab fa-reddit-alien"></i></a>
            </div>
       </div>
       <div id="copyright">
           &copy; All Rights Reserved 2019-2020
       </div>
       <div id="owner">
           <span>
               Designed by <a href="https://www.codingtuting.com">CodingTuting.Com</a>
           </span>
       </div>
       <a href="#topHeader" id="gotop">Top</a>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="ScriptIT.js"></script>
    
</body>
</html>