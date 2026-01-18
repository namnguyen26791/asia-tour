@extends('frontend.layouts.app')

@section('title','Asia Tours – Tailor-made Travel Experiences')
@section('meta_description','Discover tailor-made Asia tours, private trips and luxury travel experiences.')
@section('css')
<style type="text/css">
        @font-face {
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 200;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/montserrat/v15/JTURjIg1_i6t8kCHKm45_aZA3gTD_u50.woff2) format("woff2");
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F
        }

        @font-face {
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 200;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/montserrat/v15/JTURjIg1_i6t8kCHKm45_aZA3g3D_u50.woff2) format("woff2");
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116
        }

        @font-face {
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 200;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/montserrat/v15/JTURjIg1_i6t8kCHKm45_aZA3gbD_u50.woff2) format("woff2");
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB
        }

        @font-face {
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 200;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/montserrat/v15/JTURjIg1_i6t8kCHKm45_aZA3gfD_u50.woff2) format("woff2");
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF
        }

        @font-face {
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 200;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/montserrat/v15/JTURjIg1_i6t8kCHKm45_aZA3gnD_g.woff2) format("woff2");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
        }

        @font-face {
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/montserrat/v15/JTURjIg1_i6t8kCHKm45_cJD3gTD_u50.woff2) format("woff2");
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F
        }

        @font-face {
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/montserrat/v15/JTURjIg1_i6t8kCHKm45_cJD3g3D_u50.woff2) format("woff2");
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116
        }

        @font-face {
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/montserrat/v15/JTURjIg1_i6t8kCHKm45_cJD3gbD_u50.woff2) format("woff2");
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB
        }

        @font-face {
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/montserrat/v15/JTURjIg1_i6t8kCHKm45_cJD3gfD_u50.woff2) format("woff2");
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF
        }

        @font-face {
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/montserrat/v15/JTURjIg1_i6t8kCHKm45_cJD3gnD_g.woff2) format("woff2");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
        }

        @font-face {
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/montserrat/v15/JTUSjIg1_i6t8kCHKm459WRhyzbi.woff2) format("woff2");
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F
        }

        @font-face {
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/montserrat/v15/JTUSjIg1_i6t8kCHKm459W1hyzbi.woff2) format("woff2");
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116
        }

        @font-face {
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/montserrat/v15/JTUSjIg1_i6t8kCHKm459WZhyzbi.woff2) format("woff2");
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB
        }

        @font-face {
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/montserrat/v15/JTUSjIg1_i6t8kCHKm459Wdhyzbi.woff2) format("woff2");
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF
        }

        @font-face {
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/montserrat/v15/JTUSjIg1_i6t8kCHKm459Wlhyw.woff2) format("woff2");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
        }

        @font-face {
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/montserrat/v15/JTURjIg1_i6t8kCHKm45_ZpC3gTD_u50.woff2) format("woff2");
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F
        }

        @font-face {
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/montserrat/v15/JTURjIg1_i6t8kCHKm45_ZpC3g3D_u50.woff2) format("woff2");
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116
        }

        @font-face {
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/montserrat/v15/JTURjIg1_i6t8kCHKm45_ZpC3gbD_u50.woff2) format("woff2");
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB
        }

        @font-face {
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/montserrat/v15/JTURjIg1_i6t8kCHKm45_ZpC3gfD_u50.woff2) format("woff2");
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF
        }

        @font-face {
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/montserrat/v15/JTURjIg1_i6t8kCHKm45_ZpC3gnD_g.woff2) format("woff2");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
        }

        @font-face {
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/montserrat/v15/JTURjIg1_i6t8kCHKm45_bZF3gTD_u50.woff2) format("woff2");
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F
        }

        @font-face {
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/montserrat/v15/JTURjIg1_i6t8kCHKm45_bZF3g3D_u50.woff2) format("woff2");
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116
        }

        @font-face {
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/montserrat/v15/JTURjIg1_i6t8kCHKm45_bZF3gbD_u50.woff2) format("woff2");
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB
        }

        @font-face {
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/montserrat/v15/JTURjIg1_i6t8kCHKm45_bZF3gfD_u50.woff2) format("woff2");
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF
        }

        @font-face {
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/montserrat/v15/JTURjIg1_i6t8kCHKm45_bZF3gnD_g.woff2) format("woff2");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
        }

        @font-face {
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/montserrat/v15/JTURjIg1_i6t8kCHKm45_dJE3gTD_u50.woff2) format("woff2");
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F
        }

        @font-face {
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/montserrat/v15/JTURjIg1_i6t8kCHKm45_dJE3g3D_u50.woff2) format("woff2");
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116
        }

        @font-face {
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/montserrat/v15/JTURjIg1_i6t8kCHKm45_dJE3gbD_u50.woff2) format("woff2");
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB
        }

        @font-face {
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/montserrat/v15/JTURjIg1_i6t8kCHKm45_dJE3gfD_u50.woff2) format("woff2");
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF
        }

        @font-face {
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/montserrat/v15/JTURjIg1_i6t8kCHKm45_dJE3gnD_g.woff2) format("woff2");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
        }

        @font-face {
            font-family: 'Reenie Beanie';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/reeniebeanie/v11/z7NSdR76eDkaJKZJFkkjuvWxXPq1qw.woff2) format("woff2");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
        }

        @font-face {
            font-family: 'insideTravel';
            src: url(../fonts/insidetravel/insideTravel.eot?s73mmp);
            src: url(../fonts/insidetravel/insideTravel.eot?s73mmp#iefix) format("embedded-opentype"), url(../fonts/insidetravel/insideTravel.ttf?s73mmp) format("truetype"), url(../fonts/insidetravel/insideTravel.woff?s73mmp) format("woff"), url(../fonts/insidetravel/insideTravel.svg?s73mmp#insideTravel) format("svg");
            font-weight: 400;
            font-style: normal;
            font-display: block
        }

        .icon-font {
            font-family: 'insideTravel' !important;
            speak: never;
            font-style: normal;
            font-weight: 400;
            font-variant: normal;
            text-transform: none;
            line-height: 1;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .bullet-train:before {
            content: "\e980"
        }

        .bus:before {
            content: "\e981"
        }

        .rickshaw:before {
            content: "\e982"
        }

        .tram:before {
            content: "\e983"
        }

        .owt-bold:before {
            content: "\e97e"
        }

        .owt-light:before {
            content: "\e97f"
        }

        .moon1:before {
            content: "\e97d"
        }

        .skiing:before {
            content: "\e97c"
        }

        .icon-balloon:before {
            content: "\e904"
        }

        .facebook-messenger:before {
            content: "\e97a"
        }

        .happy-01:before {
            content: "\e979";
            color: #37c1d3
        }

        .icon-map-mekong:before {
            content: "\e978";
            color: #962d1f
        }

        .asiatours-black:before {
            content: "\e977"
        }

        .date-01:before {
            content: "\e976"
        }

        .icon-loading:before {
            content: "\e975"
        }

        .icon-personal-01:before {
            content: "\e971"
        }

        .icon-trip-01:before {
            content: "\e974"
        }

        .icon-password:before {
            content: "\e973"
        }

        .icon-invoice:before {
            content: "\e96f"
        }

        .icon-logout:before {
            content: "\e970"
        }

        .icon-departure-01:before {
            content: "\e96e"
        }

        .icon-menu-1:before {
            content: "\e96a"
        }

        .icon-menu-2:before {
            content: "\e96b"
        }

        .icon-menu-3:before {
            content: "\e96c"
        }

        .icon-menu-4:before {
            content: "\e96d"
        }

        .icon-next-back:before {
            content: "\e969";
            color: #d3d4d4
        }

        .icon-build:before {
            content: "\e966"
        }

        .icon-call:before {
            content: "\e967"
        }

        .icon-mail:before {
            content: "\e968"
        }

        .icon-time:before {
            content: "\e965"
        }

        .icon-des-1:before {
            content: "\e961";
            color: #d0b316
        }

        .icon-des-2:before {
            content: "\e962";
            color: #d0b316
        }

        .icon-des-3:before {
            content: "\e963";
            color: #d0b316
        }

        .icon-des-4:before {
            content: "\e964";
            color: #d0b316
        }

        .icon-info:before {
            content: "\e960"
        }

        .icon-faq:before {
            content: "\e95f"
        }

        .icon-destination:before {
            content: "\e95e";
            color: #d0b42b
        }

        .ex-boutiquehotels:before {
            content: "\e958"
        }

        .ex-couple-honeymoon:before {
            content: "\e959"
        }

        .ex-family-holiday:before {
            content: "\e95a"
        }

        .ex-luxury-hotels-resorts:before {
            content: "\e95b"
        }

        .ex-stardard-hotels:before {
            content: "\e95c"
        }

        .ex-wellness-relaxation:before {
            content: "\e95d"
        }

        .boutique-hotels:before {
            content: "\e952"
        }

        .couple-honeymoon:before {
            content: "\e953"
        }

        .family-holiday:before {
            content: "\e954"
        }

        .luxury-hotels-resorts:before {
            content: "\e955"
        }

        .stardard-hotels:before {
            content: "\e956"
        }

        .wellness-relaxation:before {
            content: "\e957"
        }

        .speed-boat:before {
            content: "\e933"
        }

        .icon-user-2:before {
            content: "\e932";
            color: #ccc
        }

        .icon-itine:before {
            content: "\e930"
        }

        .icon-ethnic:before {
            content: "\e94f";
            color: #545454
        }

        .icon-cruising:before {
            content: "\e950";
            color: #545454
        }

        .icon-adventure:before {
            content: "\e951";
            color: #545454
        }

        .icon-boating:before {
            content: "\e931"
        }

        .icon-festival:before {
            content: "\e936"
        }

        .icon-history:before {
            content: "\e937"
        }

        .icon-couple:before {
            content: "\e92d"
        }

        .icon-family:before {
            content: "\e92e"
        }

        .moon:before {
            content: "\e92f"
        }

        .icon-overview:before {
            content: "\e92b";
            color: #d0b42c
        }

        .icon-highlight:before {
            content: "\e92c";
            color: #d0b42c
        }

        .price-tag:before {
            content: "\e926"
        }

        .play-video:before {
            content: "\e916"
        }

        .bamboo-rafting:before {
            content: "\e934";
            color: #606161
        }

        .bikking:before {
            content: "\e935";
            color: #606161
        }

        .cable-car:before {
            content: "\e938";
            color: #606161
        }

        .canoe:before {
            content: "\e939";
            color: #606161
        }

        .cidomo:before {
            content: "\e93a"
        }

        .cyclo:before {
            content: "\e93b";
            color: #606161
        }

        .electric-car:before {
            content: "\e93c";
            color: #606161
        }

        .elephant:before {
            content: "\e93d";
            color: #606161
        }

        .ferry:before {
            content: "\e93e";
            color: #606161
        }

        .hill-truck:before {
            content: "\e93f";
            color: #606161
        }

        .horse:before {
            content: "\e940";
            color: #606161
        }

        .horse-cart:before {
            content: "\e941";
            color: #606161
        }

        .jeep:before {
            content: "\e943";
            color: #606161
        }

        .motorbike:before {
            content: "\e944";
            color: #606161
        }

        .oxcart:before {
            content: "\e945";
            color: #606161
        }

        .pedicab:before {
            content: "\e946"
        }

        .rafting:before {
            content: "\e947";
            color: #606161
        }

        .sidecar:before {
            content: "\e948";
            color: #606161
        }

        .swimming:before {
            content: "\e949";
            color: #606161
        }

        .train:before {
            content: "\e94a";
            color: #606161
        }

        .trekking:before {
            content: "\e94b";
            color: #606161
        }

        .trishaw:before {
            content: "\e94c";
            color: #606161
        }

        .tuk-tuk:before {
            content: "\e94d";
            color: #606161
        }

        .walking:before {
            content: "\e94e";
            color: #606161
        }

        .heart-empty:before {
            content: "\e914"
        }

        .heart-full:before {
            content: "\e915"
        }

        .zalo:before {
            content: "\e97b"
        }

        .menu:before {
            content: "\e91d"
        }

        .contract:before {
            content: "\e919"
        }

        .db-bed:before {
            content: "\e91a"
        }

        .discount:before {
            content: "\e91b"
        }

        .map-itine:before {
            content: "\e91c"
        }

        .testimonial:before {
            content: "\e925"
        }

        .checklist:before {
            content: "\e918"
        }

        .bed:before {
            content: "\e928"
        }

        .exchange:before {
            content: "\e929"
        }

        .university:before {
            content: "\e92a"
        }

        .external-link:before {
            content: "\e927"
        }

        .hiking:before {
            content: "\e921"
        }

        .mountain:before {
            content: "\e922"
        }

        .zoo:before {
            content: "\e923"
        }

        .umbrella-beach-solid:before {
            content: "\e924"
        }

        .calendar-regular:before {
            content: "\e917"
        }

        .facebook-square-brands:before {
            content: "\e900"
        }

        .instagram-brands:before {
            content: "\e901"
        }

        .twitter-brands:before {
            content: "\e902"
        }

        .icon-15:before {
            content: "\e903";
            color: #545454
        }

        .icon-beach:before {
            content: "\e905";
            color: #545454
        }

        .icon-biking:before {
            content: "\e906";
            color: #545454
        }

        .icon-cruises:before {
            content: "\e907";
            color: #545454
        }

        .icon-cuisine:before {
            content: "\e908";
            color: #545454
        }

        .icon-cultural:before {
            content: "\e909";
            color: #545454
        }

        .icon-heritage:before {
            content: "\e90a";
            color: #545454
        }

        .icon-kayaking:before {
            content: "\e90b";
            color: #545454
        }

        .icon-mountain:before {
            content: "\e90c";
            color: #545454
        }

        .icon-nature:before {
            content: "\e90d";
            color: #545454
        }

        .icon-swimming:before {
            content: "\e90e";
            color: #545454
        }

        .icon-trekking:before {
            content: "\e90f";
            color: #545454
        }

        .icon-wellness:before {
            content: "\e910";
            color: #545454
        }

        .icon-wildlife:before {
            content: "\e911";
            color: #545454
        }

        .select-arrow-thin:before {
            content: "\e912"
        }

        .user-regular:before {
            content: "\e913"
        }

        .envelope:before {
            content: "\f003"
        }

        .star:before {
            content: "\f005"
        }

        .clock-o:before {
            content: "\f017"
        }

        .bookmark:before {
            content: "\f02e"
        }

        .map-marker:before {
            content: "\f041"
        }

        .icon-pencil:before {
            content: "\f044"
        }

        .check-square-o:before {
            content: "\f046"
        }

        .gift:before {
            content: "\f06b"
        }

        .icon-plane:before {
            content: "\f072"
        }

        .calendar:before {
            content: "\f073"
        }

        .retweet:before {
            content: "\f079"
        }

        .key:before {
            content: "\f084"
        }

        .star-half:before {
            content: "\f123"
        }

        .thumbs-up:before {
            content: "\f164"
        }

        .icon-car:before {
            content: "\f1b9"
        }

        .ship:before {
            content: "\f21a"
        }

        .image:before {
            content: "\e91e"
        }

        .images:before {
            content: "\e91f"
        }

        .camera:before {
            content: "\e920"
        }

        .phone:before {
            content: "\e942"
        }

        .icon-users:before {
            content: "\e972"
        }

        .search:before {
            content: "\e986"
        }

        .enlarge:before {
            content: "\e989"
        }

        .spoon-knife:before {
            content: "\e9a3"
        }

        .eye:before {
            content: "\e9ce"
        }

        .plus:before {
            content: "\ea0a"
        }

        .minus:before {
            content: "\ea0b"
        }

        .checkmark:before {
            content: "\ea10"
        }

        .slick-slider {
            position: relative;
            display: block;
            box-sizing: border-box;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            -webkit-touch-callout: none;
            -khtml-user-select: none;
            -ms-touch-action: pan-y;
            touch-action: pan-y;
            -webkit-tap-highlight-color: transparent
        }

        .slick-list {
            position: relative;
            display: block;
            overflow: hidden;
            margin: 0;
            padding: 0
        }

        .slick-list:focus {
            outline: none
        }

        .slick-list.dragging {
            cursor: pointer;
            cursor: hand
        }

        .slick-slider .slick-track,
        .slick-slider .slick-list {
            -webkit-transform: translate3d(0, 0, 0);
            -moz-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }

        .slick-track {
            position: relative;
            top: 0;
            left: 0;
            display: block;
            margin-left: auto;
            margin-right: auto
        }

        .slick-track:before,
        .slick-track:after {
            display: table;
            content: ''
        }

        .slick-track:after {
            clear: both
        }

        .slick-loading .slick-track {
            visibility: hidden
        }

        .slick-slide {
            display: none;
            float: left;
            height: 100%;
            min-height: 1px
        }

        [dir='rtl'] .slick-slide {
            float: right
        }

        .slick-slide img {
            display: block
        }

        .slick-slide.slick-loading img {
            display: none
        }

        .slick-slide.dragging img {
            pointer-events: none
        }

        .slick-initialized .slick-slide {
            display: block
        }

        .slick-loading .slick-slide {
            visibility: hidden
        }

        .slick-vertical .slick-slide {
            display: block;
            height: auto;
            border: 1px solid transparent
        }

        .slick-arrow.slick-hidden {
            display: none
        }

        .iti {
            position: relative;
            display: inline-block
        }

        .iti * {
            box-sizing: border-box;
            -moz-box-sizing: border-box
        }

        .iti__hide {
            display: none
        }

        .iti__v-hide {
            visibility: hidden
        }

        .iti input,
        .iti input[type=text],
        .iti input[type=tel] {
            position: relative;
            z-index: 0;
            margin-top: 0 !important;
            margin-bottom: 0 !important;
            padding-right: 36px;
            margin-right: 0
        }

        .iti__flag-container {
            position: absolute;
            top: 0;
            bottom: 0;
            right: 0;
            padding: 1px
        }

        .iti__selected-flag {
            z-index: 1;
            position: relative;
            display: flex;
            align-items: center;
            height: 100%;
            padding: 0 6px 0 8px
        }

        .iti__arrow {
            margin-left: 6px;
            width: 0;
            height: 0;
            border-left: 3px solid transparent;
            border-right: 3px solid transparent;
            border-top: 4px solid #555
        }

        .iti__arrow--up {
            border-top: none;
            border-bottom: 4px solid #555
        }

        .iti__country-list {
            position: absolute;
            z-index: 2;
            list-style: none;
            text-align: left;
            padding: 0;
            margin: 0 0 0 -1px;
            box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.2);
            background-color: #fff;
            border: 1px solid #CCC;
            white-space: nowrap;
            max-height: 200px;
            overflow-y: scroll;
            -webkit-overflow-scrolling: touch
        }

        .iti__country-list--dropup {
            bottom: 100%;
            margin-bottom: -1px
        }

        @media (max-width: 500px) {
            .iti__country-list {
                white-space: normal
            }
        }

        .iti__flag-box {
            display: inline-block;
            width: 20px
        }

        .iti__divider {
            padding-bottom: 5px;
            margin-bottom: 5px;
            border-bottom: 1px solid #CCC
        }

        .iti__country {
            padding: 5px 10px;
            outline: none
        }

        .iti__dial-code {
            color: #999
        }

        .iti__country.iti__highlight {
            background-color: rgba(0, 0, 0, 0.05)
        }

        .iti__flag-box,
        .iti__country-name,
        .iti__dial-code {
            vertical-align: middle
        }

        .iti__flag-box,
        .iti__country-name {
            margin-right: 6px
        }

        .iti--allow-dropdown input,
        .iti--allow-dropdown input[type=text],
        .iti--allow-dropdown input[type=tel],
        .iti--separate-dial-code input,
        .iti--separate-dial-code input[type=text],
        .iti--separate-dial-code input[type=tel] {
            padding-right: 6px;
            padding-left: 52px;
            margin-left: 0
        }

        .iti--allow-dropdown .iti__flag-container,
        .iti--separate-dial-code .iti__flag-container {
            right: auto;
            left: 0
        }

        .iti--allow-dropdown .iti__flag-container:hover {
            cursor: pointer
        }

        .iti--allow-dropdown .iti__flag-container:hover .iti__selected-flag {
            background-color: rgba(0, 0, 0, 0.05)
        }

        .iti--allow-dropdown input[disabled]+.iti__flag-container:hover,
        .iti--allow-dropdown input[readonly]+.iti__flag-container:hover {
            cursor: default
        }

        .iti--allow-dropdown input[disabled]+.iti__flag-container:hover .iti__selected-flag,
        .iti--allow-dropdown input[readonly]+.iti__flag-container:hover .iti__selected-flag {
            background-color: transparent
        }

        .iti--separate-dial-code .iti__selected-flag {
            background-color: rgba(0, 0, 0, 0.05)
        }

        .iti--separate-dial-code .iti__selected-dial-code {
            margin-left: 6px
        }

        .iti--container {
            position: absolute;
            top: -1000px;
            left: -1000px;
            z-index: 1060;
            padding: 1px
        }

        .iti--container:hover {
            cursor: pointer
        }

        .iti-mobile .iti--container {
            top: 30px;
            bottom: 30px;
            left: 30px;
            right: 30px;
            position: fixed
        }

        .iti-mobile .iti__country-list {
            max-height: 100%;
            width: 100%
        }

        .iti-mobile .iti__country {
            padding: 10px;
            line-height: 1.5em
        }

        .iti__flag {
            width: 20px
        }

        .iti__flag.iti__be {
            width: 18px
        }

        .iti__flag.iti__ch {
            width: 15px
        }

        .iti__flag.iti__mc {
            width: 19px
        }

        .iti__flag.iti__ne {
            width: 18px
        }

        .iti__flag.iti__np {
            width: 13px
        }

        .iti__flag.iti__va {
            width: 15px
        }

        @media (-webkit-min-device-pixel-ratio: 2),
        (min-resolution: 192dpi) {
            .iti__flag {
                background-size: 5652px 15px
            }
        }

        .iti__flag.iti__ac {
            height: 10px;
            background-position: 0 0
        }

        .iti__flag.iti__ad {
            height: 14px;
            background-position: -22px 0
        }

        .iti__flag.iti__ae {
            height: 10px;
            background-position: -44px 0
        }

        .iti__flag.iti__af {
            height: 14px;
            background-position: -66px 0
        }

        .iti__flag.iti__ag {
            height: 14px;
            background-position: -88px 0
        }

        .iti__flag.iti__ai {
            height: 10px;
            background-position: -110px 0
        }

        .iti__flag.iti__al {
            height: 15px;
            background-position: -132px 0
        }

        .iti__flag.iti__am {
            height: 10px;
            background-position: -154px 0
        }

        .iti__flag.iti__ao {
            height: 14px;
            background-position: -176px 0
        }

        .iti__flag.iti__aq {
            height: 14px;
            background-position: -198px 0
        }

        .iti__flag.iti__ar {
            height: 13px;
            background-position: -220px 0
        }

        .iti__flag.iti__as {
            height: 10px;
            background-position: -242px 0
        }

        .iti__flag.iti__at {
            height: 14px;
            background-position: -264px 0
        }

        .iti__flag.iti__au {
            height: 10px;
            background-position: -286px 0
        }

        .iti__flag.iti__aw {
            height: 14px;
            background-position: -308px 0
        }

        .iti__flag.iti__ax {
            height: 13px;
            background-position: -330px 0
        }

        .iti__flag.iti__az {
            height: 10px;
            background-position: -352px 0
        }

        .iti__flag.iti__ba {
            height: 10px;
            background-position: -374px 0
        }

        .iti__flag.iti__bb {
            height: 14px;
            background-position: -396px 0
        }

        .iti__flag.iti__bd {
            height: 12px;
            background-position: -418px 0
        }

        .iti__flag.iti__be {
            height: 15px;
            background-position: -440px 0
        }

        .iti__flag.iti__bf {
            height: 14px;
            background-position: -460px 0
        }

        .iti__flag.iti__bg {
            height: 12px;
            background-position: -482px 0
        }

        .iti__flag.iti__bh {
            height: 12px;
            background-position: -504px 0
        }

        .iti__flag.iti__bi {
            height: 12px;
            background-position: -526px 0
        }

        .iti__flag.iti__bj {
            height: 14px;
            background-position: -548px 0
        }

        .iti__flag.iti__bl {
            height: 14px;
            background-position: -570px 0
        }

        .iti__flag.iti__bm {
            height: 10px;
            background-position: -592px 0
        }

        .iti__flag.iti__bn {
            height: 10px;
            background-position: -614px 0
        }

        .iti__flag.iti__bo {
            height: 14px;
            background-position: -636px 0
        }

        .iti__flag.iti__bq {
            height: 14px;
            background-position: -658px 0
        }

        .iti__flag.iti__br {
            height: 14px;
            background-position: -680px 0
        }

        .iti__flag.iti__bs {
            height: 10px;
            background-position: -702px 0
        }

        .iti__flag.iti__bt {
            height: 14px;
            background-position: -724px 0
        }

        .iti__flag.iti__bv {
            height: 15px;
            background-position: -746px 0
        }

        .iti__flag.iti__bw {
            height: 14px;
            background-position: -768px 0
        }

        .iti__flag.iti__by {
            height: 10px;
            background-position: -790px 0
        }

        .iti__flag.iti__bz {
            height: 14px;
            background-position: -812px 0
        }

        .iti__flag.iti__ca {
            height: 10px;
            background-position: -834px 0
        }

        .iti__flag.iti__cc {
            height: 10px;
            background-position: -856px 0
        }

        .iti__flag.iti__cd {
            height: 15px;
            background-position: -878px 0
        }

        .iti__flag.iti__cf {
            height: 14px;
            background-position: -900px 0
        }

        .iti__flag.iti__cg {
            height: 14px;
            background-position: -922px 0
        }

        .iti__flag.iti__ch {
            height: 15px;
            background-position: -944px 0
        }

        .iti__flag.iti__ci {
            height: 14px;
            background-position: -961px 0
        }

        .iti__flag.iti__ck {
            height: 10px;
            background-position: -983px 0
        }

        .iti__flag.iti__cl {
            height: 14px;
            background-position: -1005px 0
        }

        .iti__flag.iti__cm {
            height: 14px;
            background-position: -1027px 0
        }

        .iti__flag.iti__cn {
            height: 14px;
            background-position: -1049px 0
        }

        .iti__flag.iti__co {
            height: 14px;
            background-position: -1071px 0
        }

        .iti__flag.iti__cp {
            height: 14px;
            background-position: -1093px 0
        }

        .iti__flag.iti__cr {
            height: 12px;
            background-position: -1115px 0
        }

        .iti__flag.iti__cu {
            height: 10px;
            background-position: -1137px 0
        }

        .iti__flag.iti__cv {
            height: 12px;
            background-position: -1159px 0
        }

        .iti__flag.iti__cw {
            height: 14px;
            background-position: -1181px 0
        }

        .iti__flag.iti__cx {
            height: 10px;
            background-position: -1203px 0
        }

        .iti__flag.iti__cy {
            height: 14px;
            background-position: -1225px 0
        }

        .iti__flag.iti__cz {
            height: 14px;
            background-position: -1247px 0
        }

        .iti__flag.iti__de {
            height: 12px;
            background-position: -1269px 0
        }

        .iti__flag.iti__dg {
            height: 10px;
            background-position: -1291px 0
        }

        .iti__flag.iti__dj {
            height: 14px;
            background-position: -1313px 0
        }

        .iti__flag.iti__dk {
            height: 15px;
            background-position: -1335px 0
        }

        .iti__flag.iti__dm {
            height: 10px;
            background-position: -1357px 0
        }

        .iti__flag.iti__do {
            height: 14px;
            background-position: -1379px 0
        }

        .iti__flag.iti__dz {
            height: 14px;
            background-position: -1401px 0
        }

        .iti__flag.iti__ea {
            height: 14px;
            background-position: -1423px 0
        }

        .iti__flag.iti__ec {
            height: 14px;
            background-position: -1445px 0
        }

        .iti__flag.iti__ee {
            height: 13px;
            background-position: -1467px 0
        }

        .iti__flag.iti__eg {
            height: 14px;
            background-position: -1489px 0
        }

        .iti__flag.iti__eh {
            height: 10px;
            background-position: -1511px 0
        }

        .iti__flag.iti__er {
            height: 10px;
            background-position: -1533px 0
        }

        .iti__flag.iti__es {
            height: 14px;
            background-position: -1555px 0
        }

        .iti__flag.iti__et {
            height: 10px;
            background-position: -1577px 0
        }

        .iti__flag.iti__eu {
            height: 14px;
            background-position: -1599px 0
        }

        .iti__flag.iti__fi {
            height: 12px;
            background-position: -1621px 0
        }

        .iti__flag.iti__fj {
            height: 10px;
            background-position: -1643px 0
        }

        .iti__flag.iti__fk {
            height: 10px;
            background-position: -1665px 0
        }

        .iti__flag.iti__fm {
            height: 11px;
            background-position: -1687px 0
        }

        .iti__flag.iti__fo {
            height: 15px;
            background-position: -1709px 0
        }

        .iti__flag.iti__fr {
            height: 14px;
            background-position: -1731px 0
        }

        .iti__flag.iti__ga {
            height: 15px;
            background-position: -1753px 0
        }

        .iti__flag.iti__gb {
            height: 10px;
            background-position: -1775px 0
        }

        .iti__flag.iti__gd {
            height: 12px;
            background-position: -1797px 0
        }

        .iti__flag.iti__ge {
            height: 14px;
            background-position: -1819px 0
        }

        .iti__flag.iti__gf {
            height: 14px;
            background-position: -1841px 0
        }

        .iti__flag.iti__gg {
            height: 14px;
            background-position: -1863px 0
        }

        .iti__flag.iti__gh {
            height: 14px;
            background-position: -1885px 0
        }

        .iti__flag.iti__gi {
            height: 10px;
            background-position: -1907px 0
        }

        .iti__flag.iti__gl {
            height: 14px;
            background-position: -1929px 0
        }

        .iti__flag.iti__gm {
            height: 14px;
            background-position: -1951px 0
        }

        .iti__flag.iti__gn {
            height: 14px;
            background-position: -1973px 0
        }

        .iti__flag.iti__gp {
            height: 14px;
            background-position: -1995px 0
        }

        .iti__flag.iti__gq {
            height: 14px;
            background-position: -2017px 0
        }

        .iti__flag.iti__gr {
            height: 14px;
            background-position: -2039px 0
        }

        .iti__flag.iti__gs {
            height: 10px;
            background-position: -2061px 0
        }

        .iti__flag.iti__gt {
            height: 13px;
            background-position: -2083px 0
        }

        .iti__flag.iti__gu {
            height: 11px;
            background-position: -2105px 0
        }

        .iti__flag.iti__gw {
            height: 10px;
            background-position: -2127px 0
        }

        .iti__flag.iti__gy {
            height: 12px;
            background-position: -2149px 0
        }

        .iti__flag.iti__hk {
            height: 14px;
            background-position: -2171px 0
        }

        .iti__flag.iti__hm {
            height: 10px;
            background-position: -2193px 0
        }

        .iti__flag.iti__hn {
            height: 10px;
            background-position: -2215px 0
        }

        .iti__flag.iti__hr {
            height: 10px;
            background-position: -2237px 0
        }

        .iti__flag.iti__ht {
            height: 12px;
            background-position: -2259px 0
        }

        .iti__flag.iti__hu {
            height: 10px;
            background-position: -2281px 0
        }

        .iti__flag.iti__ic {
            height: 14px;
            background-position: -2303px 0
        }

        .iti__flag.iti__id {
            height: 14px;
            background-position: -2325px 0
        }

        .iti__flag.iti__ie {
            height: 10px;
            background-position: -2347px 0
        }

        .iti__flag.iti__il {
            height: 15px;
            background-position: -2369px 0
        }

        .iti__flag.iti__im {
            height: 10px;
            background-position: -2391px 0
        }

        .iti__flag.iti__in {
            height: 14px;
            background-position: -2413px 0
        }

        .iti__flag.iti__io {
            height: 10px;
            background-position: -2435px 0
        }

        .iti__flag.iti__iq {
            height: 14px;
            background-position: -2457px 0
        }

        .iti__flag.iti__ir {
            height: 12px;
            background-position: -2479px 0
        }

        .iti__flag.iti__is {
            height: 15px;
            background-position: -2501px 0
        }

        .iti__flag.iti__it {
            height: 14px;
            background-position: -2523px 0
        }

        .iti__flag.iti__je {
            height: 12px;
            background-position: -2545px 0
        }

        .iti__flag.iti__jm {
            height: 10px;
            background-position: -2567px 0
        }

        .iti__flag.iti__jo {
            height: 10px;
            background-position: -2589px 0
        }

        .iti__flag.iti__jp {
            height: 14px;
            background-position: -2611px 0
        }

        .iti__flag.iti__ke {
            height: 14px;
            background-position: -2633px 0
        }

        .iti__flag.iti__kg {
            height: 12px;
            background-position: -2655px 0
        }

        .iti__flag.iti__kh {
            height: 13px;
            background-position: -2677px 0
        }

        .iti__flag.iti__ki {
            height: 10px;
            background-position: -2699px 0
        }

        .iti__flag.iti__km {
            height: 12px;
            background-position: -2721px 0
        }

        .iti__flag.iti__kn {
            height: 14px;
            background-position: -2743px 0
        }

        .iti__flag.iti__kp {
            height: 10px;
            background-position: -2765px 0
        }

        .iti__flag.iti__kr {
            height: 14px;
            background-position: -2787px 0
        }

        .iti__flag.iti__kw {
            height: 10px;
            background-position: -2809px 0
        }

        .iti__flag.iti__ky {
            height: 10px;
            background-position: -2831px 0
        }

        .iti__flag.iti__kz {
            height: 10px;
            background-position: -2853px 0
        }

        .iti__flag.iti__la {
            height: 14px;
            background-position: -2875px 0
        }

        .iti__flag.iti__lb {
            height: 14px;
            background-position: -2897px 0
        }

        .iti__flag.iti__lc {
            height: 10px;
            background-position: -2919px 0
        }

        .iti__flag.iti__li {
            height: 12px;
            background-position: -2941px 0
        }

        .iti__flag.iti__lk {
            height: 10px;
            background-position: -2963px 0
        }

        .iti__flag.iti__lr {
            height: 11px;
            background-position: -2985px 0
        }

        .iti__flag.iti__ls {
            height: 14px;
            background-position: -3007px 0
        }

        .iti__flag.iti__lt {
            height: 12px;
            background-position: -3029px 0
        }

        .iti__flag.iti__lu {
            height: 12px;
            background-position: -3051px 0
        }

        .iti__flag.iti__lv {
            height: 10px;
            background-position: -3073px 0
        }

        .iti__flag.iti__ly {
            height: 10px;
            background-position: -3095px 0
        }

        .iti__flag.iti__ma {
            height: 14px;
            background-position: -3117px 0
        }

        .iti__flag.iti__mc {
            height: 15px;
            background-position: -3139px 0
        }

        .iti__flag.iti__md {
            height: 10px;
            background-position: -3160px 0
        }

        .iti__flag.iti__me {
            height: 10px;
            background-position: -3182px 0
        }

        .iti__flag.iti__mf {
            height: 14px;
            background-position: -3204px 0
        }

        .iti__flag.iti__mg {
            height: 14px;
            background-position: -3226px 0
        }

        .iti__flag.iti__mh {
            height: 11px;
            background-position: -3248px 0
        }

        .iti__flag.iti__mk {
            height: 10px;
            background-position: -3270px 0
        }

        .iti__flag.iti__ml {
            height: 14px;
            background-position: -3292px 0
        }

        .iti__flag.iti__mm {
            height: 14px;
            background-position: -3314px 0
        }

        .iti__flag.iti__mn {
            height: 10px;
            background-position: -3336px 0
        }

        .iti__flag.iti__mo {
            height: 14px;
            background-position: -3358px 0
        }

        .iti__flag.iti__mp {
            height: 10px;
            background-position: -3380px 0
        }

        .iti__flag.iti__mq {
            height: 14px;
            background-position: -3402px 0
        }

        .iti__flag.iti__mr {
            height: 14px;
            background-position: -3424px 0
        }

        .iti__flag.iti__ms {
            height: 10px;
            background-position: -3446px 0
        }

        .iti__flag.iti__mt {
            height: 14px;
            background-position: -3468px 0
        }

        .iti__flag.iti__mu {
            height: 14px;
            background-position: -3490px 0
        }

        .iti__flag.iti__mv {
            height: 14px;
            background-position: -3512px 0
        }

        .iti__flag.iti__mw {
            height: 14px;
            background-position: -3534px 0
        }

        .iti__flag.iti__mx {
            height: 12px;
            background-position: -3556px 0
        }

        .iti__flag.iti__my {
            height: 10px;
            background-position: -3578px 0
        }

        .iti__flag.iti__mz {
            height: 14px;
            background-position: -3600px 0
        }

        .iti__flag.iti__na {
            height: 14px;
            background-position: -3622px 0
        }

        .iti__flag.iti__nc {
            height: 10px;
            background-position: -3644px 0
        }

        .iti__flag.iti__ne {
            height: 15px;
            background-position: -3666px 0
        }

        .iti__flag.iti__nf {
            height: 10px;
            background-position: -3686px 0
        }

        .iti__flag.iti__ng {
            height: 10px;
            background-position: -3708px 0
        }

        .iti__flag.iti__ni {
            height: 12px;
            background-position: -3730px 0
        }

        .iti__flag.iti__nl {
            height: 14px;
            background-position: -3752px 0
        }

        .iti__flag.iti__no {
            height: 15px;
            background-position: -3774px 0
        }

        .iti__flag.iti__np {
            height: 15px;
            background-position: -3796px 0
        }

        .iti__flag.iti__nr {
            height: 10px;
            background-position: -3811px 0
        }

        .iti__flag.iti__nu {
            height: 10px;
            background-position: -3833px 0
        }

        .iti__flag.iti__nz {
            height: 10px;
            background-position: -3855px 0
        }

        .iti__flag.iti__om {
            height: 10px;
            background-position: -3877px 0
        }

        .iti__flag.iti__pa {
            height: 14px;
            background-position: -3899px 0
        }

        .iti__flag.iti__pe {
            height: 14px;
            background-position: -3921px 0
        }

        .iti__flag.iti__pf {
            height: 14px;
            background-position: -3943px 0
        }

        .iti__flag.iti__pg {
            height: 15px;
            background-position: -3965px 0
        }

        .iti__flag.iti__ph {
            height: 10px;
            background-position: -3987px 0
        }

        .iti__flag.iti__pk {
            height: 14px;
            background-position: -4009px 0
        }

        .iti__flag.iti__pl {
            height: 13px;
            background-position: -4031px 0
        }

        .iti__flag.iti__pm {
            height: 14px;
            background-position: -4053px 0
        }

        .iti__flag.iti__pn {
            height: 10px;
            background-position: -4075px 0
        }

        .iti__flag.iti__pr {
            height: 14px;
            background-position: -4097px 0
        }

        .iti__flag.iti__ps {
            height: 10px;
            background-position: -4119px 0
        }

        .iti__flag.iti__pt {
            height: 14px;
            background-position: -4141px 0
        }

        .iti__flag.iti__pw {
            height: 13px;
            background-position: -4163px 0
        }

        .iti__flag.iti__py {
            height: 11px;
            background-position: -4185px 0
        }

        .iti__flag.iti__qa {
            height: 8px;
            background-position: -4207px 0
        }

        .iti__flag.iti__re {
            height: 14px;
            background-position: -4229px 0
        }

        .iti__flag.iti__ro {
            height: 14px;
            background-position: -4251px 0
        }

        .iti__flag.iti__rs {
            height: 14px;
            background-position: -4273px 0
        }

        .iti__flag.iti__ru {
            height: 14px;
            background-position: -4295px 0
        }

        .iti__flag.iti__rw {
            height: 14px;
            background-position: -4317px 0
        }

        .iti__flag.iti__sa {
            height: 14px;
            background-position: -4339px 0
        }

        .iti__flag.iti__sb {
            height: 10px;
            background-position: -4361px 0
        }

        .iti__flag.iti__sc {
            height: 10px;
            background-position: -4383px 0
        }

        .iti__flag.iti__sd {
            height: 10px;
            background-position: -4405px 0
        }

        .iti__flag.iti__se {
            height: 13px;
            background-position: -4427px 0
        }

        .iti__flag.iti__sg {
            height: 14px;
            background-position: -4449px 0
        }

        .iti__flag.iti__sh {
            height: 10px;
            background-position: -4471px 0
        }

        .iti__flag.iti__si {
            height: 10px;
            background-position: -4493px 0
        }

        .iti__flag.iti__sj {
            height: 15px;
            background-position: -4515px 0
        }

        .iti__flag.iti__sk {
            height: 14px;
            background-position: -4537px 0
        }

        .iti__flag.iti__sl {
            height: 14px;
            background-position: -4559px 0
        }

        .iti__flag.iti__sm {
            height: 15px;
            background-position: -4581px 0
        }

        .iti__flag.iti__sn {
            height: 14px;
            background-position: -4603px 0
        }

        .iti__flag.iti__so {
            height: 14px;
            background-position: -4625px 0
        }

        .iti__flag.iti__sr {
            height: 14px;
            background-position: -4647px 0
        }

        .iti__flag.iti__ss {
            height: 10px;
            background-position: -4669px 0
        }

        .iti__flag.iti__st {
            height: 10px;
            background-position: -4691px 0
        }

        .iti__flag.iti__sv {
            height: 12px;
            background-position: -4713px 0
        }

        .iti__flag.iti__sx {
            height: 14px;
            background-position: -4735px 0
        }

        .iti__flag.iti__sy {
            height: 14px;
            background-position: -4757px 0
        }

        .iti__flag.iti__sz {
            height: 14px;
            background-position: -4779px 0
        }

        .iti__flag.iti__ta {
            height: 10px;
            background-position: -4801px 0
        }

        .iti__flag.iti__tc {
            height: 10px;
            background-position: -4823px 0
        }

        .iti__flag.iti__td {
            height: 14px;
            background-position: -4845px 0
        }

        .iti__flag.iti__tf {
            height: 14px;
            background-position: -4867px 0
        }

        .iti__flag.iti__tg {
            height: 13px;
            background-position: -4889px 0
        }

        .iti__flag.iti__th {
            height: 14px;
            background-position: -4911px 0
        }

        .iti__flag.iti__tj {
            height: 10px;
            background-position: -4933px 0
        }

        .iti__flag.iti__tk {
            height: 10px;
            background-position: -4955px 0
        }

        .iti__flag.iti__tl {
            height: 10px;
            background-position: -4977px 0
        }

        .iti__flag.iti__tm {
            height: 14px;
            background-position: -4999px 0
        }

        .iti__flag.iti__tn {
            height: 14px;
            background-position: -5021px 0
        }

        .iti__flag.iti__to {
            height: 10px;
            background-position: -5043px 0
        }

        .iti__flag.iti__tr {
            height: 14px;
            background-position: -5065px 0
        }

        .iti__flag.iti__tt {
            height: 12px;
            background-position: -5087px 0
        }

        .iti__flag.iti__tv {
            height: 10px;
            background-position: -5109px 0
        }

        .iti__flag.iti__tw {
            height: 14px;
            background-position: -5131px 0
        }

        .iti__flag.iti__tz {
            height: 14px;
            background-position: -5153px 0
        }

        .iti__flag.iti__ua {
            height: 14px;
            background-position: -5175px 0
        }

        .iti__flag.iti__ug {
            height: 14px;
            background-position: -5197px 0
        }

        .iti__flag.iti__um {
            height: 11px;
            background-position: -5219px 0
        }

        .iti__flag.iti__un {
            height: 14px;
            background-position: -5241px 0
        }

        .iti__flag.iti__us {
            height: 11px;
            background-position: -5263px 0
        }

        .iti__flag.iti__uy {
            height: 14px;
            background-position: -5285px 0
        }

        .iti__flag.iti__uz {
            height: 10px;
            background-position: -5307px 0
        }

        .iti__flag.iti__va {
            height: 15px;
            background-position: -5329px 0
        }

        .iti__flag.iti__vc {
            height: 14px;
            background-position: -5346px 0
        }

        .iti__flag.iti__ve {
            height: 14px;
            background-position: -5368px 0
        }

        .iti__flag.iti__vg {
            height: 10px;
            background-position: -5390px 0
        }

        .iti__flag.iti__vi {
            height: 14px;
            background-position: -5412px 0
        }

        .iti__flag.iti__vn {
            height: 14px;
            background-position: -5434px 0
        }

        .iti__flag.iti__vu {
            height: 12px;
            background-position: -5456px 0
        }

        .iti__flag.iti__wf {
            height: 14px;
            background-position: -5478px 0
        }

        .iti__flag.iti__ws {
            height: 10px;
            background-position: -5500px 0
        }

        .iti__flag.iti__xk {
            height: 15px;
            background-position: -5522px 0
        }

        .iti__flag.iti__ye {
            height: 14px;
            background-position: -5544px 0
        }

        .iti__flag.iti__yt {
            height: 14px;
            background-position: -5566px 0
        }

        .iti__flag.iti__za {
            height: 14px;
            background-position: -5588px 0
        }

        .iti__flag.iti__zm {
            height: 14px;
            background-position: -5610px 0
        }

        .iti__flag.iti__zw {
            height: 10px;
            background-position: -5632px 0
        }

        .iti__flag {
            height: 15px;
            box-shadow: 0 0 1px 0 #888;
            background-image: url(../images/flags.png);
            background-repeat: no-repeat;
            background-color: #DBDBDB;
            background-position: 20px 0
        }

        @media (-webkit-min-device-pixel-ratio: 2),
        (min-resolution: 192dpi) {
            .iti__flag {
                background-image: url(../images/flags@2x.png)
            }
        }

        .iti__flag.iti__np {
            background-color: transparent
        }

        .ui-helper-hidden {
            display: none
        }

        .ui-helper-hidden-accessible {
            border: 0;
            clip: rect(0 0 0 0);
            height: 1px;
            margin: -1px;
            overflow: hidden;
            padding: 0;
            position: absolute;
            width: 1px
        }

        .ui-helper-reset {
            margin: 0;
            padding: 0;
            border: 0;
            outline: 0;
            line-height: 1.3;
            text-decoration: none;
            font-size: 100%;
            list-style: none
        }

        .ui-helper-clearfix:before,
        .ui-helper-clearfix:after {
            content: "";
            display: table;
            border-collapse: collapse
        }

        .ui-helper-clearfix:after {
            clear: both
        }

        .ui-helper-zfix {
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            position: absolute;
            opacity: 0;
            filter: Alpha(Opacity=0)
        }

        .ui-front {
            z-index: 100
        }

        .ui-state-disabled {
            cursor: default !important;
            pointer-events: none
        }

        .ui-icon {
            display: inline-block;
            vertical-align: middle;
            margin-top: -.25em;
            position: relative;
            text-indent: -99999px;
            overflow: hidden;
            background-repeat: no-repeat
        }

        .ui-widget-icon-block {
            left: 50%;
            margin-left: -8px;
            display: block
        }

        .ui-widget-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%
        }

        .ui-datepicker {
            width: 300px;
            padding: .2em .2em 0;
            display: none
        }

        .ui-datepicker .ui-datepicker-header {
            position: relative;
            padding: .2em 0
        }

        .ui-datepicker .ui-datepicker-prev,
        .ui-datepicker .ui-datepicker-next {
            position: absolute;
            top: 2px;
            width: 1.8em;
            height: 1.8em
        }

        .ui-datepicker .ui-datepicker-prev-hover,
        .ui-datepicker .ui-datepicker-next-hover {
            top: 1px
        }

        .ui-datepicker .ui-datepicker-prev {
            left: 2px
        }

        .ui-datepicker .ui-datepicker-next {
            right: 2px
        }

        .ui-datepicker .ui-datepicker-prev-hover {
            left: 1px
        }

        .ui-datepicker .ui-datepicker-next-hover {
            right: 1px
        }

        .ui-datepicker .ui-datepicker-prev span,
        .ui-datepicker .ui-datepicker-next span {
            display: block;
            position: absolute;
            left: 50%;
            margin-left: -8px;
            top: 50%;
            margin-top: -8px
        }

        .ui-datepicker .ui-datepicker-title {
            margin: 0 2.3em;
            line-height: 1.8em;
            text-align: center
        }

        .ui-datepicker .ui-datepicker-title select {
            font-size: 1em;
            margin: 1px 0
        }

        .ui-datepicker select.ui-datepicker-month,
        .ui-datepicker select.ui-datepicker-year {
            width: 45%
        }

        .ui-datepicker table {
            width: 100%;
            border-collapse: collapse;
            margin: 0 0 .4em
        }

        .ui-datepicker th {
            padding: .7em .3em;
            text-align: center;
            font-weight: 700;
            border: 0
        }

        .ui-datepicker td {
            border: 0;
            padding: 1px
        }

        .ui-datepicker td span,
        .ui-datepicker td a {
            display: block;
            padding: .2em;
            text-align: right;
            text-decoration: none
        }

        .ui-datepicker .ui-datepicker-buttonpane {
            background-image: none;
            margin: .7em 0 0;
            padding: 0 .2em;
            border-left: 0;
            border-right: 0;
            border-bottom: 0
        }

        .ui-datepicker .ui-datepicker-buttonpane button {
            float: right;
            margin: .5em .2em .4em;
            cursor: pointer;
            padding: .2em .6em .3em;
            width: auto;
            overflow: visible
        }

        .ui-datepicker .ui-datepicker-buttonpane button.ui-datepicker-current {
            float: left
        }

        .ui-datepicker.ui-datepicker-multi {
            width: auto
        }

        .ui-datepicker-multi .ui-datepicker-group {
            float: left
        }

        .ui-datepicker-multi .ui-datepicker-group table {
            width: 95%;
            margin: 0 auto .4em
        }

        .ui-datepicker-multi-2 .ui-datepicker-group {
            width: 50%
        }

        .ui-datepicker-multi-3 .ui-datepicker-group {
            width: 33.3%
        }

        .ui-datepicker-multi-4 .ui-datepicker-group {
            width: 25%
        }

        .ui-datepicker-multi .ui-datepicker-group-last .ui-datepicker-header,
        .ui-datepicker-multi .ui-datepicker-group-middle .ui-datepicker-header {
            border-left-width: 0
        }

        .ui-datepicker-multi .ui-datepicker-buttonpane {
            clear: left
        }

        .ui-datepicker-row-break {
            clear: both;
            width: 100%;
            font-size: 0
        }

        .ui-datepicker-rtl {
            direction: rtl
        }

        .ui-datepicker-rtl .ui-datepicker-prev {
            right: 2px;
            left: auto
        }

        .ui-datepicker-rtl .ui-datepicker-next {
            left: 2px;
            right: auto
        }

        .ui-datepicker-rtl .ui-datepicker-prev:hover {
            right: 1px;
            left: auto
        }

        .ui-datepicker-rtl .ui-datepicker-next:hover {
            left: 1px;
            right: auto
        }

        .ui-datepicker-rtl .ui-datepicker-buttonpane {
            clear: right
        }

        .ui-datepicker-rtl .ui-datepicker-buttonpane button {
            float: left
        }

        .ui-datepicker-rtl .ui-datepicker-buttonpane button.ui-datepicker-current,
        .ui-datepicker-rtl .ui-datepicker-group {
            float: right
        }

        .ui-datepicker-rtl .ui-datepicker-group-last .ui-datepicker-header,
        .ui-datepicker-rtl .ui-datepicker-group-middle .ui-datepicker-header {
            border-right-width: 0;
            border-left-width: 1px
        }

        .ui-datepicker .ui-icon {
            display: block;
            text-indent: -99999px;
            overflow: hidden;
            background-repeat: no-repeat;
            left: .5em;
            top: .3em
        }

        .ui-widget {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 14px
        }

        .ui-widget .ui-widget {
            font-size: 1em
        }

        .ui-widget input,
        .ui-widget select,
        .ui-widget textarea,
        .ui-widget button {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 1em
        }

        .ui-widget.ui-widget-content {
            border: 1px solid #c5c5c5
        }

        .ui-widget-content {
            border: 1px solid #ddd;
            background: #fff;
            color: #333
        }

        .ui-widget-content a {
            color: #333
        }

        .ui-widget-header {
            color: #333;
            font-weight: 700
        }

        .ui-widget-header a {
            color: #333
        }

        .ui-state-default,
        .ui-widget-content .ui-state-default,
        .ui-widget-header .ui-state-default,
        .ui-button,
        html .ui-button.ui-state-disabled:hover,
        html .ui-button.ui-state-disabled:active {
            font-weight: 400;
            color: #454545
        }

        .ui-state-default a,
        .ui-state-default a:link,
        .ui-state-default a:visited,
        a.ui-button,
        a:link.ui-button,
        a:visited.ui-button,
        .ui-button {
            color: #454545;
            text-decoration: none
        }

        .ui-state-hover,
        .ui-widget-content .ui-state-hover,
        .ui-widget-header .ui-state-hover,
        .ui-state-focus,
        .ui-widget-content .ui-state-focus,
        .ui-widget-header .ui-state-focus,
        .ui-button:hover,
        .ui-button:focus {
            background: #d0b316;
            font-weight: 400;
            color: #2b2b2b
        }

        .ui-state-hover a,
        .ui-state-hover a:hover,
        .ui-state-hover a:link,
        .ui-state-hover a:visited,
        .ui-state-focus a,
        .ui-state-focus a:hover,
        .ui-state-focus a:link,
        .ui-state-focus a:visited,
        a.ui-button:hover,
        a.ui-button:focus {
            color: #2b2b2b;
            text-decoration: none
        }

        .ui-visual-focus {
            box-shadow: 0 0 3px 1px #5e9ed6
        }

        .ui-state-active,
        .ui-widget-content .ui-state-active,
        .ui-widget-header .ui-state-active,
        a.ui-button:active,
        .ui-button:active,
        .ui-button.ui-state-active:hover {
            background: #d0b316;
            font-weight: 400;
            color: #fff
        }

        .ui-icon-background,
        .ui-state-active .ui-icon-background {
            border: #003eff;
            background-color: #fff
        }

        .ui-state-active a,
        .ui-state-active a:link,
        .ui-state-active a:visited {
            color: #fff;
            text-decoration: none
        }

        .ui-state-highlight,
        .ui-widget-content .ui-state-highlight,
        .ui-widget-header .ui-state-highlight {
            color: #454545
        }

        .ui-state-checked {
            border: 1px solid #dad55e;
            background: #fffa90
        }

        .ui-state-highlight a,
        .ui-widget-content .ui-state-highlight a,
        .ui-widget-header .ui-state-highlight a {
            color: #777620
        }

        .ui-state-error,
        .ui-widget-content .ui-state-error,
        .ui-widget-header .ui-state-error {
            border: 1px solid #f1a899;
            background: #fddfdf;
            color: #5f3f3f
        }

        .ui-state-error a,
        .ui-widget-content .ui-state-error a,
        .ui-widget-header .ui-state-error a {
            color: #5f3f3f
        }

        .ui-state-error-text,
        .ui-widget-content .ui-state-error-text,
        .ui-widget-header .ui-state-error-text {
            color: #5f3f3f
        }

        .ui-priority-primary,
        .ui-widget-content .ui-priority-primary,
        .ui-widget-header .ui-priority-primary {
            font-weight: 700
        }

        .ui-priority-secondary,
        .ui-widget-content .ui-priority-secondary,
        .ui-widget-header .ui-priority-secondary {
            opacity: .7;
            filter: Alpha(Opacity=70);
            font-weight: 400
        }

        .ui-state-disabled,
        .ui-widget-content .ui-state-disabled,
        .ui-widget-header .ui-state-disabled {
            opacity: .35;
            filter: Alpha(Opacity=35);
            background-image: none
        }

        .ui-state-disabled .ui-icon {
            filter: Alpha(Opacity=35)
        }

        .ui-icon {
            width: 16px;
            height: 16px
        }

        .ui-datepicker .ui-datepicker-header .ui-corner-all {
            font-family: 'insideTravel' !important;
            speak: none;
            line-height: 1;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            font-size: 8px;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 25px;
            height: 25px
        }

        .ui-datepicker .ui-datepicker-header .ui-corner-all:before {
            content: "\e912";
            display: block
        }

        .ui-datepicker .ui-datepicker-header .ui-corner-all.ui-datepicker-prev {
            -ms-transform: rotate(90deg);
            -webkit-transform: rotate(90deg);
            transform: rotate(90deg)
        }

        .ui-datepicker .ui-datepicker-header .ui-corner-all.ui-datepicker-next {
            -ms-transform: rotate(-90deg);
            -webkit-transform: rotate(-90deg);
            transform: rotate(-90deg)
        }

        .ui-widget-overlay {
            background: #aaa;
            opacity: .3;
            filter: Alpha(Opacity=30)
        }

        .ui-widget-shadow {
            -webkit-box-shadow: 0 0 5px #666;
            box-shadow: 0 0 5px #666
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0
        }

        *::-webkit-input-placeholder {
            color: #555;
            letter-spacing: 1px;
            font-size: 12px;
            font-family: 'Montserrat', Arial, sans-serif
        }

        *:-moz-placeholder {
            color: #555;
            letter-spacing: 1px;
            font-size: 12px;
            font-family: 'Montserrat', Arial, sans-serif
        }

        *::-moz-placeholder {
            color: #555;
            letter-spacing: 1px;
            font-size: 12px;
            font-family: 'Montserrat', Arial, sans-serif
        }

        *:-ms-input-placeholder {
            color: #555;
            letter-spacing: 1px;
            font-size: 12px;
            font-family: 'Montserrat', Arial, sans-serif
        }

        *:focus {
            outline: none
        }

        object,
        iframe,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        blockquote,
        pre,
        abbr,
        address,
        cite,
        code,
        del,
        dfn,
        em,
        img,
        ins,
        kbd,
        q,
        samp,
        small,
        strong,
        sub,
        sup,
        var,
        b,
        i,
        dl,
        dt,
        dd,
        ol,
        ul,
        li,
        fieldset,
        form,
        label,
        legend,
        table,
        caption,
        tbody,
        tfoot,
        thead,
        tr,
        th,
        td,
        article,
        aside,
        canvas,
        details,
        figcaption,
        figure,
        footer,
        header,
        hgroup,
        menu,
        nav,
        section,
        summary,
        time,
        mark,
        audio,
        video {
            margin: 0;
            padding: 0;
            border: 0;
            outline: 0;
            font-size: 100%;
            vertical-align: baseline;
            background: transparent;
            line-height: inherit;
            color: inherit;
            font-family: inherit
        }

        sub,
        sup {
            font-size: 75%
        }

        article,
        aside,
        details,
        figcaption,
        figure,
        footer,
        header,
        hgroup,
        menu,
        nav,
        section {
            display: block
        }

        del {
            text-decoration: line-through
        }

        abbr[title],
        dfn[title] {
            border-bottom: 1px dotted;
            cursor: help
        }

        table {
            border-collapse: collapse;
            border-spacing: 0
        }

        hr {
            display: block;
            height: 1px;
            border: 0;
            border-top: 1px solid #cccccc;
            margin: 20px 0;
            padding: 0
        }

        input,
        select {
            vertical-align: middle;
            color: #555;
            letter-spacing: 1px;
            font-size: 12px;
            font-family: 'Montserrat', Arial, sans-serif
        }

        a,
        a:hover,
        a:focus,
        a:active {
            text-decoration: none;
            color: inherit;
            outline: none
        }

        ol,
        ul,
        li {
            padding: 0;
            list-style: none;
            margin: 0
        }

        label {
            font-weight: normal
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            padding-left: 5px;
            padding-right: 5px
        }

        select {
            padding-left: 8px;
            cursor: pointer
        }

        input[type="number"] {
            padding-left: 5px
        }

        textarea {
            padding: 8px 5px 8px 5px
        }

        input,
        textarea,
        select,
        button,
        a,
        button:hover,
        button:active,
        button:focus {
            outline: none
        }

        button {
            border: none;
            background: none
        }

        input[type="password"],
        input[type="email"],
        input[type="text"],
        textarea {
            border-radius: 0;
            box-shadow: none;
            appearance: none;
            -moz-appearance: none;
            -webkit-appearance: none;
            -ms-appearance: none;
            -o-appearance: none
        }

        img {
            max-width: 100%;
            vertical-align: middle;
            object-fit: cover
        }

        body {
            width: 100%;
            font-family: 'Montserrat', Arial, sans-serif;
            font-size: 12px;
            color: #111;
            letter-spacing: 1px;
            position: relative;
            --bodyWidth: 1583px;
            overflow-x: hidden
        }

        .app {
            width: 100%;
            max-width: 100vw;
            overflow: hidden;
            position: relative
        }

        .app-2 {
            width: 100%;
            max-width: 100vw;
            overflow: hidden;
            position: relative
        }

        input {
            white-space: nowrap;
            text-overflow: ellipsis;
            height: 25px
        }

        li {
            list-style: none
        }

        b {
            font-weight: 600
        }

        a {
            letter-spacing: inherit;
            display: inline-block;
            line-height: inherit;
            color: #111;
            -webkit-transition: all .2s linear;
            -moz-transition: all .2s linear;
            -o-transition: all .2s linear;
            -ms-transition: all .2s linear;
            transition: all .2s linear
        }

        button {
            cursor: pointer;
            font-size: 12px;
            font-family: inherit
        }

        button:hover,
        a:hover {
            text-decoration: none;
            color: #d0b316
        }

        section {
            margin: 30px 0;
            width: 100%
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            margin: 15px 0 10px
        }

        img {
            width: 100%
        }

        select {
            display: inline-block;
            width: 100%;
            height: 25px;
            margin: 0;
            padding: 0 0 0 15px;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            outline: none;
            font-weight: 300;
            letter-spacing: 1px;
            border: none;
            position: relative;
            font-size: 13px;
            line-height: 1.5;
            background: url(../images/select-arrow-thin.svg) no-repeat top 9px right 10px, url(../images/select-arrow-thin.svg) no-repeat top 9px right 10px;
            background-size: 12px;
            background-color: transparent
        }

        select:focus {
            outline-style: dotted;
            outline-width: 1px
        }

        .icon-font {
            font-size: inherit
        }

        .icon-font-cr {
            font-size: 22px
        }

        .icon-destination:before {
            color: inherit
        }

        .asiatours-black:before,
        .icon-cuisine:before,
        .icon-des-1:before,
        .icon-des-2:before,
        .icon-des-3:before,
        .icon-des-4:before {
            color: inherit
        }

        .input-st1 {
            border: none;
            background-color: transparent;
            font-weight: 500;
            padding-bottom: 5px;
            padding-top: 5px;
            -webkit-transition: all .2s linear;
            -moz-transition: all .2s linear;
            -o-transition: all .2s linear;
            -ms-transition: all .2s linear;
            transition: all .2s linear;
            font-size: 13px;
            letter-spacing: 2px;
            outline: none
        }

        .input-st1:focus {
            outline-style: dotted;
            outline-width: 1px;
            border-bottom: 1px solid #111;
            font-size: 14px
        }

        .input-st2 {
            width: 100%;
            height: auto;
            border: 1px solid #aaa;
            vertical-align: middle;
            line-height: 1.5;
            color: #555;
            padding: 10px 8px;
            -webkit-transition: all .25s linear;
            -moz-transition: all .25s linear;
            -o-transition: all .25s linear;
            -ms-transition: all .25s linear;
            transition: all .25s linear
        }

        .background-st1 {
            background-color: #f6f4f0
        }

        .background-tran {
            background-color: transparent !important
        }

        .select-st9 {
            padding-right: 15px
        }

        .btn-st1 {
            background-color: #edce07;
            color: #555;
            letter-spacing: 1px;
            -webkit-transition: all .2s linear;
            -moz-transition: all .2s linear;
            -o-transition: all .2s linear;
            -ms-transition: all .2s linear;
            transition: all .2s linear;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            text-transform: uppercase;
            border: none;
            padding: 10px 25px;
            line-height: 1
        }

        .btn-st1:hover {
            background-color: #dbd9d9
        }

        .btn-st2 {
            background-color: transparent;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            padding: 10px 25px;
            text-transform: uppercase;
            line-height: 1.5;
            text-align: center;
            letter-spacing: 1px;
            border: 1px solid #000;
            color: #000;
            -webkit-transition: all .2s linear;
            -moz-transition: all .2s linear;
            -o-transition: all .2s linear;
            -ms-transition: all .2s linear;
            transition: all .2s linear
        }

        .btn-st2:hover {
            color: #d0b316;
            border-color: #d0b316
        }

        .btn-st3 {
            color: #111;
            background-color: #edce07;
            text-transform: uppercase;
            letter-spacing: 3px;
            -webkit-transition: all .25s linear;
            -moz-transition: all .25s linear;
            -o-transition: all .25s linear;
            -ms-transition: all .25s linear;
            transition: all .25s linear;
            font-weight: 600
        }

        .btn-st3:hover {
            color: #fff
        }

        .btn-st5 {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 5px 10px;
            border-radius: 999px
        }

        .btn-st5>div {
            width: 28px;
            height: 28px;
            margin-right: 5px
        }

        .btn-st5>div img {
            width: 100%;
            border-radius: 50%
        }

        .btn-st5 font {
            text-transform: uppercase;
            font-size: 12px
        }

        .btn-disabled {
            color: rgba(0, 0, 0, 0.4) !important;
            border-color: rgba(0, 0, 0, 0.4) !important;
            opacity: 1 !important
        }

        .link-st1 {
            color: #d0b316
        }

        .link-st1:hover {
            opacity: .8
        }

        .link-st2 {
            color: #111;
            line-height: 1.5;
            border-bottom: 1px solid #111
        }

        .link-st2:hover {
            opacity: .8;
            color: #d0b316
        }

        .link-st3 {
            color: #111;
            line-height: 1.5;
            font-weight: 500
        }

        .link-st3:after {
            content: "";
            display: block;
            height: 1px;
            background-color: #111;
            animation: lineAnimatedOut .5s;
            -moz-animation: lineAnimatedOut .5s;
            -webkit-animation: lineAnimatedOut .5s;
            -o-animation: lineAnimatedOut .5s;
            width: 100%
        }

        .link-st3:hover {
            color: #d0b316
        }

        .link-st3:hover:after {
            animation: lineAnimatedIn .5s;
            -moz-animation: lineAnimatedIn .5s;
            -webkit-animation: lineAnimatedIn .5s;
            -o-animation: lineAnimatedIn .5s;
            width: 0;
            background-color: #d0b316
        }

        .read-more-st1 {
            width: 100%;
            text-align: center
        }

        .read-more-st1 a {
            color: #aaa
        }

        .read-more-st1 a:after {
            background-color: #ddd
        }

        .read-more-st2 {
            width: 100%
        }

        .read-more-st2 a {
            color: #aaa
        }

        .read-more-st2 a:after {
            background-color: #aaa
        }

        .read-more-st3 {
            width: 100%;
            text-align: left
        }

        .read-more-st3 a {
            color: #aaa
        }

        .read-more-st3 a:after {
            background-color: #aaa
        }

        .div-hidden {
            overflow-y: hidden
        }

        .title-h1 {
            font-size: 30px;
            letter-spacing: 2px;
            font-weight: 600;
            line-height: 1;
            text-align: center;
            color: #111
        }

        .title-h2 {
            font-size: 24px;
            font-weight: 400;
            letter-spacing: 2px;
            line-height: 1.3;
            text-align: center;
            color: #111;
            width: 100%;
            text-transform: uppercase
        }

        .title-h2-line {
            width: 100%;
            font-size: 22px;
            letter-spacing: 2px;
            color: #000;
            line-height: 1.3;
            text-align: center;
            margin-top: 20px;
            margin-bottom: 10px;
            font-weight: 400;
            text-transform: uppercase
        }

        .title-h2-line:after,
        .line:after {
            max-width: 200px;
            height: 1px;
            display: block;
            background-color: #d0b316;
            margin: 15px auto 20px;
            content: "";
            width: 40%
        }

        .paragraph {
            margin: 10px auto;
            line-height: 2;
            text-align: center;
            color: #333;
            width: 100%
        }

        .paragraph-hide {
            line-height: 2;
            margin: 0 auto;
            width: 100%;
            max-height: 86px;
            overflow-y: hidden
        }

        .paragraph-show {
            max-height: none !important
        }

        .mg-left {
            margin-left: 40px
        }

        .mg-right {
            margin-right: 40px
        }

        .wrap-blur {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background-color: rgba(0, 0, 0, 0.3)
        }

        .bg-map-menu {
            display: block;
            width: 140px;
            height: 150px;
            -webkit-transition: all .25s linear;
            -moz-transition: all .25s linear;
            -o-transition: all .25s linear;
            -ms-transition: all .25s linear;
            transition: all .25s linear;
            background-image: url(../images/sprite.png);
            background-repeat-x: no-repeat;
            background-repeat-y: no-repeat;
            background-size: 921px
        }

        .bg-map-vi {
            background-position: -21px -2254px
        }

        .bg-map-ca {
            background-position: -140px -2254px
        }

        .bg-map-la {
            background-position: -267px -2254px
        }

        .bg-map-my {
            background-position: -388px -2254px
        }

        .bg-map-th {
            background-position: -504px -2254px
        }

        .bg-map-menu:hover {
            background-position-y: -2399px
        }

        .open-flex {
            display: flex !important
        }

        .close-display {
            display: none !important
        }

        .open-block {
            display: block !important
        }

        .open-visiblity {
            visibility: visible !important
        }

        .close-visiblity {
            visibility: hidden !important
        }

        .open-opacity:after,
        .open-opacity:before {
            opacity: 1 !important
        }

        .open-relative {
            position: relative !important
        }

        .close-opacity:after,
        .close-opacity:before {
            opacity: 0 !important
        }

        .none-box-shadow {
            box-shadow: none !important
        }

        .banner-top {
            position: relative;
            margin-top: 0;
            height: 680px
        }

        .count-img {
            position: absolute;
            top: 5px;
            right: 22px;
            color: #fff;
            line-height: 1;
            font-weight: 600
        }

        .count-day {
            position: absolute;
            top: 5px;
            left: 5px;
            line-height: 1;
            font-weight: 600;
            color: #fff;
            padding: 8px 10px;
            z-index: 3;
            border-radius: 999px;
            background-color: rgba(16, 15, 15, 0.5);
            text-transform: uppercase;
            font-size: 10px
        }

        .enlarge {
            position: absolute;
            top: 6px;
            right: 5px;
            color: #fff
        }

        .location {
            position: absolute;
            top: 5px;
            left: 5px;
            color: #fff;
            line-height: 1;
            font-weight: 600
        }

        .location .map-marker {
            margin-right: 5px
        }

        .star-box {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            color: #d0b316;
            font-size: 14px
        }

        .pre-title {
            font-size: 20px;
            width: 100%;
            display: block;
            font-weight: 400;
            text-align: center
        }

        .bg-parallax {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: -3;
            background-position: center top;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover
        }

        .bg-home {
            background-image: url("../images/background/bg-home.jpg");
            height: 100%
        }

        .wrap-mini-intro {
            width: 50%;
            margin: 0 auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: center
        }

        .wrap-mini-intro .paragraph {
            margin-top: 0
        }

        .wrap-mini-intro .team-name {
            font-weight: normal;
            font-family: inherit;
            font-size: 26px
        }

        .view-more-wrap {
            width: 100%;
            margin-bottom: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center
        }

        .view-more-wrap .arrow-radius {
            width: 50px;
            height: 50px;
            -webkit-transition: all .2s linear;
            -moz-transition: all .2s linear;
            -o-transition: all .2s linear;
            -ms-transition: all .2s linear;
            transition: all .2s linear
        }

        .view-more-wrap .arrow-radius .select-arrow-thin {
            font-size: 10px;
            color: #111
        }

        .view-more-wrap .link-st3 {
            margin-top: 25px;
            margin-bottom: 25px
        }

        .link-st4 {
            margin-top: 20px;
            text-transform: uppercase;
            display: inline-flex;
            align-items: center;
        }

        .link-st4 .icon-font {
            font-size: 7px;
            margin-left: 5px;
        }

        .water-mask {
            width: 100%;
            text-align: center;
            text-transform: uppercase;
            font-size: 65px;
            color: #d6cea3;
            letter-spacing: 10px;
            font-weight: 200;
            margin-top: 0px;
            margin-bottom: 30px;
            overflow: hidden;
            white-space: nowrap
        }

        .wrap-mini-intro-st2 {
            width: 100% !important;
            padding-right: 15px;
            padding-left: 15px
        }

        .wrap-mini-intro-st2 .team-name {
            font-weight: normal;
            font-family: 'Montserrat', Arial, sans-serif;
            font-size: 28px
        }

        .wrap-mini-intro-st2 .box-img-st2 {
            width: 90%;
            max-width: 615px;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 30px
        }

        .detail-location .wrap-mini-intro-st2 .team-name {
            font-size: 38px
        }

        .box-img-foot {
            width: 90%;
            display: block;
            text-align: center;
            margin: 15px auto 0
        }

        .box-img-foot img {
            width: 100%;
            max-width: 80px;
            margin-left: auto;
            margin-right: auto
        }

        .posi-rele {
            position: relative !important
        }

        .phone-box {
            display: inline-flex;
            justify-content: space-between;
            align-items: center;
            margin-right: 35px;
            height: 100%
        }

        .phone-box .phone {
            font-size: 15px;
            margin-right: 5px
        }

        .phone-box strong {
            font-weight: 600
        }

        .box-text {
            display: flex;
            justify-content: center;
            align-items: center
        }

        .box-text h1,
        .box-text h2,
        .box-text h3,
        .box-text h4 {
            font-size: 20px;
            color: #fff;
            text-transform: uppercase;
            text-align: center;
            font-weight: 500
        }

        .box-text p {
            color: #fff;
            letter-spacing: 2px;
            text-align: center
        }

        .filter-box {
            width: 100%;
            display: flex;
            align-items: center;
            position: relative;
            background-color: #fff;
            margin-bottom: 15px;
            height: 40px
        }

        .filter-box span {
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden;
            font-weight: 600
        }

        .filter-box>a {
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: inherit
        }

        .filter-box>a span {
            flex-grow: 1;
            text-align: left;
            padding-left: 10px;
            text-transform: uppercase;
            color: #333
        }

        .filter-box .icon-dropdown {
            width: 35px;
            height: 100%;
            color: #fff;
            flex-shrink: 0;
            background-color: #d0b316
        }

        .filter-box .value {
            top: 100%;
            z-index: 4
        }

        .filter-box .value li .btn-value {
            padding: 10px;
            color: inherit
        }

        .filter-box .value li .btn-value span {
            color: #555;
            padding: 0;
            cursor: pointer
        }

        .filter-box .value li .btn-value:hover {
            background-color: #ececec
        }

        .icon-dropdown {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            align-content: center
        }

        .icon-dropdown .select-arrow-thin {
            font-size: 6px;
            padding: 2px
        }

        .wrap-filter {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            align-content: center;
            width: 75%;
            margin: 15px auto 30px
        }

        .wrap-slide-st1 {
            margin-top: 15px;
            width: 100%
        }

        .wrap-slide-st1 .synch-carousels {
            box-shadow: none
        }

        .wrap-slide-st1 .synch-carousels .nav-arrows {
            top: 213px
        }

        .wrap-slide-st1 .synch-carousels .nav-arrows button i {
            font-size: 58px;
            color: #d4d4d4
        }

        .wrap-slide-st1 .synch-carousels .nav-arrows button:hover i {
            color: #d0b316
        }

        .wrap-slide-st1 .synch-carousels .nav-arrows .arrow-left {
            margin-left: 20px
        }

        .wrap-slide-st1 .synch-carousels .nav-arrows .arrow-left .icon-next-back {
            -ms-transform: rotate(180deg);
            -webkit-transform: rotate(180deg);
            transform: rotate(180deg)
        }

        .wrap-slide-st1 .synch-carousels .nav-arrows .arrow-right {
            margin-right: 20px
        }

        .wrap-slide-st1 .gallery {
            width: 76%;
            margin: 0 auto
        }

        .wrap-slide-st1 .gallery .item>a:first-child {
            position: relative;
            width: 100%
        }

        .wrap-slide-st1 .gallery .item>a:first-child .box-text {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background-color: rgba(0, 0, 0, 0.4);
            -webkit-transition: all .2s linear;
            -moz-transition: all .2s linear;
            -o-transition: all .2s linear;
            -ms-transition: all .2s linear;
            transition: all .2s linear
        }

        .wrap-slide-st1 .gallery .item>a:first-child:hover {
            opacity: 1
        }

        .wrap-slide-st1 .gallery .item>a:first-child:hover .box-text {
            background-color: rgba(0, 0, 0, 0.1)
        }

        .wrap-slide-st1 .gallery .item {
            text-align: center;
            padding-left: 5px;
            padding-right: 5px
        }

        .wrap-slide-st1 .gallery .item .paragraph {
            width: 90%;
            font-size: 12px;
            margin-bottom: 25px;
            margin-top: 20px
        }

        .row {
            display: block;
            width: 100%;
            margin-right: -7px;
            margin-left: -7px
        }

        .row-767 {
            width: 100%
        }

        .theme-slide-img {
            width: 100%;
            height: 0;
            padding-bottom: 80%;
            overflow: hidden;
            -webkit-transition: all .5s ease-in-out;
            -moz-transition: all .5s ease-in-out;
            -o-transition: all .5s ease-in-out;
            -ms-transition: all .5s ease-in-out;
            transition: all .5s ease-in-out
        }

        .theme-slide-text {
            width: 100%;
            text-align: left
        }

        .theme-slide-text h3,
        .theme-slide-text h4 {
            width: 100%;
            font-size: 14px;
            font-weight: 600;
            margin: 0
        }

        .theme-slide-text h3 a,
        .theme-slide-text h4 a {
            margin: 0;
            text-transform: none
        }

        .theme-slide-text p {
            line-height: 2;
            color: #333
        }

        .rotage180 {
            -ms-transform: rotate(180deg);
            -webkit-transform: rotate(180deg);
            transform: rotate(180deg)
        }

        .type-rotate {
            position: absolute;
            -ms-transform: rotate(-90deg);
            -webkit-transform: rotate(-90deg);
            transform: rotate(-90deg);
            text-align: right;
            text-transform: uppercase
        }

        .wrap-slide-st2 {
            width: 100%;
            margin-top: 30px;
            margin-bottom: 30px
        }

        .wrap-slide-st2 .synch-carousels {
            box-shadow: none
        }

        .wrap-slide-st2 .synch-carousels .nav-arrows {
            top: 40%
        }

        .wrap-slide-st2 .synch-carousels .nav-arrows .arrow-left {
            margin-left: 20px
        }

        .wrap-slide-st2 .synch-carousels .nav-arrows .arrow-right {
            margin-right: 20px
        }

        .wrap-slide-st2 .gallery {
            width: 85%;
            margin: 0 auto
        }

        .wrap-slide-st2 .slick-track {
            display: flex;
            align-items: center
        }

        .wrap-slide-st2 .item {
            position: relative;
            padding-right: 20px;
            padding-left: 20px;
            max-height: 900px;
            display: flex;
            flex-wrap: wrap;
            align-items: center
        }

        .wrap-slide-st2 .item a {
            display: block;
            width: 100%;
            text-transform: uppercase;
            margin-top: 15px;
            margin-bottom: 15px
        }

        .wrap-slide-st2 .item .theme-slide-text h3 a,
        .wrap-slide-st2 .item .theme-slide-text h4 a {
            text-transform: none
        }

        .wrap-slide-st2 .item .theme-slide-text .box-button {
            display: inline-block;
            margin-left: auto;
            margin-right: auto
        }

        .wrap-slide-st2 .item .theme-slide-text .box-button .link-st3 {
            text-transform: none;
            margin-bottom: 0
        }

        .wrap-slide-st2 .item .theme-slide-img>a {
            margin-top: 0;
            margin-bottom: 0
        }

        .wrap-slide-st2 .item .type-rotate {
            width: 250px;
            height: 50px;
            left: -99px;
            top: 105px
        }

        .wrap-slide-st2 .item.slick-center .theme-slide-img {
            padding-bottom: 125%
        }

        .tripadvisor {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 13px
        }

        .tripadvisor .path2,
        .tripadvisor .path3,
        .tripadvisor .path4,
        .tripadvisor .path5 {
            position: absolute
        }

        .tripadvisor .path2:before,
        .tripadvisor .path3:before,
        .tripadvisor .path4:before,
        .tripadvisor .path5:before {
            margin-left: 0
        }

        .wrap-tripadvisor {
            display: flex;
            justify-content: center;
            align-items: center
        }

        .wrap-tripadvisor img {
            width: 15px
        }

        .wrap-tripadvisor strong {
            margin-left: 5px;
            font-weight: 400
        }

        .wrap-dots {
            width: 100%;
            display: flex;
            justify-content: center
        }

        .wrap-dots li {
            margin-left: 4px;
            margin-right: 4px;
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background-color: #ececec;
            overflow: hidden
        }

        .wrap-dots .slick-active {
            background-color: #d0b316
        }

        .wrap-slide-st3 {
            width: 100%
        }

        .wrap-slide-st3 .synch-carousels {
            box-shadow: none
        }

        .wrap-slide-st3 .gallery {
            width: 85%;
            margin: 0 auto
        }

        .wrap-slide-st3 .item {
            display: flex;
            justify-content: flex-start
        }

        .wrap-slide-st3 .item>div:first-child {
            width: 25%;
            padding-right: 20px;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center
        }

        .wrap-slide-st3 .item>div:first-child img:last-child {
            display: block;
            position: absolute;
            border: 5px solid #fff;
            border-radius: 50%;
            width: 70%
        }

        .wrap-slide-st3 .item>div:last-child {
            width: 75%;
            padding-left: 20px;
            display: flex;
            flex-direction: column;
            justify-content: flex-end
        }

        .wrap-slide-st3 .item>div:last-child p {
            font-size: 14px;
            letter-spacing: 2px;
            line-height: 1.8;
            position: relative;
            margin-top: 15px;
            margin-bottom: 15px
        }

        .wrap-slide-st3 .item>div:last-child p>font {
            font-family: 'Theano Didot', 'Times New Roman', serif
        }

        .wrap-slide-st3 .item>div:last-child p>font:first-child {
            position: absolute;
            left: -15px
        }

        .wrap-slide-st3 .item>div:last-child .link-st3 {
            font-size: 12px
        }

        .wrap-slide-st3 .item>div:last-child>div:last-child {
            display: flex;
            justify-content: flex-start;
            align-items: center
        }

        .wrap-slide-st3 .item>div:last-child>div:last-child>span {
            font-size: 14px
        }

        .wrap-slide-st3 .item>div:last-child>div:last-child>a {
            margin-left: 10px
        }

        .wrap-slide-st3 .item>div:last-child>div:last-child .link-st3 {
            white-space: nowrap
        }

        .wrap-slide-st3 .wrap-dots {
            margin: 30px 0
        }

        .wrap-slide-st3 .wrap-dots button {
            color: rgba(255, 255, 255, 0)
        }

        .wrap-slide-st4 {
            width: 100%
        }

        .wrap-slide-st4 .synch-carousels {
            box-shadow: none
        }

        .wrap-slide-st4 .synch-carousels .nav-arrows {
            top: 40%
        }

        .wrap-slide-st4 .synch-carousels .nav-arrows button i {
            font-size: 20px;
            color: #d4d4d4
        }

        .wrap-slide-st4 .gallery {
            width: 90%;
            margin: 0 auto
        }

        .wrap-slide-st4 .gallery .item>a,
        .wrap-slide-st4 .gallery .item>.btn-modal-tour,
        .wrap-slide-st4 .gallery .item>.box-tour-st3 {
            position: relative;
            width: 100%;
            cursor: pointer
        }

        .wrap-slide-st4 .gallery .item>a img,
        .wrap-slide-st4 .gallery .item>.btn-modal-tour img,
        .wrap-slide-st4 .gallery .item>.box-tour-st3 img {
            border-radius: 10px
        }

        .wrap-slide-st4 .gallery .item>a .box-text,
        .wrap-slide-st4 .gallery .item>.btn-modal-tour .box-text,
        .wrap-slide-st4 .gallery .item>.box-tour-st3 .box-text {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background-color: rgba(0, 0, 0, 0.4);
            -webkit-transition: all .2s linear;
            -moz-transition: all .2s linear;
            -o-transition: all .2s linear;
            -ms-transition: all .2s linear;
            transition: all .2s linear;
            border-radius: 10px;
            flex-direction: column
        }

        .wrap-slide-st4 .gallery .item>a .box-text h3,
        .wrap-slide-st4 .gallery .item>.btn-modal-tour .box-text h3,
        .wrap-slide-st4 .gallery .item>.box-tour-st3 .box-text h3 {
            font-size: 11px;
            margin-bottom: 0;
            margin-top: 0;
            font-weight: 600
        }

        .wrap-slide-st4 .gallery .item>a .box-text h3:after,
        .wrap-slide-st4 .gallery .item>.btn-modal-tour .box-text h3:after,
        .wrap-slide-st4 .gallery .item>.box-tour-st3 .box-text h3:after {
            margin: 5px auto;
            width: 100%;
            max-width: 150px
        }

        .wrap-slide-st4 .gallery .item>a .box-text p,
        .wrap-slide-st4 .gallery .item>.btn-modal-tour .box-text p,
        .wrap-slide-st4 .gallery .item>.box-tour-st3 .box-text p {
            font-size: 11px
        }

        .wrap-slide-st4 .gallery .item>a .box-text p a,
        .wrap-slide-st4 .gallery .item>.btn-modal-tour .box-text p a,
        .wrap-slide-st4 .gallery .item>.box-tour-st3 .box-text p a {
            color: inherit
        }

        .wrap-slide-st4 .gallery .item>a .box-text p a:hover,
        .wrap-slide-st4 .gallery .item>.btn-modal-tour .box-text p a:hover,
        .wrap-slide-st4 .gallery .item>.box-tour-st3 .box-text p a:hover {
            color: #d0b316
        }

        .wrap-slide-st4 .gallery .item>a:hover,
        .wrap-slide-st4 .gallery .item>.btn-modal-tour:hover,
        .wrap-slide-st4 .gallery .item>.box-tour-st3:hover {
            opacity: 1
        }

        .wrap-slide-st4 .gallery .item>a:hover .box-text,
        .wrap-slide-st4 .gallery .item>.btn-modal-tour:hover .box-text,
        .wrap-slide-st4 .gallery .item>.box-tour-st3:hover .box-text {
            background-color: transparent
        }

        .wrap-slide-st4 .gallery .item {
            text-align: center;
            padding-left: 10px;
            padding-right: 10px
        }

        .wrap-slide-st5 {
            width: 100%
        }

        .wrap-slide-st5 .synch-carousels {
            box-shadow: none
        }

        .wrap-slide-st5 .synch-carousels .nav-arrows {
            top: 42%;
            z-index: inherit
        }

        .wrap-slide-st5 .synch-carousels .nav-arrows button {
            z-index: 4
        }

        .wrap-slide-st5 .synch-carousels .nav-arrows button i {
            font-size: 14px;
            color: #fff
        }

        .wrap-slide-st5 .gallery .item>a {
            width: 100%;
            background-color: rgba(0, 0, 0, 0.4)
        }

        .triagle-st1 {
            -webkit-clip-path: polygon(-1px -1px, -1px 100%, 100% 50%);
            clip-path: polygon(-1px -1px, -1px 100%, 100% 50%);
            -webkit-shape-outside: polygon(-1px -1px, -1px 100%, 100% 50%);
            shape-outside: polygon(-1px -1px, -1px 100%, 100% 50%)
        }

        .tooltip {
            position: relative
        }

        .tooltip>.icon-font {
            font-size: 30px
        }

        .tooltip>.icon-font:before {
            color: #c3bdbd
        }

        .tooltip>.icon-font:hover:before {
            color: #d0b316
        }

        .tooltip>.icon-font-cr {
            font-size: 20px;
            padding: 5px;
            border: 1px solid #c3bdbd;
            border-radius: 50%
        }

        .tooltip>.icon-font-cr:before {
            color: #c3bdbd
        }

        .tooltip>.icon-font-cr:hover:before {
            color: #d0b316
        }

        .tooltip>.icon-font-cr:hover {
            border-color: #d0b316
        }

        .tooltip>a {
            opacity: 1
        }

        .tooltip span {
            visibility: hidden;
            position: absolute;
            display: block;
            background-color: #fff;
            color: #111;
            text-align: center;
            padding: 5px 10px;
            border-radius: 6px;
            z-index: 99;
            opacity: 0;
            -webkit-transition: all .2s linear;
            -moz-transition: all .2s linear;
            -o-transition: all .2s linear;
            -ms-transition: all .2s linear;
            transition: all .2s linear;
            bottom: 135%;
            left: 50%;
            transform: translateX(-50%);
            -moz-transform: translateX(-50%);
            -webkit-transform: translateX(-50%);
            -o-transform: translateX(-50%);
            -ms-transform: translateX(-50%);
            width: max-content;
            max-width: 320px;
            box-shadow: 0px 1px 3px 2px rgba(0, 0, 0, 0.13)
        }

        .tooltip span b {
            display: inline-block;
            width: 100%;
            text-transform: uppercase;
            font-weight: 400;
            font-size: 18px;
            margin-bottom: 10px;
            margin-top: 5px;
            white-space: nowrap
        }

        .tooltip span font {
            display: inline-block;
            font-size: 12px;
            width: 100%;
            white-space: nowrap;
            margin-bottom: 5px
        }

        .tooltip span:after {
            content: '';
            height: 12px;
            width: 12px;
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translate(-50%, 50%) rotate(45deg);
            -moz-transform: translate(-50%, 50%) rotate(45deg);
            -webkit-transform: translate(-50%, 50%) rotate(45deg);
            -o-transform: translate(-50%, 50%) rotate(45deg);
            -ms-transform: translate(-50%, 50%) rotate(45deg);
            background-color: #fff;
            box-shadow: 2px 2px 3px 0px rgba(0, 0, 0, 0.13)
        }

        .tooltip .box-tooltip-map {
            padding: 10px 20px 20px
        }

        .tooltip:hover span {
            visibility: visible;
            opacity: 1
        }

        .tooltip:hover>span {
            visibility: visible;
            opacity: 1
        }

        .tooltip:hover>.box-tooltip-map {
            visibility: hidden;
            opacity: 0
        }

        .wrap-tooltip {
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            padding-left: 15px;
            padding-right: 15px;
            margin: 10px auto
        }

        .wrap-tooltip .tooltip {
            margin: 5px 3px;
            display: inline-flex
        }

        .wrap-tooltip .tooltip:hover {
            opacity: 1
        }

        .wrap-tooltip .tooltip>span {
            background-color: #d0b316;
            color: #fff;
            width: auto;
            white-space: nowrap
        }

        .wrap-tooltip .tooltip>span font {
            margin-bottom: 0
        }

        .wrap-tooltip .tooltip>span:after {
            background-color: #d0b316;
            box-shadow: none
        }

        .arrow-radius {
            border: 1px solid #111;
            border-radius: 50%;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            width: 40px;
            height: 40px;
            background-color: transparent
        }

        .arrow-radius .select-arrow-thin {
            font-size: 9px;
            color: #111;
            -webkit-transition: all .25s linear;
            -moz-transition: all .25s linear;
            -o-transition: all .25s linear;
            -ms-transition: all .25s linear;
            transition: all .25s linear
        }

        .arrow-radius:hover {
            color: #d0b316;
            border-color: #d0b316
        }

        .arrow-radius:hover .select-arrow-thin {
            color: #d0b316
        }

        .synch-carousels {
            position: relative;
            box-shadow: 2px 5px 25px rgba(0, 0, 0, 0.05)
        }

        .synch-carousels .slick-slide {
            outline: none;
            border: none
        }

        .synch-carousels .gallery {
            z-index: 3
        }

        .synch-carousels .nav-arrows {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            position: absolute;
            height: 40px;
            z-index: 2
        }

        .synch-carousels .nav-arrows button {
            position: absolute;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            width: 40px;
            height: 40px;
            border: none;
            outline: none;
            background-color: transparent;
            -webkit-transition: all .2s linear;
            -moz-transition: all .2s linear;
            -o-transition: all .2s linear;
            -ms-transition: all .2s linear;
            transition: all .2s linear
        }

        .synch-carousels .nav-arrows button i {
            font-size: 30px;
            color: #aaa
        }

        .synch-carousels .nav-arrows .arrow-radius {
            border: 1px solid #aaa
        }

        .synch-carousels .nav-arrows .arrow-radius .select-arrow-thin {
            font-size: 9px
        }

        .synch-carousels .nav-arrows .arrow-radius:hover {
            border-color: #d0b316
        }

        .synch-carousels .nav-arrows .arrow-left {
            left: 0
        }

        .synch-carousels .nav-arrows .arrow-left .select-arrow-thin {
            -ms-transform: rotate(90deg);
            -webkit-transform: rotate(90deg);
            transform: rotate(90deg)
        }

        .synch-carousels .nav-arrows .arrow-right {
            right: 0
        }

        .synch-carousels .nav-arrows .arrow-right .select-arrow-thin {
            -ms-transform: rotate(-90deg);
            -webkit-transform: rotate(-90deg);
            transform: rotate(-90deg)
        }

        .map-coo {
            width: 30px;
            height: 30px;
            position: absolute;
            background-repeat-x: no-repeat;
            background-repeat-y: no-repeat;
            background-size: 99%;
            cursor: pointer
        }

        .map-coo:hover {
            width: 30px;
            height: 30px;
            opacity: 1
        }

        .padding-top-0 {
            padding-top: 0 !important
        }

        .padding-bot-0 {
            padding-bottom: 0 !important
        }

        .box-tooltip-map {
            width: max-content;
            max-width: 300px;
            left: 50%;
            transform: translateX(-50%);
            -moz-transform: translateX(-50%);
            -webkit-transform: translateX(-50%);
            -o-transform: translateX(-50%);
            -ms-transform: translateX(-50%)
        }

        .box-tooltip-map h3,
        .box-tooltip-map h4 {
            margin-top: 0;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 16px
        }

        .box-tooltip-map p {
            font-family: 'Reenie Beanie', cursive;
            font-weight: 500;
            font-size: 26px;
            margin-top: 10px;
            margin-bottom: 10px
        }

        .trip {
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            align-content: space-between;
            padding-bottom: 315px;
            position: relative;
            background-color: #fff
        }

        .trip>a:first-child {
            width: 100%
        }

        .trip h3 {
            font-size: 14px;
            padding-left: 15px;
            padding-right: 15px;
            line-height: 1.5;
            font-family: inherit;
            text-transform: uppercase;
            font-weight: 500;
            width: 100%
        }

        .trip h3>a {
            min-height: 48px
        }

        .trip .content-trip {
            position: absolute;
            bottom: 125px;
            z-index: 5;
            background-color: #fff
        }

        .trip .content-trip>p {
            padding-left: 15px;
            padding-right: 15px;
            max-height: 39px;
            overflow-y: hidden;
            color: #555;
            -webkit-transition: all 1.5s linear;
            -moz-transition: all 1.5s linear;
            -o-transition: all 1.5s linear;
            -ms-transition: all 1.5s linear;
            transition: all 1.5s linear
        }

        .trip .content-trip>span {
            display: block;
            width: 100%;
            font-size: 12px;
            padding-left: 15px;
            padding-right: 15px;
            margin-top: 15px;
            margin-bottom: 15px;
            text-transform: uppercase;
            color: #d0b316
        }

        .trip .content-trip>span>strong {
            font-size: 16px;
            font-weight: 500
        }

        .trip .wrap-tooltip {
            margin-top: auto;
            margin-bottom: 0;
            flex-wrap: nowrap;
            position: absolute;
            bottom: 80px
        }

        .trip .btn-st2 {
            color: #555;
            border-color: #bbb;
            position: absolute;
            bottom: 20px
        }

        .trip .btn-st2:hover {
            color: #ccaf3d;
            border-color: #ccaf3d
        }

        .trip .heart-tour {
            position: absolute;
            top: 5px;
            right: 5px;
            z-index: 2;
            font-size: 26px;
            color: rgba(255, 255, 255, 0.8)
        }

        .trip.trip-itine {
            padding-bottom: 350px
        }

        .trip.trip-itine .content-trip {
            bottom: 160px
        }

        .trip.trip-itine>.tooltip {
            display: inline-block;
            position: absolute;
            bottom: 125px;
            cursor: pointer
        }

        .trip.trip-itine>.tooltip .icon-itine {
            font-size: 32px
        }

        .trip.trip-itine>.tooltip .icon-itine:before {
            color: #d0b316
        }

        .trip.trip-itine>.tooltip .icon-itine:hover {
            opacity: .6
        }

        .trip.trip-itine>.tooltip span {
            background-color: #d0b316;
            color: #fff
        }

        .trip.trip-itine>.tooltip span:after {
            background-color: #d0b316;
            box-shadow: none
        }

        .trip.trip-itine .wrap-tooltip-itine {
            display: block;
            position: absolute;
            bottom: 125px;
            width: 100%
        }

        .trip.trip-itine .wrap-tooltip-itine .tooltip {
            display: inline-block;
            position: static;
            cursor: pointer
        }

        .trip.trip-itine .wrap-tooltip-itine .tooltip .icon-itine {
            font-size: 32px
        }

        .trip.trip-itine .wrap-tooltip-itine .tooltip .icon-itine:before {
            color: #d0b316
        }

        .trip.trip-itine .wrap-tooltip-itine .tooltip .icon-itine:hover {
            opacity: .6
        }

        .trip.trip-itine .wrap-tooltip-itine .tooltip span {
            background-color: #d0b316;
            color: #fff
        }

        .trip.trip-itine .wrap-tooltip-itine .tooltip span:after {
            background-color: #d0b316;
            box-shadow: none
        }

        .wrap-trip-st2 {
            width: 100%;
            padding-left: 15px;
            padding-right: 15px
        }

        .trip-st2 {
            position: relative;
            width: 100%;
            display: flex;
            align-items: flex-start;
            padding: 20px;
            background-color: #fff;
            margin-bottom: 30px
        }

        .trip-st2>a:first-child {
            width: 45%;
            padding-right: 10px
        }

        .trip-st2 .heart-tour {
            position: absolute;
            top: 25px;
            right: calc(55% + 25px);
            font-size: 26px;
            color: rgba(255, 255, 255, 0.8)
        }

        .trip-st2 .left-trip {
            position: relative;
            width: 45%;
            padding-right: 10px;
            display: flex;
            flex-wrap: wrap;
            align-items: flex-start
        }

        .trip-st2 .left-trip .heart-tour {
            top: 5px;
            right: 15px
        }

        .trip-st2 .left-trip .view-all-img {
            width: calc(100% - 10px)
        }

        .trip-st2 .right-trip {
            width: 55%;
            padding-left: 10px;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-between;
            position: relative
        }

        .trip-st2 .right-trip .head-trip {
            padding-bottom: 10px;
            border-bottom: 1px dotted #dcdcdc
        }

        .trip-st2 .right-trip h3 {
            font-size: 14px;
            line-height: 1.5;
            font-family: inherit;
            font-weight: 500;
            text-align: left
        }

        .trip-st2 .right-trip .title-cruise {
            margin-top: 0;
            font-size: 20px
        }

        .trip-st2 .right-trip .price-trip-box {
            border-top: 1px dotted #dcdcdc
        }

        .trip-st2 .right-trip .content-trip-cruise .price-trip-box {
            border-top: 0
        }

        .trip-st2 .right-trip .content-trip-cruise .price-trip-box .wrap-tooltip .tooltip .icon-font {
            font-size: 35px
        }

        .trip-st2 .right-trip .content-trip-cruise .price-trip-box .wrap-tooltip .tooltip>span {
            bottom: calc(100% + 10px)
        }

        .trip-st2 .right-trip .content-trip {
            position: absolute;
            left: 0;
            z-index: 2;
            background-color: #fff;
            padding-left: 10px
        }

        .trip-st2 .right-trip .content-trip .paragraph {
            max-height: 126px;
            overflow-y: hidden;
            text-align: left;
            color: #555;
            line-height: 1.6;
            -webkit-transition: all .5s linear;
            -moz-transition: all .5s linear;
            -o-transition: all .5s linear;
            -ms-transition: all .5s linear;
            transition: all .5s linear
        }

        .trip-st2 .right-trip .read-more-st2 .link-st3 {
            margin-top: 10px;
            margin-bottom: 10px
        }

        .sub-slider-img {
            display: flex;
            justify-content: center;
            align-items: center
        }

        .sub-slider-img a {
            display: block;
            width: 50%
        }

        .sale {
            position: absolute;
            top: 5px;
            left: 5px;
            padding: 0 10px;
            color: #fff;
            background-color: #ff5722;
            border-radius: 2px;
            line-height: 2;
            font-weight: 600;
            font-size: 14px
        }

        .content-trip-cruise {
            width: 100%;
            text-align: left
        }

        .content-trip-cruise .hotel-news {
            margin-bottom: 20px
        }

        .content-trip-cruise .box-hidden {
            text-align: left;
            margin-top: 10px
        }

        .content-trip-cruise .box-hidden p {
            line-height: 1.4;
            font-weight: 500;
            color: #555
        }

        .content-trip-cruise .box-hidden p .icon-font {
            margin-right: 5px;
            color: #d0b316
        }

        .content-trip-cruise .read-more-st2 {
            text-align: left
        }

        .hotel-news {
            width: 100%;
            margin-top: 10px;
            margin-bottom: 10px
        }

        .hotel-news span {
            display: inline-flex;
            align-items: center;
            font-weight: 400;
            color: #555
        }

        .hotel-news span .icon-font {
            font-size: 14px;
            color: #d0b316
        }

        .border-bot-0 {
            border-bottom: none !important
        }

        .flex-box {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap
        }

        .box-hidden {
            width: 100%;
            max-height: 88px;
            overflow-y: hidden
        }

        .box-hidden p {
            margin-bottom: 10px
        }

        .view-all-img {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
            position: absolute;
            text-align: center;
            bottom: 0;
            left: 0;
            z-index: 2;
            padding: 5px 0;
            color: #fff;
            background: -webkit-gradient(linear, left top, left bottom, from(transparent), to(rgba(0, 0, 0, 0.65)));
            background: -webkit-linear-gradient(top, transparent 0%, rgba(0, 0, 0, 0.65) 50%);
            background: -moz-linear-gradient(top, transparent 0%, rgba(0, 0, 0, 0.65) 50%);
            background: -ms-linear-gradient(top, transparent 0%, rgba(0, 0, 0, 0.65) 50%);
            background: -o-linear-gradient(top, transparent 0%, rgba(0, 0, 0, 0.65) 50%)
        }

        .view-all-img a {
            color: inherit;
            text-decoration: underline;
            padding-right: 5px;
            padding-left: 5px
        }

        .view-all-img a:hover {
            color: #d0b316
        }

        .view-all-img p {
            font-size: 11px;
            padding: 5px 15px 5px 10px;
            background-color: #d0b316;
            font-weight: 600
        }

        .head-trip {
            width: 100%;
            display: flex;
            align-items: flex-start;
            flex-wrap: wrap
        }

        .head-trip .title-info {
            width: calc(100% - 60px);
            padding-left: 15px
        }

        .title-info .title-h2 {
            margin-top: 10px;
            margin-bottom: 10px;
            text-align: left
        }

        .address {
            font-style: normal;
            text-align: left;
            color: #888
        }

        .address a {
            color: #888
        }

        .address a:hover {
            color: #d0b316
        }

        .price-trip-box {
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            align-items: center
        }

        .price-trip-box .wrap-tooltip {
            width: auto;
            flex-grow: 1;
            justify-content: flex-start;
            padding-left: 0;
            margin-bottom: 0;
            margin-top: 0
        }

        .price-trip-box>span {
            font-size: 12px;
            text-transform: uppercase;
            color: #d0b316;
            margin-left: auto;
            text-align: right
        }

        .price-trip-box>span strong {
            font-weight: 600;
            font-size: 16px
        }

        .price-trip-box del {
            font-size: 16px
        }

        .commitment {
            width: 100%;
            text-align: right;
            color: #888;
            font-weight: 600
        }

        .commitment .checkmark {
            color: #d0b316
        }

        .day-trip {
            position: relative;
            width: 52px;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            flex-shrink: 0
        }

        .day-trip span {
            position: absolute;
            text-align: center;
            font-size: 8px;
            text-transform: uppercase;
            color: #d0b316;
            font-weight: 500;
            line-height: 1
        }

        .day-trip span b {
            display: block;
            width: 100%;
            font-size: 20px;
            color: #d0b316
        }

        .team-name {
            text-align: center;
            font-family: 'Reenie Beanie', cursive;
            font-size: 35px
        }

        .team-mess {
            width: 80%;
            margin: 0 auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: flex-start
        }

        .team-mess p {
            font-size: 12px;
            text-align: center;
            padding-right: 15px;
            padding-left: 15px;
            font-weight: 500;
            line-height: 1.5;
            color: #666
        }

        .team-mess .link-st3 {
            margin: 15px auto 0
        }

        .team-quote {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: flex-start;
            width: 85%;
            margin: 15px auto
        }

        .team-quote>img {
            width: 70px;
            border-radius: 50%;
            display: inline-block;
            margin: 0 5px
        }

        .team-quote .lag-img {
            width: 90%;
            border-radius: 0;
            display: block;
            margin-right: auto;
            margin-left: auto
        }

        .team-quote .lag-img-st2 {
            width: 70%;
            max-width: 350px;
            border-radius: 0;
            margin-right: auto;
            margin-left: auto;
            display: block
        }

        .team-quote .team-name {
            width: 100%;
            margin-top: 10px;
            margin-bottom: 0;
            font-weight: normal
        }

        .call-info {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            width: 80%;
            margin: 15px auto 20px
        }

        .call-info span {
            display: inline-block;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-left: 5px;
            margin-right: 5px;
            margin-bottom: 10px
        }

        .call-info strong {
            font-size: 20px;
            color: #d0b316;
            margin-left: 5px;
            margin-right: 5px;
            margin-bottom: 10px
        }

        .call-info .btn-st2 {
            margin-left: 5px;
            margin-right: 5px;
            margin-bottom: 10px
        }

        .mg-top-0 {
            margin-top: 0 !important
        }

        .mg-bot-0 {
            margin-bottom: 0 !important
        }

        .mg-top-30 {
            margin-top: 30px
        }

        .pd-top-30 {
            padding-top: 30px
        }

        .heart-tour {
            cursor: pointer
        }

        .heart-tour>a {
            display: block;
            width: 100%;
            color: inherit;
            font-size: inherit
        }

        .heart-tour:hover .heart-empty {
            font-size: inherit
        }

        .heart-tour:hover .heart-empty:before {
            content: "\e915"
        }

        .heart-tour.active .heart-empty:before {
            content: "\e915"
        }

        .price {
            text-transform: uppercase;
            letter-spacing: 2px
        }

        .price strong {
            margin-left: 5px;
            margin-right: 5px
        }

        .container {
            width: 85%;
            display: flex;
            flex-wrap: wrap;
            align-items: flex-start;
            justify-content: center;
            margin: 0 auto
        }

        .col-xlg-12 {
            width: 100%;
            padding-left: 15px;
            padding-right: 15px;
            text-align: center
        }

        .col-xlg-6 {
            width: 50%;
            padding-left: 15px;
            padding-right: 15px;
            text-align: center
        }

        .col-xlg-4 {
            width: 33.333%;
            padding-left: 15px;
            padding-right: 15px;
            text-align: center
        }

        .col-xlg-8 {
            width: 66.66666%;
            padding-left: 15px;
            padding-right: 15px;
            text-align: center
        }

        .col-xlg-3 {
            width: 25%;
            padding-left: 15px;
            padding-right: 15px;
            text-align: center
        }

        .iti {
            display: inline-flex;
            background-color: #fff;
            border: 1px solid #aaa
        }

        .iti .iti__flag-container {
            width: 100%;
            height: 100%;
            padding: 0
        }

        .iti .iti__flag-container .iti__selected-flag:focus {
            outline: none
        }

        .iti .iti__flag-container .iti__country-list {
            width: 100%;
            min-width: 200px
        }

        .iti input[type="text"] {
            width: calc(100% - 46px);
            height: 100%;
            margin-left: auto;
            padding-left: 3px;
            z-index: 1;
            border: none
        }

        @media (min-width: 1200px) {
            .mg-top {
                margin-top: 80px
            }

            .mg-top-0-1200 {
                margin-top: 0
            }

            .mg-bottom {
                margin-bottom: 80px
            }

            .special-width-destop {
                width: 70%
            }

            .wrap-mini-intro-2.wrap-mini-intro {
                width: 70%
            }

            .no-overflow-destop {
                overflow: visible !important
            }
        }

        @media (min-width: 1025px) {
            .trip .content-trip .paragraph:hover {
                max-height: 400px
            }
        }

        @media (max-width: 1199px) {
            .btn-st2 {
                padding: 10px 5px;
                font-size: 11px
            }

            .container {
                width: 90%
            }

            .col-lg-12 {
                width: 100%
            }

            .col-lg-6 {
                width: 50%
            }

            .col-lg-4 {
                width: 33.333%
            }

            .col-lg-3 {
                width: 25%
            }

            .banner-top {
                height: 660px
            }

            .wrap-filter {
                width: 90%
            }

            .trip .btn-st2 {
                padding-left: 20px;
                padding-right: 20px
            }
        }

        @media (max-width: 1024px) {
            .bg-parallax {
                z-index: 0;
                background-attachment: scroll
            }

            .trip-st2 .right-trip .content-trip .paragraph {
                max-height: 50px
            }
        }

        @media (max-width: 991px) {
            .col-md-12 {
                width: 100%
            }

            .col-md-6 {
                width: 50%
            }

            .col-md-4 {
                width: 33.333%
            }

            .col-md-3 {
                width: 25%
            }

            .wrap-slide-st3 {
                padding-left: 15px;
                padding-right: 15px
            }

            .wrap-slide-st3 .gallery {
                width: 100%
            }

            .wrap-slide-st3 .item>div:last-child>div>span {
                font-size: 12px
            }

            .map-coo {
                width: 15px;
                height: 17px
            }

            .map-coo:hover {
                width: 17px;
                height: 19px
            }

            .wrap-slide-st1 .synch-carousels .nav-arrows {
                top: 100px
            }

            .wrap-slide-st1 .gallery .item .paragraph {
                width: 100%;
                font-size: 11px;
                margin-bottom: 15px;
                margin-top: 10px
            }

            .wrap-slide-st2 .synch-carousels .nav-arrows {
                display: none
            }

            .wrap-slide-st2 .gallery {
                width: 100%
            }

            .water-mask {
                font-size: 56px
            }

            .phone-box {
                margin-left: 5px;
                margin-right: 0
            }

            .phone-box .phone {
                font-size: 18px;
                padding: 10px 8px
            }

            .phone-box strong {
                display: none
            }

            .banner-top {
                height: 500px
            }

            .trip-st2 {
                flex-wrap: wrap
            }

            .trip-st2 .left-trip {
                width: 100%;
                padding-right: 0
            }

            .trip-st2 .left-trip .view-all-img {
                width: 100%
            }

            .trip-st2 .pd-sm-0 {
                padding-left: 0;
                width: 100%
            }

            .trip-st2 .pd-sm-0 .head-trip {
                margin-top: 15px
            }
        }

        @media (max-width: 767px) {
            .row-767 {
                margin-left: -7px;
                margin-right: -7px;
                display: block;
                width: 100%
            }

            .title-h1 {
                font-size: 22px
            }

            .title-h2-line {
                font-size: 20px
            }

            .container {
                width: 100%
            }

            .mg-left,
            .mg-right {
                margin-left: 10px;
                margin-right: 10px
            }

            .col-sm-12 {
                width: 100%
            }

            .col-sm-6 {
                width: 50%
            }

            .col-sm-4 {
                width: 33.333%
            }

            .col-sm-3 {
                width: 25%
            }

            .wrap-mini-intro {
                width: 80%
            }

            .wrap-mini-intro .paragraph {
                padding-left: 0;
                padding-right: 0
            }

            .wrap-mini-intro-st2 .team-name {
                font-weight: normal;
                font-family: 'Montserrat', Arial, sans-serif;
                font-size: 22px
            }

            .paragraph {
                padding-left: 15px;
                padding-right: 15px
            }

            .map-coo {
                width: 7px;
                height: 9px
            }

            .map-coo:hover {
                width: 9px;
                height: 10px
            }

            .wrap-slide-st1 .synch-carousels .nav-arrows {
                top: 80px
            }

            .wrap-slide-st1 .synch-carousels .nav-arrows button i {
                font-size: 20px
            }

            .wrap-slide-st1 .synch-carousels .nav-arrows .arrow-left {
                margin-left: 0
            }

            .wrap-slide-st1 .synch-carousels .nav-arrows .arrow-right {
                margin-right: 0
            }

            .wrap-slide-st1 .gallery {
                width: 88%
            }

            .wrap-slide-st1 .gallery .item .paragraph {
                padding-left: 0;
                padding-right: 0
            }

            .wrap-slide-st3 .item>div:first-child {
                padding-right: 10px
            }

            .wrap-slide-st3 .item>div:last-child {
                padding-left: 10px
            }

            .wrap-slide-st3 .item>div:last-child>p {
                letter-spacing: 1px
            }

            .wrap-slide-st3 .item>div:last-child>div {
                flex-wrap: wrap
            }

            .wrap-slide-st3 .item>div:last-child>div>a {
                margin-top: 5px
            }

            .water-mask {
                font-size: 34px
            }

            .wrap-filter {
                width: 100%
            }

            .trip-st2>a:first-child {
                width: 100%;
                padding-right: 0
            }

            .trip-st2 .heart-tour {
                top: 25px;
                right: 25px
            }

            .trip-st2 .right-trip {
                width: 100%;
                padding-left: 0;
                margin-top: 10px
            }

            .trip-st2 .right-trip .head-trip {
                margin-top: 0
            }

            .trip-st2 .right-trip .content-trip {
                padding-left: 0
            }

            .trip-st2 .right-trip .content-trip .paragraph {
                padding-right: 0;
                padding-left: 0
            }

            .team-quote .lag-img {
                width: 100%
            }

            .wrap-mini-intro-st2 .team-quote {
                width: 100%
            }

            .wrap-mini-intro-st2 .team-quote>img {
                width: 50px
            }

            .wrap-map-slide-st2 .wrap-slide-st4 .gallery .item>a .box-text h3,
            .wrap-map-slide-st2 .wrap-slide-st4 .gallery .item>.btn-modal-tour .box-text h3,
            .wrap-map-slide-st2 .wrap-slide-st4 .gallery .item>.box-tour-st3 .box-text h3 {
                font-size: 14px
            }
        }

        @media (max-width: 479px) {
            .col-xsm-12 {
                width: 100%
            }

            .col-xsm-6 {
                width: 50%
            }

            .col-xsm-4 {
                width: 33.333%
            }

            .col-xsm-3 {
                width: 25%
            }

            .wrap-mini-intro {
                width: 90%
            }

            .wrap-slide-st1 .synch-carousels .nav-arrows {
                top: 50px
            }

            .wrap-slide-st1 .gallery {
                width: 85%
            }

            .team-quote {
                width: 90%
            }

            .team-mess {
                width: 100%
            }

            .team-mess p {
                font-size: 12px
            }

            .call-info {
                width: 90%
            }

            .wrap-slide-st3 .item>div:first-child {
                padding-right: 5px
            }

            .wrap-slide-st3 .item>div:last-child {
                padding-left: 5px
            }

            .wrap-slide-st3 .item>div:last-child>p {
                font-size: 12px
            }

            .water-mask {
                font-size: 27px
            }

            .banner-top {
                height: 440px
            }

            .wrap-slide-st4 .synch-carousels .nav-arrows {
                top: 30%
            }

            .sub-slider-img {
                display: none
            }

            .trip-st2 .wrap-tooltip {
                padding-right: 0
            }

            .trip-st2 .pd-sm-0 .price-trip-box {
                justify-content: center
            }

            .trip-st2 .pd-sm-0 .price-trip-box .wrap-tooltip {
                width: 100%;
                justify-content: center
            }

            .trip-st2 .pd-sm-0 .price-trip-box>span {
                margin-left: 0;
                margin-top: 10px;
                width: 100%;
                text-align: center
            }

            .trip-st2 .pd-sm-0 .price-trip-box .commitment {
                text-align: center
            }

            .trip-st2 .pd-sm-0 .best-offer .col-xlg-12 {
                padding-right: 0;
                padding-left: 0
            }

            .count-img {
                display: none
            }

            .mobile-hidden {
                display: none !important
            }
        }

        @media (max-width: 375px) {
            .water-mask {
                font-size: 22px;
                margin-bottom: 15px;
                margin-top: 15px
            }

            .phone-box {
                margin-left: 0
            }

            .wrap-slide-st4 .synch-carousels .nav-arrows {
                top: 40%
            }

            .view-all-img {
                display: none
            }
        }

        @keyframes fadein {
            from {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        @-webkit-keyframes fadein {
            from {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        @-moz-keyframes fadein {
            from {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        @-ms-keyframes fadein {
            from {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        @keyframes lineAnimatedIn {
            from {
                width: 100%
            }

            to {
                width: 0
            }
        }

        @-webkit-keyframes lineAnimatedIn {
            from {
                width: 100%
            }

            to {
                width: 0
            }
        }

        @-moz-keyframes lineAnimatedIn {
            from {
                width: 100%
            }

            to {
                width: 0
            }
        }

        @-ms-keyframes lineAnimatedIn {
            from {
                width: 100%
            }

            to {
                width: 0
            }
        }

        @keyframes lineAnimatedOut {
            from {
                width: 0
            }

            to {
                width: 100%
            }
        }

        @-webkit-keyframes lineAnimatedOut {
            from {
                width: 0
            }

            to {
                width: 100%
            }
        }

        @-moz-keyframes lineAnimatedOut {
            from {
                width: 0
            }

            to {
                width: 100%
            }
        }

        @-ms-keyframes lineAnimatedOut {
            from {
                width: 0
            }

            to {
                width: 100%
            }
        }

        @keyframes moveToOut {
            from {
                transform: translateY(0);
                -moz-transform: translateY(0);
                -webkit-transform: translateY(0);
                -o-transform: translateY(0);
                -ms-transform: translateY(0)
            }

            to {
                transform: translateY(-600px);
                -moz-transform: translateY(-600px);
                -webkit-transform: translateY(-600px);
                -o-transform: translateY(-600px);
                -ms-transform: translateY(-600px)
            }
        }

        @-webkit-keyframes moveToOut {
            from {
                -webkit-transform: translateY(0)
            }

            to {
                -webkit-transform: translateY(-600px)
            }
        }

        @-moz-keyframes moveToOut {
            from {
                -moz-transform: translateY(0)
            }

            to {
                -moz-transform: translateY(-600px)
            }
        }

        @-ms-keyframes moveToOut {
            from {
                -ms-transform: translateY(0)
            }

            to {
                -ms-transform: translateY(-600px)
            }
        }

        .app>section,
        .app>header,
        .app>footer {
            padding-left: 50px
        }

        header {
            width: 100%;
            z-index: 101;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #fff
        }

        header .menu-wrap {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            height: 60px;
            margin-left: auto;
            margin-right: auto
        }

        header .menu-wrap .search-nav {
            width: 40%;
            max-width: 400px;
            display: flex;
            align-items: center
        }

        header .menu-wrap .search-nav .open-search-top {
            display: flex;
            align-items: center;
            text-transform: uppercase;
            letter-spacing: 1px
        }

        header .menu-wrap .search-nav .open-search-top .search {
            font-size: 16px;
            margin-right: 5px
        }

        header .menu-wrap .brand {
            width: 20%;
            max-height: 100%;
            max-width: 88px
        }

        header .menu-wrap .brand>a {
            display: block
        }

        header .menu-wrap .global-menu {
            width: 40%;
            height: 100%;
            max-width: 400px;
            display: flex;
            justify-content: space-between;
            align-items: stretch;
            padding-left: 20px
        }

        header .menu-wrap .global-menu .lang-top {
            display: flex;
            align-items: center;
            max-width: 33.33%
        }

        header .menu-wrap .global-menu .login-top {
            max-width: 33.33%
        }

        header .menu-wrap .global-menu .book-top {
            display: flex;
            align-items: center;
            max-width: 33.33%
        }

        .wrap-main-menu {
            height: 100vh;
            position: absolute;
            left: 0;
            top: 0;
            z-index: 20;
            border-right: 1px solid #dcdcdc
        }

        .wrap-main-menu:before {
            content: '';
            display: block;
            height: 60px;
            width: 100%;
            background-color: #f6f4f0
        }

        .wrap-main-menu .main-menu {
            height: calc(100% - 60px);
            overflow-x: hidden;
            overflow-y: auto;
            webkit-overflow-scrolling: touch;
            scrollbar-color: rgba(100, 100, 100, 0.5) transparent;
            scrollbar-width: thin
        }

        .wrap-main-menu .main-menu::-webkit-scrollbar {
            width: 3px;
            background-color: transparent
        }

        .wrap-main-menu .main-menu::-webkit-scrollbar-thumb {
            background-color: rgba(100, 100, 100, 0.5)
        }

        .wrap-main-menu .main-menu::-webkit-scrollbar-track {
            background-color: transparent
        }

        .main-menu {
            display: flex;
            flex-direction: column;
            width: unset;
            max-width: 50px;
            background-color: #f6f4f0;
            -webkit-transition: all .5s linear;
            -moz-transition: all .5s linear;
            -o-transition: all .5s linear;
            -ms-transition: all .5s linear;
            transition: all .5s linear
        }

        .main-menu>li a {
            display: flex;
            align-items: center;
            overflow-x: hidden;
            padding: 20px 20px 20px 0;
            text-transform: uppercase;
            color: #111;
            white-space: nowrap;
            width: 100%;
            -webkit-transition: all .2s linear;
            -moz-transition: all .2s linear;
            -o-transition: all .2s linear;
            -ms-transition: all .2s linear;
            transition: all .2s linear
        }

        .main-menu>li a>.icon-font {
            font-size: 30px;
            width: 50px;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            flex-shrink: 0
        }

        .main-menu>li a>.icon-font.icon-menu-4 {
            font-size: 30px
        }

        .main-menu>li a>.icon-font.image {
            font-size: 24px
        }

        .main-menu>li a>.icon-font.icon-menu-1,
        .main-menu>li a>.icon-font.icon-menu-3 {
            font-size: 30px
        }

        .main-menu>li a>.icon-font.icon-departure-01 {
            font-size: 32px
        }

        .main-menu>li a font {
            display: inline-flex;
            align-items: center;
            width: calc(100% - 50px)
        }

        .main-menu>li a font .select-arrow-thin {
            padding-left: 10px;
            margin-left: auto;
            font-size: 5px;
            line-height: 1
        }

        .main-menu>li:last-child {
            margin-top: auto
        }

        .line-top {
            border-top: 1px solid #dcdcdc
        }

        .follow-top {
            display: none;
            text-align: center
        }

        .follow-top font {
            text-transform: uppercase
        }

        .follow-top>ul {
            display: flex;
            justify-content: center
        }

        .follow-top>ul li a {
            padding: 20px 15px
        }

        .follow-top>ul li a .icon-font {
            width: unset
        }

        .btn-bar-toggle {
            position: absolute;
            top: 0;
            left: 0;
            z-index: 21;
            height: 60px;
            width: 50px;
            font-size: 24px
        }

        .btn-bar-toggle .search {
            display: none
        }

        .sub-menu {
            display: none
        }

        .sub-menu>li a {
            font-size: 12px;
            text-transform: uppercase;
            padding: 15px 20px 15px 50px
        }

        .sub-menu>li a font {
            width: 100%
        }

        .sub-menu-lv2 {
            display: none
        }

        .sub-menu-lv2>li a {
            text-transform: none;
            padding: 10px 20px 10px 60px
        }

        .login-top {
            position: relative;
            display: flex;
            align-items: center
        }

        .login-top .login-menu {
            display: none;
            z-index: 103
        }

        .login-top>a {
            font-size: 13px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            width: 100%
        }

        .login-top>a .user-regular {
            margin-right: 5px;
            font-size: 12px
        }

        .login-top>a:hover {
            color: #d0b316
        }

        .login-top>a .select-arrow-thin {
            font-size: 7px;
            padding-top: 3px;
            margin-left: 15px
        }

        .login-menu {
            position: absolute;
            top: 100%;
            left: 0;
            background-color: #fff;
            min-width: 130px;
            font-size: 11px
        }

        .login-menu li {
            border-bottom: 1px solid #eee
        }

        .login-menu li a {
            padding: 10px 15px;
            width: 100%
        }

        .login-menu li a:hover {
            background-color: #ececec;
            color: #555
        }

        .login-menu li:last-child {
            border-bottom: none
        }

        .lang-top {
            position: relative;
            display: flex;
            align-items: center
        }

        .lang-top .lang-menu {
            display: none;
            z-index: 103
        }

        .lang-top>a {
            font-size: 13px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            width: 100%
        }

        .lang-top>a font {
            margin-left: 5px
        }

        .lang-top>a:hover {
            color: #d0b316
        }

        .lang-top>a .select-arrow-thin {
            font-size: 7px;
            padding-top: 3px;
            margin-left: 15px
        }

        .lang-menu {
            position: absolute;
            top: 100%;
            left: 0;
            background-color: #fff;
            min-width: 130px;
            font-size: 11px
        }

        .lang-menu li {
            border-bottom: 1px solid #eee
        }

        .lang-menu li a {
            padding: 10px 15px;
            width: 100%
        }

        .lang-menu li a:hover {
            background-color: #ececec;
            color: #555
        }

        .lang-menu li:last-child {
            border-bottom: none
        }

        #search-nav-top {
            display: none;
            position: absolute;
            top: calc(100% - 1px);
            left: calc(50% + 25px);
            transform: translateX(-50%);
            -moz-transform: translateX(-50%);
            -webkit-transform: translateX(-50%);
            -o-transform: translateX(-50%);
            -ms-transform: translateX(-50%);
            width: calc(100% - 51px);
            z-index: 4;
            padding-bottom: 15px;
            padding-top: 15px;
            background-color: #111
        }

        .form-search-nav {
            display: flex;
            justify-content: space-between;
            align-items: stretch;
            width: 100%;
            max-width: 1260px;
            margin-left: auto;
            margin-right: auto;
            background-color: #fff
        }

        .form-search-nav input,
        .form-search-nav select {
            display: none
        }

        .form-search-nav>div {
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 10px;
            margin-top: 10px;
            margin-bottom: 10px;
            border-right: 1px solid #cecece
        }

        .form-search-nav .text>.icon-font:first-child {
            color: #888
        }

        .form-search-nav .search-nav-where {
            position: relative;
            width: 26%
        }

        .form-search-nav .search-nav-where .value {
            top: calc(100% + 10px)
        }

        .form-search-nav .search-nav-where .value .btn-value .map-marker {
            margin-right: 8px;
            font-size: 15px;
            color: #d0b316;
            -webkit-transition: all .25s linear;
            -moz-transition: all .25s linear;
            -o-transition: all .25s linear;
            -ms-transition: all .25s linear;
            transition: all .25s linear
        }

        .form-search-nav .search-nav-where .value .btn-value:hover .map-marker {
            color: #111
        }

        .form-search-nav .search-nav-exp {
            position: relative;
            width: 26%
        }

        .form-search-nav .search-nav-exp .value {
            top: calc(100% + 10px)
        }

        .form-search-nav .search-nav-exp .value .btn-value {
            padding-left: 15px
        }

        .form-search-nav .search-nav-exp .value .btn-value .icon-font:first-child {
            display: inline-block;
            margin-right: 8px;
            font-size: 22px;
            color: #d0b316;
            -webkit-transition: all .25s linear;
            -moz-transition: all .25s linear;
            -o-transition: all .25s linear;
            -ms-transition: all .25s linear;
            transition: all .25s linear
        }

        .form-search-nav .search-nav-exp .value .btn-value .icon-font:first-child:before {
            color: #d0b316
        }

        .form-search-nav .search-nav-exp .value .btn-value:hover .icon-font:first-child {
            color: #111
        }

        .form-search-nav .search-nav-exp .value .btn-value:hover .icon-font:first-child:before {
            color: #111
        }

        .form-search-nav .search-nav-days {
            position: relative;
            width: 14%
        }

        .form-search-nav .search-nav-days .text {
            display: flex;
            align-items: center;
            width: 100%;
            height: 20px
        }

        .form-search-nav .search-nav-days .value {
            top: calc(100% + 10px)
        }

        .form-search-nav .search-nav-price {
            position: relative;
            width: 24%;
            border-right: none
        }

        .form-search-nav .search-nav-price .value {
            top: calc(100% + 10px)
        }

        .form-search-nav .search-nav-price .value .btn-value {
            padding-left: 15px
        }

        .form-search-nav .booking-step-submit {
            width: 18%;
            border-right: none;
            padding: 0;
            margin: 0
        }

        .form-search-nav .booking-step-submit button {
            width: 100%;
            height: 100%;
            font-weight: 600
        }

        .form-search-nav .booking-step-submit button i {
            font-size: 16px;
            font-style: normal;
            margin-left: 10px
        }

        @media (max-width: 1199px) {
            .form-search-nav {
                flex-wrap: wrap;
                max-width: 700px
            }

            .form-search-nav .search-nav-where,
            .form-search-nav .search-nav-exp,
            .form-search-nav .search-nav-days,
            .form-search-nav .search-nav-price,
            .form-search-nav .booking-step-submit {
                width: 100%;
                border-right: none
            }

            .form-search-nav .booking-step-submit {
                height: 40px
            }
        }

        @media (max-width: 991px) {
            header .menu-wrap {
                justify-content: flex-start
            }

            header .menu-wrap .brand {
                position: absolute;
                left: 50%;
                z-index: 21;
                transform: translateX(-50%);
                -moz-transform: translateX(-50%);
                -webkit-transform: translateX(-50%);
                -o-transform: translateX(-50%);
                -ms-transform: translateX(-50%);
                max-width: 60px
            }

            header .menu-wrap .search-nav {
                width: unset
            }

            header .menu-wrap .global-menu {
                width: unset;
                padding-left: 0;
                margin-left: auto
            }

            header .menu-wrap .global-menu>li a {
                padding-right: 10px;
                padding-left: 10px
            }

            header .menu-wrap .global-menu>li.lang-top {
                max-width: unset
            }

            header .menu-wrap .global-menu>li.lang-top>a .select-arrow-thin {
                margin-left: 5px
            }

            header .menu-wrap .global-menu>li.login-top {
                max-width: unset
            }

            header .menu-wrap .global-menu>li.login-top>a .select-arrow-thin {
                margin-left: 5px
            }

            header .menu-wrap .global-menu>li.book-top {
                display: none
            }
        }

        @media (max-width: 767px) {
            .wrap-main-menu .main-menu {
                max-width: 0
            }

            .app>section,
            .app>footer {
                padding-left: 0
            }

            header .menu-wrap .search-nav {
                margin-left: 0;
                margin-right: 0
            }

            header .menu-wrap .search-nav .phone-box {
                margin-left: 0
            }

            header .menu-wrap .search-nav .open-search-top font {
                display: none
            }

            .login-top {
                position: static;
                text-transform: uppercase
            }

            .login-top>a font {
                display: none
            }

            .login-top>a .user-regular {
                font-size: 18px
            }

            .login-top .login-menu {
                left: unset;
                right: 0
            }

            .lang-top {
                position: static;
                text-transform: uppercase
            }

            .lang-top .lang-menu {
                left: unset;
                right: 0
            }

            #search-nav-top {
                left: 50%;
                width: 100%;
                padding-bottom: 0;
                padding-top: 0
            }
        }

        @media (max-width: 520px) {
            header {
                -webkit-transition: top 1s linear;
                -moz-transition: top 1s linear;
                -o-transition: top 1s linear;
                -ms-transition: top 1s linear;
                transition: top 1s linear
            }
        }

        @media (max-width: 479px) {
            .wrap-main-menu {
                width: 0;
                border-right: none;
                -webkit-transition: all .5s linear;
                -moz-transition: all .5s linear;
                -o-transition: all .5s linear;
                -ms-transition: all .5s linear;
                transition: all .5s linear
            }

            .wrap-main-menu .main-menu {
                max-width: unset;
                width: 100%
            }

            .login-top .login-menu {
                left: unset;
                right: 0
            }
        }

        footer {
            background-color: #111
        }

        footer>div:first-child {
            padding-top: 50px;
            padding-bottom: 30px;
            border-top: 1px solid #dcdcdc;
            background-color: #f6f4f0
        }

        footer>div:first-child .container .col-xlg-4:first-child {
            text-align: left
        }

        footer>div:first-child .container .col-xlg-4:first-child article:last-child h3 {
            display: inline-block;
            margin-right: 10px
        }

        footer>div:first-child .container .col-xlg-4:first-child article:last-child a {
            font-size: 18px;
            margin-left: 5px
        }

        footer>div:first-child .container .col-xlg-4:nth-child(2) {
            padding: 0;
            display: flex;
            flex-wrap: wrap
        }

        footer>div:first-child .container .col-xlg-4:nth-child(2) article {
            text-align: left
        }

        footer>div:first-child .container .col-xlg-4:nth-child(2) article li {
            margin-bottom: 15px
        }

        footer>div:first-child .container .col-xlg-4:nth-child(3) {
            text-align: left
        }

        footer>div:first-child .container .col-xlg-4:nth-child(3) .img-box-st2 {
            display: block
        }

        footer>div:first-child .container .col-xlg-4:nth-child(3) .paragraph {
            text-align: left;
            padding-right: 0;
            padding-left: 0
        }

        footer>div:first-child .container .col-xlg-4:nth-child(3) form {
            display: flex;
            flex-wrap: wrap;
            justify-content: flex-start
        }

        footer>div:first-child .container .col-xlg-4:nth-child(3) form>div {
            padding: 15px 10px 15px 0;
            text-align: left
        }

        footer>div:first-child .container .col-xlg-4:nth-child(3) form>div input,
        footer>div:first-child .container .col-xlg-4:nth-child(3) form>div textarea {
            width: 100%;
            padding-left: 0;
            border-bottom: 1px solid #111
        }

        footer>div:first-child .container .col-xlg-4:nth-child(3) form>div textarea {
            height: 55px
        }

        footer>div:first-child .container .col-xlg-4:nth-child(3) form p {
            margin-top: 15px;
            margin-bottom: 15px
        }

        footer>div:first-child .container .col-xlg-4:nth-child(3) form .btn-st2 {
            margin-bottom: 15px;
            margin-top: 15px
        }

        footer>div:first-child .brand-footer {
            margin: 30px 0 auto;
            width: 30%;
            max-width: 163px
        }

        footer>div:first-child p {
            font-weight: 300;
            line-height: 1.8
        }

        footer>div:first-child p span {
            font-weight: 400;
            margin-right: 5px
        }

        footer h3 {
            text-transform: uppercase;
            font-weight: 500;
            margin: 0;
            padding: 20px 0 15px;
            font-size: 11px;
            line-height: 1.5;
            color: #aaa
        }

        footer .brand-section {
            width: 100%;
            text-align: center
        }

        footer .brand-section h3 {
            width: 100%;
            text-align: center
        }

        footer .brand-section .brand-magazine {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center
        }

        footer .brand-section .brand-magazine li {
            margin-left: 15px;
            margin-right: 15px;
            margin-bottom: 10px
        }

        .tooltip-itine {
            position: relative;
        }

        .tooltip-itine .tooltip {
            display: inline-block;
            position: static;
            cursor: pointer;
        }

        .tooltip-itine .tooltip span {
            background-color: #d0b316;
            color: #fff;
        }

        .tooltip-itine .tooltip span:after {
            background-color: #d0b316;
            box-shadow: none;
        }

        footer .brand-section .brand-magazine li a {
            transition: none
        }

        footer .brand-section .brand-magazine li a {
            transition: none
        }

        footer .brand-section .brand-magazine li a.asta-bg {
            width: 130px;
            height: 58px;
            background: url(../images/footer-logo-asia-trust.jpg) 0 -71.5px;
            background-size: 1181px;
            display: inline-block;
            margin-right: 0
        }

        footer .brand-section .brand-magazine li a.family-bg {
            width: 145px;
            height: 58px;
            background: url(../images/footer-logo-asia-trust.jpg) -150px -71.5px;
            background-size: 1181px;
            display: inline-block;
            margin-right: 0
        }

        footer .brand-section .brand-magazine li a.adventure-travel-bg {
            width: 216px;
            height: 58px;
            background: url(../images/footer-logo-asia-trust.jpg) -310px -71.5px;
            background-size: 1181px;
            display: inline-block;
            margin-right: 0
        }

        footer .brand-section .brand-magazine li a.national-geographic-bg {
            width: 150px;
            height: 58px;
            background: url(../images/footer-logo-asia-trust.jpg) -548px -71.5px;
            background-size: 1181px;
            display: inline-block;
            margin-right: 0
        }

        footer .brand-section .brand-magazine li a.washington-post-bg {
            width: 168px;
            height: 58px;
            background: url(../images/footer-logo-asia-trust.jpg) -715px -71.5px;
            background-size: 1181px;
            display: inline-block;
            margin-right: 0
        }

        footer .brand-section .brand-magazine li a.tripadvisor-bg {
            width: 130px;
            height: 58px;
            background: url(../images/footer-logo-asia-trust.jpg) -900px -71.5px;
            background-size: 1181px;
            display: inline-block;
            margin-right: 0
        }

        footer .brand-section .brand-magazine li a.world-travel-bg {
            width: 135px;
            height: 58px;
            background: url(../images/footer-logo-asia-trust.jpg) -1045px -71.5px;
            background-size: 1181px;
            display: inline-block;
            margin-right: 0
        }

        footer .brand-section .brand-magazine li a.asta-bg:hover {
            width: 130px;
            height: 58px;
            background: url(../images/footer-logo-asia-trust.jpg) 0 0;
            background-size: 1181px;
            display: inline-block;
            margin-right: 0
        }

        footer .brand-section .brand-magazine li a.family-bg:hover {
            width: 145px;
            height: 58px;
            background: url(../images/footer-logo-asia-trust.jpg) -150px 0;
            background-size: 1181px;
            display: inline-block;
            margin-right: 0
        }

        footer .brand-section .brand-magazine li a.adventure-travel-bg:hover {
            width: 216px;
            height: 58px;
            background: url(../images/footer-logo-asia-trust.jpg) -310px 0;
            background-size: 1181px;
            display: inline-block;
            margin-right: 0
        }

        footer .brand-section .brand-magazine li a.national-geographic-bg:hover {
            width: 150px;
            height: 58px;
            background: url(../images/footer-logo-asia-trust.jpg) -548px 0;
            background-size: 1181px;
            display: inline-block;
            margin-right: 0
        }

        footer .brand-section .brand-magazine li a.washington-post-bg:hover {
            width: 168px;
            height: 58px;
            background: url(../images/footer-logo-asia-trust.jpg) -715px 0;
            background-size: 1181px;
            display: inline-block;
            margin-right: 0
        }

        footer .brand-section .brand-magazine li a.tripadvisor-bg:hover {
            width: 130px;
            height: 58px;
            background: url(../images/footer-logo-asia-trust.jpg) -900px 0;
            background-size: 1181px;
            display: inline-block;
            margin-right: 0
        }

        footer .brand-section .brand-magazine li a.world-travel-bg:hover {
            width: 135px;
            height: 58px;
            background: url(../images/footer-logo-asia-trust.jpg) -1045px 0;
            background-size: 1181px;
            display: inline-block;
            margin-right: 0
        }

        footer .brand-section .copy-right {
            font-size: 11px;
            font-weight: 300;
            padding-top: 15px;
            padding-bottom: 15px;
            color: #edce07
        }

        .btn-close {
            font-size: 40px;
            position: absolute;
            top: 10px;
            right: 15px
        }

        .modal-container {
            position: absolute;
            z-index: 200;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.4)
        }

        .modal {
            max-width: 500px;
            width: 95%;
            z-index: 201;
            position: absolute;
            top: -100vh;
            left: 50%;
            transform: translateX(-50%);
            -moz-transform: translateX(-50%);
            -webkit-transform: translateX(-50%);
            -o-transform: translateX(-50%);
            -ms-transform: translateX(-50%);
            -webkit-transition: all .5s linear;
            -moz-transition: all .5s linear;
            -o-transition: all .5s linear;
            -ms-transition: all .5s linear;
            transition: all .5s linear;
            background-color: #fff;
            padding: 30px 15px;
            text-align: center
        }

        .modal>h3 {
            font-size: 40px;
            font-weight: 300;
            margin: 0
        }

        .modal>p {
            margin-top: 10px;
            line-height: 1.5;
            margin-bottom: 10px;
            text-align: justify;
            padding: 0 15px
        }

        .modal button[type="submit"] {
            margin-top: 15px;
            padding-left: 30px;
            padding-right: 30px;
            height: 44px
        }

        .modal .call-us {
            margin-right: 15px;
            margin-left: 15px
        }

        .modal .call-us p {
            color: #d0b316;
            font-weight: 600
        }

        .modal .call-us p a {
            opacity: 1
        }

        .modal .call-us p a:hover {
            opacity: .8
        }

        .modal .ava-detail-modal {
            margin-top: 15px;
            padding-left: 15px;
            padding-right: 15px
        }

        .modal-2 {
            width: 95%;
            max-width: 820px;
            padding: 40px 30px;
            position: fixed;
            top: 3%;
            left: 50%;
            transform: translateX(-50%);
            -moz-transform: translateX(-50%);
            -webkit-transform: translateX(-50%);
            -o-transform: translateX(-50%);
            -ms-transform: translateX(-50%);
            z-index: 201;
            background-color: #fff
        }

        .modal-2 h3 {
            font-size: 16px;
            text-transform: uppercase
        }

        .modal-2 .modal-content {
            max-height: 84vh;
            overflow-y: auto;
            webkit-overflow-scrolling: touch;
            padding: 0 10px;
            scrollbar-color: transparent transparent;
            scrollbar-width: thin
        }

        .modal-2 .modal-content::-webkit-scrollbar {
            width: 3px;
            background-color: transparent
        }

        .modal-2 .modal-content::-webkit-scrollbar-thumb {
            background-color: transparent
        }

        .modal-2 .modal-content::-webkit-scrollbar-track {
            background-color: transparent
        }

        .modal-2 .modal-content:hover {
            scrollbar-color: rgba(227, 227, 227, 0.6) transparent
        }

        .modal-2 .modal-content:hover::-webkit-scrollbar-thumb {
            background-color: rgba(227, 227, 227, 0.6)
        }

        .modal-2 .experience-suplier {
            padding-bottom: 15px;
            padding-top: 15px;
            border-top: 1px dotted #dcdcdc
        }

        .modal-2 .accordion {
            padding-top: 0
        }

        .modal-2 .modal-tour-intro h4,
        .modal-2 .modal-tour-intro h5 {
            text-align: center;
            color: #555
        }

        .modal-2 .modal-tour-intro .paragraph-hide {
            max-height: 59px
        }

        .modal-2 .modal-tour-intro .paragraph-hide p {
            text-align: center
        }

        .modal-2 .modal-tour-intro .read-more-st1 {
            margin-top: 10px;
            margin-bottom: 10px
        }

        .ava-detail-modal {
            position: relative;
            max-height: 188px;
            overflow: hidden
        }

        .ava-detail-modal>div {
            width: 100%;
            max-width: 390px;
            position: absolute;
            z-index: 4;
            color: #fff;
            top: 40%;
            left: 50%;
            padding: 10px 20px;
            transform: translate(-50%, -50%);
            -moz-transform: translate(-50%, -50%);
            -webkit-transform: translate(-50%, -50%);
            -o-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%)
        }

        .ava-detail-modal>div h4 {
            font-size: 18px;
            text-transform: uppercase;
            font-weight: 600;
            text-shadow: 0 0 2px #000
        }

        .ava-detail-modal>div span {
            font-size: 16px;
            text-transform: uppercase
        }

        .ava-detail-modal img {
            -webkit-filter: brightness(60%);
            filter: brightness(60%);
            transform: translateY(-27px);
            -moz-transform: translateY(-27px);
            -webkit-transform: translateY(-27px);
            -o-transform: translateY(-27px);
            -ms-transform: translateY(-27px)
        }

        .modal-include-1 .modal-content .title-modal-include {
            display: flex;
            justify-content: space-between;
            align-items: flex-start
        }

        .modal-include-1 .modal-content .filter-box {
            width: 140px;
            flex-shrink: 0;
            box-shadow: none;
            border: 1px solid #eee
        }

        .modal-include-1 .modal-content .filter-box>span {
            font-weight: 600
        }

        .modal-include-1 .modal-content h3 {
            flex-grow: 1;
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden
        }

        .modal-include-1 .modal-content h3 .icon-font {
            margin-right: 5px;
            color: #d0b316
        }

        .modal-include-1 .modal-content h3 span {
            text-transform: none;
            font-size: 12px
        }

        .modal-include-1 .modal-content .head-pn span {
            font-weight: 600
        }

        .modal-include-2 {
            max-width: 610px;
            top: 10%
        }

        .modal-include-2 .title-modal-include {
            border-bottom: 1px dotted #dcdcdc;
            border-top: 1px dotted #dcdcdc;
            margin-top: 15px
        }

        .modal-include-2 .title-modal-include:first-child {
            border-top: none;
            margin-top: 0
        }

        .modal-include-2 h3 {
            margin-bottom: 15px
        }

        .modal-include-2 h3 .icon-font {
            margin-right: 5px;
            color: #d0b316
        }

        .modal-include-2 h3 span {
            text-transform: none;
            font-size: 12px
        }

        .modal-include-2 .modal-content>p {
            margin-top: 15px;
            line-height: 1.8
        }

        .modal-include-2 .modal-content article {
            margin-top: 15px
        }

        .modal-include-2 .modal-content article p {
            margin-top: 10px
        }

        .modal-include-2 .modal-content article .icon-font {
            margin-right: 5px;
            color: #d0b316
        }

        .modal-cr-like {
            max-width: 610px;
            top: 10%
        }

        .modal-cr-like .title-modal {
            border-bottom: 1px solid #dcdcdc
        }

        .modal-cr-like .title-modal h3 {
            margin-bottom: 15px
        }

        .modal-cr-like .title-modal h3 .icon-font {
            margin-right: 5px;
            font-size: 18px;
            color: #d0b316
        }

        .modal-cr-like article {
            margin-top: 15px
        }

        .modal-cr-like article p {
            margin-top: 10px;
            line-height: 1.4
        }

        .modal-cr-like article p .icon-font {
            margin-right: 5px;
            color: #d0b316;
            font-size: 14px;
            font-weight: 800
        }

        .modal-cr-overview .title-modal {
            border-bottom: 1px solid #dcdcdc
        }

        .modal-cr-overview .title-modal h3 {
            margin-bottom: 15px
        }

        .modal-cr-overview article {
            margin-top: 20px
        }

        .modal-cr-overview article h4 {
            width: 100%
        }

        .modal-cr-overview article .row {
            margin-right: -15px;
            margin-left: -15px;
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            align-items: flex-start
        }

        .modal-cr-overview article p {
            text-align: left;
            margin-bottom: 10px;
            line-height: 1.4;
            display: flex;
            align-items: center
        }

        .modal-cr-overview article p .icon-font {
            margin-right: 5px;
            color: #d0b316;
            font-size: 14px;
            font-weight: 800
        }

        .modal-cr-overview article p .icon-font-cr {
            margin-right: 5px
        }

        .modal-cr-info-room {
            max-width: 950px;
            width: 95%;
            padding: 40px 30px;
            position: fixed;
            top: 3%;
            left: 50%;
            transform: translateX(-50%);
            -moz-transform: translateX(-50%);
            -webkit-transform: translateX(-50%);
            -o-transform: translateX(-50%);
            -ms-transform: translateX(-50%);
            z-index: -3;
            background-color: #fff;
            visibility: hidden
        }

        .modal-cr-info-room h3 {
            font-size: 16px;
            text-transform: uppercase
        }

        .modal-cr-info-room .modal-content {
            max-height: 84vh;
            overflow-y: auto;
            webkit-overflow-scrolling: touch;
            padding: 0 10px;
            scrollbar-color: transparent transparent;
            scrollbar-width: thin
        }

        .modal-cr-info-room .modal-content::-webkit-scrollbar {
            width: 3px;
            background-color: transparent
        }

        .modal-cr-info-room .modal-content::-webkit-scrollbar-thumb {
            background-color: transparent
        }

        .modal-cr-info-room .modal-content::-webkit-scrollbar-track {
            background-color: transparent
        }

        .modal-cr-info-room .modal-content:hover {
            scrollbar-color: rgba(227, 227, 227, 0.6) transparent
        }

        .modal-cr-info-room .modal-content:hover::-webkit-scrollbar-thumb {
            background-color: rgba(227, 227, 227, 0.6)
        }

        .modal-cr-info-room .title-modal {
            width: 100%
        }

        .modal-cr-info-room .title-modal h3 .icon-font {
            font-size: 18px;
            color: #d0b316;
            margin-right: 5px
        }

        .modal-cr-info-room .wrap-slide-st5 {
            margin-bottom: 30px
        }

        .modal-cr-info-room .cr-info-room {
            overflow: hidden
        }

        .modal-cr-info-room .cr-info-room .row {
            display: flex;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px
        }

        .modal-cr-info-room .cr-info-room article {
            margin-bottom: 15px
        }

        .modal-cr-info-room .cr-info-room article h4,
        .modal-cr-info-room .cr-info-room article h5 {
            margin-top: 0;
            position: relative
        }

        .modal-cr-info-room .cr-info-room article h4 span,
        .modal-cr-info-room .cr-info-room article h5 span {
            background-color: #fff;
            padding-right: 5px;
            padding-left: 5px
        }

        .modal-cr-info-room .cr-info-room article h4:before,
        .modal-cr-info-room .cr-info-room article h5:before {
            content: '';
            display: block;
            position: absolute;
            left: 0;
            width: 100%;
            height: 1px;
            background-color: #d7d7d7;
            top: 50%;
            z-index: -1
        }

        .modal-cr-info-room .cr-info-room article h4 {
            font-size: 16px
        }

        .modal-cr-info-room .cr-info-room article>p {
            margin-top: 10px;
            text-align: left
        }

        .modal-cr-info-room .cr-info-room article .cr-content {
            margin-top: 10px
        }

        .modal-cr-info-room .cr-info-room article .row p.col-xlg-6 {
            text-align: left;
            margin-top: 15px;
            display: flex;
            align-items: center
        }

        .modal-cr-info-room .cr-info-room article .row p.col-xlg-6 .icon-font {
            margin-right: 5px;
            font-size: 14px;
            color: #d0b316
        }

        .modal-cr-info-room .cr-info-room article .row p.col-xlg-6 .icon-font-cr {
            margin-right: 5px
        }

        .select-st8 {
            height: 100%;
            background-position-y: 50%;
            background-color: #fff
        }

        .select-st8:focus {
            outline: none
        }

        .form-field {
            margin-top: 15px
        }

        .form-field input,
        .form-field textarea,
        .form-field .select-st8 {
            width: 100%;
            height: auto;
            border: 1px solid #aaa;
            font-size: 14px;
            vertical-align: middle;
            line-height: 1.5;
            color: #555;
            padding: 10px 8px;
            -webkit-transition: all .25s linear;
            -moz-transition: all .25s linear;
            -o-transition: all .25s linear;
            -ms-transition: all .25s linear;
            transition: all .25s linear
        }

        .form-field textarea {
            height: 210px
        }

        .phone-wrap {
            margin-top: 15px
        }

        .phone-wrap>div {
            height: 100%
        }

        .phone-wrap .iti {
            width: 100%;
            height: 100%
        }

        .check-field {
            margin-top: 15px;
            width: 100%
        }

        .check-field>div:first-child {
            display: flex;
            justify-content: flex-start;
            align-items: flex-start
        }

        .check-field>div:first-child input[type=checkbox] {
            height: auto
        }

        .check-field>div:first-child label {
            margin-left: 10px;
            display: flex;
            justify-content: flex-start;
            align-items: flex-start;
            cursor: pointer
        }

        .check-field>div:first-child label i {
            font-size: 14px
        }

        .check-field>div:first-child label span {
            text-align: left;
            margin-left: 5px
        }

        .check-field>.phone-wrap {
            margin-top: 15px;
            display: none;
            justify-content: center
        }

        .check-field>.phone-wrap>div {
            width: 70%
        }

        .check-field>.phone-wrap input {
            height: auto;
            font-size: 14px;
            vertical-align: middle;
            line-height: 1.5;
            color: #36312a;
            padding-bottom: 10px;
            padding-top: 10px;
            -webkit-transition: all .25s linear;
            -moz-transition: all .25s linear;
            -o-transition: all .25s linear;
            -ms-transition: all .25s linear;
            transition: all .25s linear
        }

        .half {
            width: 100%;
            display: flex;
            justify-content: space-between
        }

        .call-us {
            margin-top: 20px;
            padding: 15px 8px;
            background-color: #fff;
            border-bottom: 2px solid #dcdcdc;
            font-size: 12px;
            line-height: 1.5
        }

        .call-us div {
            font-size: 16px;
            font-weight: 500;
            margin-top: 10px
        }

        .call-us div:first-child {
            margin-top: 0
        }

        .call-us p a {
            color: #d0b316;
            opacity: .8
        }

        .call-us p a:hover {
            opacity: 1
        }

        #creat-trip-modal>p {
            text-align: center
        }

        #creat-trip-modal .form-field textarea {
            height: 140px
        }

        #creat-trip-modal button[type="submit"] {
            width: 45%;
            min-width: 95px
        }

        #creat-trip-modal .select-st1,
        #creat-trip-modal .select-st2,
        #creat-trip-modal .booking-st1,
        .select-st2-new {
            width: 100%;
            height: auto;
            border: 1px solid #aaa;
            font-size: 12px;
            vertical-align: middle;
            line-height: 1.5;
            color: #555;
            padding: 10px 8px;
            -webkit-transition: all .25s linear;
            -moz-transition: all .25s linear;
            -o-transition: all .25s linear;
            -ms-transition: all .25s linear;
            transition: all .25s linear;
            background-color: #fff;
            position: relative;
            text-align: left
        }

        #creat-trip-modal .select-st1 .text,
        #creat-trip-modal .select-st2 .text,
        #creat-trip-modal .booking-st1 .text,
        .select-st2-new .text {
            cursor: pointer
        }

        #creat-trip-modal .select-st1 .text>.icon-font:first-child,
        #creat-trip-modal .select-st2 .text>.icon-font:first-child,
        #creat-trip-modal .booking-st1 .text>.icon-font:first-child,
        .select-st2-new .text>.icon-font:first-child {
            color: #888
        }

        #creat-trip-modal .select-st1 .value-2,
        #creat-trip-modal .select-st2 .value-2,
        #creat-trip-modal .booking-st1 .value-2,
        .select-st2-new .value-2 {
            top: 100%
        }

        #creat-trip-modal .select-st1 .value,
        #creat-trip-modal .select-st2 .value,
        #creat-trip-modal .booking-st1 .value,
        .select-st2-new .value {
            top: 100%;
            z-index: 3
        }

        #creat-trip-modal .select-st1 .value>li>.btn-value,
        #creat-trip-modal .select-st2 .value>li>.btn-value,
        #creat-trip-modal .booking-st1 .value>li>.btn-value,
        .select-st2-new .value>li>.btn-value {
            padding: 10px
        }

        #creat-trip-modal .select-st1 .value>li>.btn-value>b,
        #creat-trip-modal .select-st2 .value>li>.btn-value>b,
        #creat-trip-modal .booking-st1 .value>li>.btn-value>b,
        .select-st2-new .value>li>.btn-value>b {
            text-overflow: clip;
            white-space: normal
        }

        #creat-trip-modal .select-st1 .value .btn-value .icon-font:first-child,
        #creat-trip-modal .select-st2 .value .btn-value .icon-font:first-child,
        #creat-trip-modal .booking-st1 .value .btn-value .icon-font:first-child,
        .select-st2-new .value .btn-value .icon-font:first-child {
            display: inline-block;
            margin-right: 8px;
            font-size: 15px;
            color: #d0b316;
            -webkit-transition: all .25s linear;
            -moz-transition: all .25s linear;
            -o-transition: all .25s linear;
            -ms-transition: all .25s linear;
            transition: all .25s linear
        }

        #creat-trip-modal .select-st1 .value .btn-value .icon-font.map-marker,
        #creat-trip-modal .select-st2 .value .btn-value .icon-font.map-marker,
        #creat-trip-modal .booking-st1 .value .btn-value .icon-font.map-marker {
            width: auto
        }

        #creat-trip-modal .select-st1 .value .btn-value:hover b,
        #creat-trip-modal .select-st2 .value .btn-value:hover b,
        #creat-trip-modal .booking-st1 .value .btn-value:hover b,
        .select-st2-new .value .btn-value:hover b {
            color: #d0b316
        }

        #creat-trip-modal .booking-step-when .value .btn-value .icon-font:first-child {
            font-size: 22px
        }

        #creat-trip-modal .booking-step-when .value .btn-value .icon-font:first-child:before {
            color: #d0b316
        }

        .select-slide select {
            display: none
        }

        .wrap-slide-modal .synch-carousels {
            box-shadow: none;
            margin-left: -3px;
            margin-right: -3px
        }

        .wrap-slide-modal .synch-carousels .nav-arrows {
            top: 50%;
            transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -webkit-transform: translateY(-50%);
            -o-transform: translateY(-50%);
            -ms-transform: translateY(-50%)
        }

        .wrap-slide-modal .synch-carousels .nav-arrows button {
            z-index: 5
        }

        .wrap-slide-modal .synch-carousels .nav-arrows button .select-arrow-thin {
            font-size: 16px;
            color: #888
        }

        .wrap-slide-modal .synch-carousels .nav-arrows button:hover .select-arrow-thin {
            color: #d0b316
        }

        .wrap-slide-modal .synch-carousels .nav-arrows .arrow-left {
            left: -28px
        }

        .wrap-slide-modal .synch-carousels .nav-arrows .arrow-right {
            right: -28px
        }

        .wrap-slide-modal .synch-carousels .wrap-dots {
            margin-top: 10px
        }

        .wrap-slide-modal .synch-carousels .wrap-dots li {
            width: 8px;
            height: 8px;
            background-color: #888
        }

        .wrap-slide-modal .synch-carousels .wrap-dots li.slick-active {
            background-color: #d0b316
        }

        .wrap-slide-modal .synch-carousels .wrap-dots button {
            font-size: 0
        }

        .wrap-slide-modal .item {
            padding: 0 3px
        }

        .wrap-slide-modal .item>a {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            position: relative
        }

        .wrap-slide-modal .item>a img {
            width: 100%;
            -webkit-filter: brightness(70%);
            filter: brightness(70%);
            -webkit-transition: all .5s linear;
            -moz-transition: all .5s linear;
            -o-transition: all .5s linear;
            -ms-transition: all .5s linear;
            transition: all .5s linear
        }

        .wrap-slide-modal .item>a b {
            display: flex;
            z-index: 4;
            justify-content: center;
            align-items: center;
            position: absolute;
            text-align: center;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            text-transform: uppercase;
            font-size: 12px;
            font-weight: 600;
            color: #fff;
            padding: 22px
        }

        .wrap-slide-modal .item>a:after {
            content: '';
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            border: 0px;
            border-radius: 0;
            -webkit-transition: all .25s linear;
            -moz-transition: all .25s linear;
            -o-transition: all .25s linear;
            -ms-transition: all .25s linear;
            transition: all .25s linear
        }

        .wrap-slide-modal .item>a:hover {
            opacity: 1
        }

        .wrap-slide-modal .item>a:hover img {
            opacity: 1
        }

        .wrap-slide-modal .item>a:hover:after {
            top: 10px;
            left: 10px;
            right: 10px;
            bottom: 10px;
            border-radius: 50% 50% 0px 50%;
            border: 1px solid rgba(207, 172, 27, 0.8)
        }

        .wrap-slide-modal .item>a.active:after {
            top: 10px;
            left: 10px;
            right: 10px;
            bottom: 10px;
            border-radius: 50% 50% 0px 50%;
            border: 1px solid rgba(207, 172, 27, 0.8);
            background-color: rgba(207, 172, 27, 0.8)
        }

        #search-cruise-modal>p {
            text-align: center
        }

        #search-cruise-modal .form-field textarea {
            height: 70px
        }

        #search-cruise-modal button[type="submit"] {
            width: 45%;
            min-width: 95px
        }

        #search-cruise-modal .select-st1,
        #search-cruise-modal .select-st2,
        #search-cruise-modal .booking-st1 {
            width: 100%;
            height: auto;
            border: 1px solid #aaa;
            font-size: 12px;
            vertical-align: middle;
            line-height: 1.5;
            color: #555;
            padding: 10px 8px;
            -webkit-transition: all .25s linear;
            -moz-transition: all .25s linear;
            -o-transition: all .25s linear;
            -ms-transition: all .25s linear;
            transition: all .25s linear;
            background-color: #fff;
            position: relative;
            text-align: left
        }

        #search-cruise-modal .select-st1 .text,
        #search-cruise-modal .select-st2 .text,
        #search-cruise-modal .booking-st1 .text {
            cursor: pointer
        }

        #search-cruise-modal .select-st1 .value-2,
        #search-cruise-modal .select-st2 .value-2,
        #search-cruise-modal .booking-st1 .value-2 {
            top: 100%;
            max-height: 245px;
            overflow-y: scroll;
            overflow-x: hidden
        }

        #search-cruise-modal .select-st1 .value,
        #search-cruise-modal .select-st2 .value,
        #search-cruise-modal .booking-st1 .value {
            top: 100%;
            z-index: 3
        }

        #search-cruise-modal .select-st1 .value>li>.btn-value,
        #search-cruise-modal .select-st2 .value>li>.btn-value,
        #search-cruise-modal .booking-st1 .value>li>.btn-value {
            padding: 10px
        }

        #search-cruise-modal .select-st1 .value>li>.btn-value>b,
        #search-cruise-modal .select-st2 .value>li>.btn-value>b,
        #search-cruise-modal .booking-st1 .value>li>.btn-value>b {
            text-overflow: clip;
            white-space: normal
        }

        #search-cruise-modal .select-st1 .value .btn-value .icon-font:first-child,
        #search-cruise-modal .select-st2 .value .btn-value .icon-font:first-child,
        #search-cruise-modal .booking-st1 .value .btn-value .icon-font:first-child {
            display: inline-block;
            width: 10%;
            margin-right: 8px;
            font-size: 15px;
            color: #d0b316;
            -webkit-transition: all .25s linear;
            -moz-transition: all .25s linear;
            -o-transition: all .25s linear;
            -ms-transition: all .25s linear;
            transition: all .25s linear
        }

        #search-cruise-modal .select-st1 .value .btn-value .icon-font.map-marker,
        #search-cruise-modal .select-st2 .value .btn-value .icon-font.map-marker,
        #search-cruise-modal .booking-st1 .value .btn-value .icon-font.map-marker {
            width: auto
        }

        #search-cruise-modal .select-st1 .value .btn-value:hover .icon-font:first-child,
        #search-cruise-modal .select-st2 .value .btn-value:hover .icon-font:first-child,
        #search-cruise-modal .booking-st1 .value .btn-value:hover .icon-font:first-child {
            color: #111
        }

        #search-cruise-modal .booking-st2,
        #search-cruise-modal .booking-st3 {
            border: 1px solid #aaa;
            position: relative
        }

        #search-cruise-modal .booking-st2 input,
        #search-cruise-modal .booking-st3 input {
            width: 100%;
            border: none
        }

        #search-cruise-modal .booking-st2 .text,
        #search-cruise-modal .booking-st3 .text {
            padding-left: 8px;
            padding-right: 8px
        }

        #search-cruise-modal .booking-st3 .box-mon-time {
            flex-wrap: wrap;
            min-width: 280px;
            max-height: 320px;
            overflow-y: auto;
            webkit-overflow-scrolling: touch
        }

        #search-cruise-modal .booking-st3 .box-mon-time>div {
            width: 100%;
            padding: 0
        }

        #search-cruise-modal .booking-st3 .box-mon-time>div:first-child {
            border-right: none;
            margin-bottom: 30px
        }

        #creat-detail-modal h3 {
            text-transform: uppercase
        }

        #creat-detail-modal>p {
            text-align: center;
            font-weight: 500;
            text-transform: uppercase
        }

        #creat-detail-modal .form-field textarea {
            height: 70px
        }

        #creat-detail-modal button[type="submit"] {
            width: 45%;
            min-width: 95px
        }

        #creat-detail-modal .select-st1,
        #creat-detail-modal .select-st2,
        #creat-detail-modal .booking-st1 {
            width: 100%;
            height: auto;
            border: 1px solid #aaa;
            font-size: 12px;
            vertical-align: middle;
            line-height: 1.5;
            color: #555;
            padding: 10px 8px;
            -webkit-transition: all .25s linear;
            -moz-transition: all .25s linear;
            -o-transition: all .25s linear;
            -ms-transition: all .25s linear;
            transition: all .25s linear;
            background-color: #fff;
            position: relative;
            text-align: left
        }

        #creat-detail-modal .select-st1 .text,
        #creat-detail-modal .select-st2 .text,
        #creat-detail-modal .booking-st1 .text {
            cursor: pointer
        }

        #creat-detail-modal .select-st1 .value-2,
        #creat-detail-modal .select-st2 .value-2,
        #creat-detail-modal .booking-st1 .value-2 {
            top: 100%
        }

        #creat-detail-modal .select-st1 .value,
        #creat-detail-modal .select-st2 .value,
        #creat-detail-modal .booking-st1 .value {
            top: 100%;
            z-index: 3
        }

        #creat-detail-modal .select-st1 .value>li>.btn-value,
        #creat-detail-modal .select-st2 .value>li>.btn-value,
        #creat-detail-modal .booking-st1 .value>li>.btn-value {
            padding: 10px
        }

        #creat-detail-modal .select-st1 .value>li>.btn-value>b,
        #creat-detail-modal .select-st2 .value>li>.btn-value>b,
        #creat-detail-modal .booking-st1 .value>li>.btn-value>b {
            text-overflow: clip;
            white-space: normal
        }

        #creat-detail-modal .select-st1 .value .btn-value .icon-font:first-child,
        #creat-detail-modal .select-st2 .value .btn-value .icon-font:first-child,
        #creat-detail-modal .booking-st1 .value .btn-value .icon-font:first-child {
            display: inline-block;
            width: 10%;
            margin-right: 8px;
            font-size: 15px;
            color: #d0b316;
            -webkit-transition: all .25s linear;
            -moz-transition: all .25s linear;
            -o-transition: all .25s linear;
            -ms-transition: all .25s linear;
            transition: all .25s linear
        }

        #creat-detail-modal .select-st1 .value .btn-value .icon-font.map-marker,
        #creat-detail-modal .select-st2 .value .btn-value .icon-font.map-marker,
        #creat-detail-modal .booking-st1 .value .btn-value .icon-font.map-marker {
            width: auto
        }

        #creat-detail-modal .select-st1 .value .btn-value:hover .icon-font:first-child,
        #creat-detail-modal .select-st2 .value .btn-value:hover .icon-font:first-child,
        #creat-detail-modal .booking-st1 .value .btn-value:hover .icon-font:first-child {
            color: #111
        }

        #creat-detail-modal .booking-st2 {
            border: 1px solid #aaa;
            position: relative
        }

        #creat-detail-modal .booking-st2 input {
            width: 100%;
            border: none
        }

        #creat-detail-modal .booking-st2 .text {
            padding-left: 8px;
            padding-right: 8px
        }

        .booking-st2 {
            display: flex;
            align-items: center;
            width: 100%;
            height: auto;
            background-color: #fff
        }

        .booking-st2 input {
            z-index: 5;
            opacity: 0
        }

        .booking-st2 .text {
            position: absolute;
            color: #555;
            text-align: left
        }

        .booking-st2 .text .icon-font {
            color: #888
        }

        .booking-st3 {
            display: flex;
            align-items: center;
            width: 100%;
            height: auto;
            background-color: #fff
        }

        .booking-st3 input {
            z-index: 5;
            opacity: 0;
            width: 100%
        }

        .booking-st3 .text {
            position: absolute;
            color: #555;
            text-align: left
        }

        .booking-st3 .text .icon-font {
            color: #888
        }

        .box-mon-time {
            position: absolute;
            left: 0;
            top: 100%;
            width: 100%;
            min-width: 500px;
            background-color: #fff;
            z-index: 3;
            border: 1px solid #dcdcdc;
            display: none;
            justify-content: center;
            align-items: center;
            padding: 15px 25px
        }

        .box-mon-time>div {
            width: 50%
        }

        .box-mon-time>div span {
            display: inline-block;
            width: 100%;
            padding-bottom: 10px;
            padding-top: 10px;
            border-bottom: 1px solid #dcdcdc;
            font-weight: 600;
            text-align: center;
            font-size: 16px
        }

        .box-mon-time>div:first-child {
            border-right: 1px solid #dcdcdc;
            padding-right: 25px
        }

        .box-mon-time>div:last-child {
            padding-left: 25px
        }

        .box-mon-time ul {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: flex-start;
            margin-right: -5px;
            margin-left: -8px
        }

        .box-mon-time ul li {
            padding-left: 5px;
            padding-right: 5px;
            width: 33.3333%;
            margin-top: 10px
        }

        .box-mon-time ul li button,
        .box-mon-time ul li a {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            line-height: 1.3;
            width: 100%;
            padding-bottom: 10px;
            padding-top: 10px
        }

        .box-mon-time ul li button:hover,
        .box-mon-time ul li a:hover {
            background-color: #d0b316;
            color: #111
        }

        .box-mon-time ul li button[disabled="disabled"],
        .box-mon-time ul li a[disabled="disabled"] {
            background-color: transparent !important;
            color: rgba(0, 0, 0, 0.4) !important;
            opacity: 1;
            cursor: auto !important
        }

        .box-mon-time ul li button.active,
        .box-mon-time ul li a.active {
            background-color: #d0b316
        }

        .wrap-gallery-img {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 230;
            display: none
        }

        .wrap-gallery-img .back-drop {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 80
        }

        .wrap-gallery-img .synch-carousels {
            position: relative;
            box-shadow: none;
            width: 100%;
            display: none;
            max-width: 800px;
            z-index: 90;
            margin-top: 30px;
            margin-left: auto;
            margin-right: auto
        }

        .wrap-gallery-img .synch-carousels .btn-close {
            color: #fff;
            z-index: 100
        }

        .wrap-gallery-img .synch-carousels .btn-close:hover {
            color: #d0b316
        }

        .wrap-gallery-img .synch-carousels .nav-arrows {
            top: 50%;
            transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -webkit-transform: translateY(-50%);
            -o-transform: translateY(-50%);
            -ms-transform: translateY(-50%)
        }

        .wrap-gallery-img .synch-carousels .nav-arrows button {
            background-color: #fff;
            border-color: #fff
        }

        .wrap-gallery-img .synch-carousels .nav-arrows button:hover {
            background-color: rgba(255, 255, 255, 0.5)
        }

        .wrap-gallery-img .synch-carousels .nav-arrows .arrow-left {
            transform: translateX(calc(-100% - 10px));
            -moz-transform: translateX(calc(-100% - 10px));
            -webkit-transform: translateX(calc(-100% - 10px));
            -o-transform: translateX(calc(-100% - 10px));
            -ms-transform: translateX(calc(-100% - 10px))
        }

        .wrap-gallery-img .synch-carousels .nav-arrows .arrow-right {
            transform: translateX(calc(100% + 10px));
            -moz-transform: translateX(calc(100% + 10px));
            -webkit-transform: translateX(calc(100% + 10px));
            -o-transform: translateX(calc(100% + 10px));
            -ms-transform: translateX(calc(100% + 10px))
        }

        .wrap-gallery-img .synch-carousels .item>p {
            width: 100%;
            padding: 5px 10px;
            position: absolute;
            text-align: center;
            left: 0;
            bottom: 0;
            color: #fff;
            background: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.01)), to(rgba(0, 0, 0, 0.85)));
            background: -webkit-linear-gradient(top, rgba(0, 0, 0, 0.01) 0%, rgba(0, 0, 0, 0.85) 90%);
            background: -moz-linear-gradient(top, rgba(0, 0, 0, 0.01) 0%, rgba(0, 0, 0, 0.85) 90%);
            background: -ms-linear-gradient(top, rgba(0, 0, 0, 0.01) 0%, rgba(0, 0, 0, 0.85) 90%);
            background: -o-linear-gradient(top, rgba(0, 0, 0, 0.01) 0%, rgba(0, 0, 0, 0.85) 90%)
        }

        .video-modal {
            position: fixed;
            z-index: 230;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%
        }

        .video-modal .back-drop {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 80
        }

        .video-modal .dialog {
            position: relative;
            z-index: 90;
            width: 95%;
            max-width: 700px;
            padding: 30px 15px 0 15px;
            background-color: #000;
            margin-top: 30px;
            margin-left: auto;
            margin-right: auto
        }

        .video-modal .dialog .btn-close {
            top: 0;
            right: 5px;
            color: #fff
        }

        .video-modal .dialog iframe {
            width: 100%
        }

        .modal-cr-desti .modal-content .desti {
            text-transform: uppercase;
            text-align: center
        }

        .modal-info-team {
            max-width: 631px
        }

        .modal-info-team .modal-content {
            background-image: url("../images/icon-experience.svg");
            background-repeat: no-repeat;
            background-size: 250px;
            background-position: top
        }

        .modal-info-team .modal-content>div {
            width: 100%
        }

        .modal-info-team .modal-team-title {
            width: 100%;
            max-width: 500px;
            text-align: center;
            margin: 0 auto;
            padding-bottom: 15px;
            margin-bottom: 15px;
            border-bottom: 1px dotted #dcdcdc;
            position: relative;
            z-index: 5
        }

        .modal-info-team .modal-team-title h3,
        .modal-info-team .modal-team-title h4 {
            margin-top: 0;
            margin-bottom: 0;
            text-transform: uppercase;
            font-size: 14px;
            font-weight: 600
        }

        .modal-info-team .modal-team-body {
            text-align: center;
            position: relative;
            z-index: 5
        }

        .modal-info-team .modal-team-body h3,
        .modal-info-team .modal-team-body h4 {
            font-family: 'Reenie Beanie', cursive;
            font-size: 30px;
            font-weight: 500;
            margin: 0 0 10px;
            text-transform: none
        }

        .modal-info-team .modal-team-body .paragraph-hide {
            max-height: 167px
        }

        .modal-info-team .modal-team-body .paragraph {
            padding-left: 0;
            padding-right: 0
        }

        .modal-info-team .modal-team-body .read-more-st1 {
            margin-bottom: 10px;
            margin-top: 10px
        }

        .modal-info-team .modal-team-body .watch-video {
            margin-top: 15px
        }

        .modal-tour-st2 .wrap-faq {
            width: 100%;
            padding-right: 0;
            padding-left: 0
        }

        .modal-tour-st2 .wrap-faq .order-day>a:first-child>.icon-font:first-child {
            width: 30px;
            display: inline-block;
            margin-right: 10px;
            font-size: 30px;
            color: #d0b316
        }

        .modal-tour-st2 .wrap-faq .order-day .panel .box-table {
            width: 100%;
            position: relative
        }

        .modal-tour-st2 .wrap-faq .order-day .panel .box-table>div {
            overflow-x: auto;
            webkit-overflow-scrolling: touch
        }

        .modal-tour-st2 .wrap-faq .order-day .panel .box-table table {
            width: 100%;
            min-width: 661px
        }

        .modal-tour-st2 .wrap-faq .order-day .panel .box-table table thead tr {
            background-color: #d0b316
        }

        .modal-tour-st2 .wrap-faq .order-day .panel .box-table table thead th:first-child {
            width: 19.6%
        }

        .modal-tour-st2 .wrap-faq .order-day .panel .box-table table thead th {
            width: 6.7%;
            padding-bottom: 10px;
            padding-top: 10px;
            color: #fff;
            text-align: center
        }

        .modal-tour-st2 .wrap-faq .order-day .panel .box-table table tbody tr {
            border-bottom: 1px solid #efede6
        }

        .modal-tour-st2 .wrap-faq .order-day .panel .box-table table tbody th {
            padding-bottom: 20px;
            padding-top: 20px;
            text-align: center
        }

        .modal-tour-st2 .wrap-faq .order-day .panel .box-table table tbody td {
            text-align: center
        }

        .modal-tour-st2 .wrap-faq .order-day .panel .box-table table tbody td .star-box {
            font-size: 10px;
            width: 100%;
            border-left: 1px solid #aaa
        }

        .modal-map {
            padding: 30px 15px
        }

        .modal-map .map-content {
            display: flex;
            flex-wrap: wrap
        }

        .modal-map .map-content .map-box-st3 {
            width: 70%;
            background-color: #555
        }

        .modal-map .map-content .info-map-box {
            width: 30%;
            padding-left: 10px
        }

        .modal-map .map-content .info-map-box .info-map-head {
            padding-bottom: 15px;
            border-bottom: 1px dotted #dcdcdc
        }

        .modal-map .map-content .info-map-box .info-map-head h2 {
            margin-top: 10px;
            margin-bottom: 0;
            font-size: 16px;
            font-weight: 600;
            color: #333;
            letter-spacing: 0
        }

        .modal-map .map-content .info-map-box .info-map-body {
            margin-bottom: 15px;
            max-height: 396px;
            overflow-y: auto;
            webkit-overflow-scrolling: touch;
            scrollbar-color: transparent transparent;
            scrollbar-width: thin
        }

        .modal-map .map-content .info-map-box .info-map-body::-webkit-scrollbar {
            width: 3px;
            background-color: transparent
        }

        .modal-map .map-content .info-map-box .info-map-body::-webkit-scrollbar-thumb {
            background-color: transparent
        }

        .modal-map .map-content .info-map-box .info-map-body::-webkit-scrollbar-track {
            background-color: transparent
        }

        .modal-map .map-content .info-map-box .info-map-body:hover {
            scrollbar-color: rgba(227, 227, 227, 0.6) transparent
        }

        .modal-map .map-content .info-map-box .info-map-body:hover::-webkit-scrollbar-thumb {
            background-color: rgba(227, 227, 227, 0.6)
        }

        .modal-map .map-content .info-map-box .info-map-body .list-tour-day>li {
            padding-left: 20px
        }

        .modal-map .map-content .info-map-box .info-map-body .list-tour-day>li:before {
            left: 6px;
            top: 15px
        }

        .modal-map .map-content .info-map-box .info-map-body .list-tour-day>li .wrap-icon-des {
            left: -20px
        }

        .modal-map .map-content .info-map-box .info-map-body .list-tour-day>li .wrap-icon-des .icon-des-1 {
            font-size: 16px
        }

        .modal-map .map-content .info-map-box .info-map-body .list-tour-day>li .wrap-icon-des .icon-des-4 {
            font-size: 14px
        }

        .modal-map .map-content .info-map-box .info-map-body .list-tour-day>li .wrap-icon-des .icon-des-2,
        .modal-map .map-content .info-map-box .info-map-body .list-tour-day>li .wrap-icon-des .icon-des-3 {
            font-size: 12px
        }

        .modal-map .map-content .info-map-box .info-map-body .list-tour-day .order-day>a:first-child {
            border-bottom: none;
            padding-bottom: 10px;
            padding-top: 10px
        }

        .modal-map .map-content .info-map-box .info-map-body .list-tour-day .order-day>a:first-child h3 {
            font-size: 11px;
            text-transform: none;
            margin-top: 0;
            margin-bottom: 0;
            line-height: 1.5
        }

        .modal-map .map-content .info-map-box .info-map-body .list-tour-day .order-day>a:first-child:hover h3 {
            color: #d0b316
        }

        .modal-map .map-content .info-map-box .info-map-body .list-tour-day .order-day>.active:first-child h3 {
            color: #d0b316
        }

        .modal-map .map-content .info-map-box .info-map-foot {
            padding-top: 15px;
            border-top: 1px dotted #dcdcdc
        }

        .modal-map .map-content .info-map-box .info-map-foot>div {
            display: flex;
            align-items: center;
            flex-wrap: wrap
        }

        .modal-map .map-content .info-map-box .info-map-foot>div>div {
            width: 50%
        }

        .modal-map .map-content .info-map-box .info-map-foot>div>div span {
            font-weight: 600;
            font-size: 14px
        }

        .modal-map .map-content .info-map-box .info-map-foot>div>div:first-child {
            color: #d0b316
        }

        .modal-map .map-content .info-map-box .info-map-foot>div>div:last-child {
            color: #e87055
        }

        .modal-map .map-content .info-map-box .info-map-foot .btn-st3 {
            width: 100%;
            height: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 10px
        }

        .map-day {
            color: #888;
            font-weight: 600;
            font-size: 10px;
            text-transform: uppercase
        }

        .modal-cruise-st2 .modal-content>.order-day>a:first-child {
            background-color: transparent;
            padding-left: 3px;
            padding-right: 3px
        }

        .modal-cruise-st2 .modal-content>.order-day>a:first-child>button .select-arrow-thin {
            font-size: 8px
        }

        .modal-cruise-st2 .modal-content>.order-day .wrap-inclusion>div h3 {
            font-size: 12px;
            font-weight: 400
        }

        .modal-cruise-st2 .head-modal-itine {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            border-bottom: 1px dotted #dcdcdc;
            padding-bottom: 15px
        }

        .modal-cruise-st2 .head-modal-itine h2 {
            flex-grow: 1;
            font-size: 16px;
            text-transform: uppercase
        }

        .modal-cruise-st2 .body-modal-itine .list-tour-day {
            margin-top: 15px;
            margin-bottom: 15px
        }

        .modal-cruise-st2 .body-modal-itine .list-tour-day li .order-day>a:first-child h3 {
            text-transform: none;
            font-size: 13px
        }

        .modal-cruise-st2 .body-modal-itine .list-tour-day li .order-day .panel .head-pn span {
            font-size: 12px
        }

        .modal-cruise-st2 .body-modal-itine .list-tour-day li .order-day .panel .head-pn>p {
            font-size: 12px
        }

        .modal-cruise-st2 .body-modal-itine .list-tour-day li .order-day .panel>div .paragraph {
            font-size: 12px
        }

        .modal-cruise-st2 .body-modal-itine .list-tour-day li .order-day .panel .experience-suplier .experience-content h4,
        .modal-cruise-st2 .body-modal-itine .list-tour-day li .order-day .panel .experience-suplier .experience-content h5 {
            font-size: 12px
        }

        @media (min-width: 992px) {
            .modal-2 .experience-suplier .experience-img {
                width: 27%
            }

            .modal-2 .experience-suplier .experience-content {
                width: 73%
            }
        }

        @media (max-width: 991px) {
            .wrap-gallery-img .synch-carousels .nav-arrows {
                top: calc(100% + 5px);
                transform: translateY(0);
                -moz-transform: translateY(0);
                -webkit-transform: translateY(0);
                -o-transform: translateY(0);
                -ms-transform: translateY(0)
            }

            .wrap-gallery-img .synch-carousels .nav-arrows .arrow-left {
                left: 50%
            }

            .wrap-gallery-img .synch-carousels .nav-arrows .arrow-right {
                right: 50%
            }
        }

        @media (max-width: 767px) {
            .modal-include-1 .modal-content .title-modal-include {
                flex-wrap: wrap
            }

            .modal-include-1 .modal-content .filter-box {
                width: 100%
            }

            .modal-include-1 .modal-content h3 {
                white-space: normal
            }

            .modal-include-2,
            .modal-cr-like {
                top: 3%
            }

            .form-field textarea {
                height: 120px
            }

            .modal-info-team {
                padding: 40px 15px
            }

            .modal-info-team .modal-content {
                padding: 0
            }

            .modal-map .map-content .map-box-st3 {
                width: 100%;
                min-height: 265px
            }

            .modal-map .map-content .info-map-box {
                width: 100%;
                padding-left: 0
            }

            .modal-map .map-content .info-map-box .info-map-head .map-day {
                margin-top: 10px
            }

            .modal-map .map-content .info-map-box .info-map-body {
                max-height: 200px
            }
        }

        @media (max-width: 479px) {
            .modal {
                top: 20px
            }

            .modal>h3 {
                font-size: 30px
            }

            .half {
                flex-wrap: wrap
            }

            .check-field>.phone-wrap>div {
                width: 100%
            }
        }

        @media (max-width: 375px) {
            .modal {
                padding: 15px 10px
            }

            .modal>p {
                padding: 0 5px
            }

            .modal .form-field {
                padding-right: 5px;
                padding-left: 5px
            }

            .modal .call-us {
                margin-right: 5px;
                margin-left: 5px
            }

            .modal .ava-detail-modal {
                padding-left: 5px;
                padding-right: 5px
            }

            .modal-info-team .modal-team-body .watch-video .link-st3 {
                font-size: 12px
            }
        }

        .wrap-title-banner-top {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            width: 100%;
            height: 100%;
            color: #fff;
            z-index: 2;
            background-color: rgba(0, 0, 0, 0.05);
            padding: 15px;
            padding-top: 11%
        }

        .wrap-title-banner-top h1,
        .wrap-title-banner-top h2 {
            font-family: 'Reenie Beanie', cursive;
            font-size: 70px;
            margin-top: 0;
            margin-bottom: 0;
            line-height: 1;
            font-weight: normal;
            text-align: center;
            z-index: 1
        }

        .wrap-title-banner-top h2 img {
            width: 80%;
        }

        .wrap-title-banner-top p {
            font-size: 16px;
            font-weight: 600;
            text-align: center;
            z-index: 1
        }

        #booking-widget-homepage {
            position: absolute;
            bottom: 40px;
            width: calc(100% - 51px);
            z-index: 8
        }

        #booking-widget-homepage .form-banner-top {
            display: flex;
            justify-content: space-between;
            align-items: stretch;
            width: 84%;
            max-width: 1264px;
            margin: 0 auto;
            background-color: #fff
        }

        #booking-widget-homepage .form-banner-top>div {
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 10px;
            margin-top: 15px;
            margin-bottom: 15px;
            border-right: 1px solid #cecece
        }

        #booking-widget-homepage .form-banner-top>div input {
            width: 90%;
            border: none;
            color: #333;
            cursor: pointer
        }

        #booking-widget-homepage .form-banner-top>div select {
            color: #333;
            width: 100%
        }

        #booking-widget-homepage .form-banner-top .text>.icon-font:first-child {
            color: #333
        }

        #booking-widget-homepage .form-banner-top .booking-step-where {
            position: relative;
            width: 23%
        }

        #booking-widget-homepage .form-banner-top .booking-step-where .value {
            top: calc(100% + 15px)
        }

        #booking-widget-homepage .form-banner-top .booking-step-where .value .btn-value .map-marker,
        #booking-widget-homepage .form-banner-top .booking-step-where .value .btn-value .icon-destination {
            margin-right: 8px;
            font-size: 15px;
            color: #d0b316;
            -webkit-transition: all .25s linear;
            -moz-transition: all .25s linear;
            -o-transition: all .25s linear;
            -ms-transition: all .25s linear;
            transition: all .25s linear
        }

        #booking-widget-homepage .form-banner-top .booking-step-where .value .btn-value:hover .map-marker,
        #booking-widget-homepage .form-banner-top .booking-step-where .value .btn-value:hover .icon-destination {
            color: #111
        }

        #booking-widget-homepage .form-banner-top .booking-step-when {
            position: relative;
            width: 23%
        }

        #booking-widget-homepage .form-banner-top .booking-step-when .value {
            top: calc(100% + 15px)
        }

        #booking-widget-homepage .form-banner-top .booking-step-when .value .btn-value {
            padding-left: 15px
        }

        #booking-widget-homepage .form-banner-top .booking-step-when .value .btn-value .icon-font:first-child {
            display: inline-block;
            margin-right: 8px;
            font-size: 22px;
            color: #d0b316;
            -webkit-transition: all .25s linear;
            -moz-transition: all .25s linear;
            -o-transition: all .25s linear;
            -ms-transition: all .25s linear;
            transition: all .25s linear
        }

        #booking-widget-homepage .form-banner-top .booking-step-when .value .btn-value .icon-font:first-child:before {
            color: #d0b316
        }

        #booking-widget-homepage .form-banner-top .booking-step-when .value .btn-value:hover b {
            color: #d0b316
        }

        #booking-widget-homepage .form-banner-top .booking-step-room {
            position: relative;
            width: 18%
        }

        #booking-widget-homepage .form-banner-top .booking-step-room .value-2 {
            top: calc(100% + 15px)
        }

        #booking-widget-homepage .form-banner-top .booking-step-promo {
            position: relative;
            width: 18%;
            border-right: none
        }

        #booking-widget-homepage .form-banner-top .booking-step-promo .value {
            top: calc(100% + 15px)
        }

        #booking-widget-homepage .form-banner-top .booking-step-promo .value .btn-value {
            padding-left: 15px
        }

        #booking-widget-homepage .form-banner-top .booking-step-submit {
            width: 18%;
            border-right: none;
            padding: 0;
            margin: 0;
            flex-grow: 1
        }

        #booking-widget-homepage .form-banner-top .booking-step-submit button {
            width: 100%;
            height: 100%
        }

        #booking-widget-homepage>button {
            display: none
        }

        .wrap-map-slide-st2 {
            margin-top: 30px;
            margin-bottom: 15px
        }

        .wrap-map-slide-st2 .wrap-slide-st4 .gallery .item>a .box-text h3 {
            font-size: 14px
        }

        .select-st1 select {
            position: absolute;
            visibility: hidden
        }

        .select-st2 select {
            position: absolute;
            visibility: hidden
        }

        .booking-st1 .text .icon-font {
            color: #333
        }

        .booking-st1 .text strong {
            font-weight: normal
        }

        .value-2 {
            width: 100%;
            position: absolute;
            left: 0;
            background-color: #fff;
            border: 1px solid #dcdcdc;
            display: none;
            z-index: 2
        }

        .value-2>div {
            padding: 10px 10px;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between
        }

        .value-2>div strong {
            font-size: 14px
        }

        .value-2>div span {
            text-align: center;
            font-size: 10px;
            padding-right: 3px;
            padding-left: 3px
        }

        .value-2>div button {
            width: 28px;
            height: 28px;
            border-radius: 50%;
            border: 1px solid #666;
            color: #666;
            display: flex;
            justify-content: center;
            align-items: center;
            line-height: 1;
            flex-shrink: 0
        }

        .value-2>div button:hover {
            border-color: #000;
            color: #000
        }

        .value-2>div .btn-up {
            font-size: 18px
        }

        .value-2>div .btn-down {
            padding-bottom: 5px;
            font-size: 24px
        }

        .value-2>div input {
            position: absolute;
            visibility: hidden
        }

        .value-2 .room-cruise {
            flex-wrap: wrap;
            justify-content: flex-start
        }

        .text {
            display: flex;
            align-items: center;
            width: 100%;
            height: 20px
        }

        .text>.icon-font:first-child {
            font-size: 16px;
            margin-right: 5px
        }

        .text b {
            font-weight: normal;
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden;
            flex-grow: 1
        }

        .text .select-arrow-thin {
            font-size: 8px;
            margin-left: auto
        }

        .value {
            max-height: 245px;
            width: 100%;
            position: absolute;
            left: 0;
            overflow-y: scroll;
            background-color: #fff;
            border: 1px solid #dcdcdc;
            display: none;
            z-index: 2
        }

        .value span {
            display: block;
            padding-top: 12px;
            padding-bottom: 6px;
            padding-left: 15px;
            color: #888;
            cursor: auto
        }

        .value>li .btn-value {
            padding: 10px 20px 10px 20px;
            width: 100%;
            display: flex;
            align-items: center
        }

        .value>li .btn-value>b {
            font-weight: normal;
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden;
            flex-grow: 1
        }

        .value>li .btn-value .checkmark {
            font-size: 15px;
            margin-left: auto;
            color: #d0b316;
            opacity: 0
        }

        .value>li .btn-value:hover {
            background-color: #ececec
        }

        .value>li .btn-value.checked .checkmark {
            opacity: 1
        }

        .best-support .container .col-xlg-3,
        .best-support .container .col-xlg-4 {
            position: relative;
            padding-bottom: 120px
        }

        .best-support article {
            position: absolute;
            bottom: 10px;
            z-index: 2;
            background-color: #fff;
            left: 0;
            padding-left: 15px;
            padding-right: 15px
        }

        .best-support article h3 {
            font-size: 14px;
            font-weight: 600
        }

        .best-support article .paragraph {
            line-height: 1.6;
            max-height: 31px;
            overflow-y: hidden;
            -webkit-transition: all 1.5s linear;
            -moz-transition: all 1.5s linear;
            -o-transition: all 1.5s linear;
            -ms-transition: all 1.5s linear;
            transition: all 1.5s linear
        }

        .best-support article:hover .paragraph {
            max-height: 500px
        }

        .wrap-map {
            padding-top: 15px
        }

        .wrap-map .map-home {
            width: 100%;
            position: relative
        }

        .wrap-map .map-home>.wrap-coo {
            position: absolute;
            z-index: 20;
            background-color: transparent;
            box-shadow: inset 0 0 100px 50px #fff;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0
        }

        .wrap-map .map-home>.wrap-coo .map-coo {
            background-image: url("../images/icon-des-yellow.svg")
        }

        .wrap-map .map-home>.wrap-coo .map-coo:hover {
            background-image: url("../images/icon-des-black.svg") !important
        }

        .wrap-map .map-home>.wrap-coo .map-coo-active {
            background-image: url("../images/icon-des-black.svg") !important
        }

        .wrap-map .map-home>.wrap-coo .map-coo-active .box-tooltip-map {
            visibility: visible;
            opacity: 1
        }

        .wrap-map .map-home>.wrap-coo #map-coo-1 {
            top: 39.4%;
            left: 58.5%
        }

        .wrap-map .map-home>.wrap-coo #map-coo-2 {
            top: 68.4%;
            left: 64%
        }

        .wrap-map .map-home>.wrap-coo #map-coo-3 {
            top: 42.8%;
            left: 63.8%
        }

        .wrap-map .map-home>.wrap-coo #map-coo-4 {
            top: 91.8%;
            left: 77%
        }

        .wrap-map .map-home>.wrap-coo #map-coo-5 {
            top: 27.5%;
            left: 62.3%
        }

        .wrap-map .map-home>.wrap-coo #map-coo-6 {
            top: 51%;
            left: 59.8%
        }

        .wrap-map .map-home>.wrap-coo #map-coo-7 {
            top: 34.8%;
            left: 55.1%
        }

        .wrap-map .map-home>.wrap-coo #map-coo-8 {
            top: 26%;
            left: 53.9%
        }

        .wrap-map .map-home>.wrap-coo #map-coo-9 {
            top: 21.4%;
            left: 54.8%
        }

        .wrap-map .map-home>.wrap-coo #map-coo-10 {
            top: 23.4%;
            left: 65.4%
        }

        .wrap-map-st2 {
            padding-top: 15px
        }

        .wrap-map-st2 .map-home {
            width: 100%;
            position: relative
        }

        .wrap-map-st2 .map-home>.wrap-coo {
            position: absolute;
            z-index: 2;
            background-color: transparent;
            box-shadow: inset 0 0 100px 50px #fff;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0
        }

        .wrap-map-st2 .map-home>.wrap-coo .map-coo {
            background-image: url("../images/icon-des-yellow.svg")
        }

        .wrap-map-st2 .map-home>.wrap-coo .map-coo-active {
            background-image: url("../images/icon-des-black.svg") !important
        }

        .wrap-map-st2 .map-home>.wrap-coo #map-coo-1 {
            top: 39.4%;
            left: 58.5%
        }

        .wrap-map-st2 .map-home>.wrap-coo #map-coo-2 {
            top: 68.4%;
            left: 64%
        }

        .wrap-map-st2 .map-home>.wrap-coo #map-coo-3 {
            top: 42.8%;
            left: 63.8%
        }

        .wrap-map-st2 .map-home>.wrap-coo #map-coo-4 {
            top: 91.8%;
            left: 77%
        }

        .wrap-map-st2 .map-home>.wrap-coo #map-coo-5 {
            top: 27.5%;
            left: 62.3%
        }

        .wrap-map-st2 .map-home>.wrap-coo #map-coo-6 {
            top: 51%;
            left: 59.8%
        }

        .wrap-map-st2 .map-home>.wrap-coo #map-coo-7 {
            top: 34.8%;
            left: 55.1%
        }

        .wrap-map-st2 .map-home>.wrap-coo #map-coo-8 {
            top: 26%;
            left: 53.9%
        }

        .wrap-map-st2 .map-home>.wrap-coo #map-coo-9 {
            top: 21.4%;
            left: 54.8%
        }

        .wrap-map-st2 .map-home>.wrap-coo #map-coo-10 {
            top: 23.4%;
            left: 65.4%
        }

        .wrap-map-st2 .map-home>.wrap-coo .tooltip>a>span {
            transform: translateX(-50%);
            -moz-transform: translateX(-50%);
            -webkit-transform: translateX(-50%);
            -o-transform: translateX(-50%);
            -ms-transform: translateX(-50%);
            left: 12px
        }

        .wrap-map-st2 .map-home .synch-carousels {
            width: 30%;
            height: 70%;
            min-height: 550px;
            position: absolute;
            top: 42px;
            left: 5%;
            z-index: 4;
            background-color: #fff
        }

        .wrap-map-st2 .map-home .synch-carousels .item {
            width: 100%;
            height: 100%;
            text-align: center
        }

        .wrap-map-st2 .map-home .synch-carousels .item>a:first-child {
            display: block;
            width: 100%
        }

        .wrap-map-st2 .map-home .synch-carousels .item article {
            width: 100%;
            padding-left: 15px;
            padding-right: 15px;
            text-align: center
        }

        .wrap-map-st2 .map-home .synch-carousels .item article h3 {
            font-size: 18px;
            text-transform: uppercase;
            font-weight: 500;
            color: #111
        }

        .wrap-map-st2 .map-home .synch-carousels .item article h4 {
            font-size: 28px;
            font-family: 'Reenie Beanie', cursive;
            font-weight: 400
        }

        .wrap-map-st2 .map-home .synch-carousels .item .link-st3 {
            margin-top: 15px
        }

        .wrap-map-st2 .map-home .synch-carousels .nav-arrows {
            bottom: 10px
        }

        .wrap-map-st2 .map-home .synch-carousels .nav-arrows button {
            bottom: 0
        }

        .wrap-map-st2 .map-home .synch-carousels .nav-arrows button .select-arrow-thin {
            font-size: 12px
        }

        .wrap-map-st2 .map-home .synch-carousels .nav-arrows .arrow-left {
            margin-left: 20%
        }

        .wrap-map-st2 .map-home .synch-carousels .nav-arrows .arrow-right {
            margin-right: 20%
        }

        .wrap-map-st2 .map-home .synch-carousels .nav-arrows span>strong {
            font-weight: 400
        }

        .map-home-mobile {
            display: none
        }

        .list-trip {
            background-color: #f6f4f0;
            padding-top: 30px
        }

        .list-trip .container {
            align-items: stretch
        }

        .list-trip .container .col-xlg-4 {
            margin-top: 15px;
            margin-bottom: 50px
        }

        .fab-box {
            position: fixed;
            z-index: 104
        }

        .fab-box a {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-transform: uppercase;
            color: #111;
            background-color: #edce07
        }

        .fab-box a span {
            font-size: 10px;
            font-weight: 600;
            letter-spacing: 0
        }

        .fab-box a .icon-font {
            font-size: 24px;
            margin-bottom: 5px
        }

        .section-blog .col-xlg-4 {
            margin-top: 15px;
            margin-bottom: 15px
        }

        .section-blog .col-xlg-4 a {
            display: block;
            position: relative;
            opacity: .8;
            width: 100%
        }

        .section-blog .col-xlg-4 a>div {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-end;
            padding-bottom: 15px;
            background: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.01)), to(rgba(0, 0, 0, 0.85)));
            background: -webkit-linear-gradient(top, rgba(0, 0, 0, 0.01) 0%, rgba(0, 0, 0, 0.85) 90%);
            background: -moz-linear-gradient(top, rgba(0, 0, 0, 0.01) 0%, rgba(0, 0, 0, 0.85) 90%);
            background: -ms-linear-gradient(top, rgba(0, 0, 0, 0.01) 0%, rgba(0, 0, 0, 0.85) 90%);
            background: -o-linear-gradient(top, rgba(0, 0, 0, 0.01) 0%, rgba(0, 0, 0, 0.85) 90%)
        }

        .section-blog .col-xlg-4 a:hover {
            opacity: 1
        }

        .section-blog .col-xlg-4 h3 {
            width: 100%;
            font-size: 16px;
            line-height: 1.3;
            font-weight: 500;
            color: #fff;
            padding-left: 15px;
            padding-right: 15px
        }

        .section-blog .col-xlg-4 .desti {
            color: #d0b316;
            font-weight: 500;
            text-transform: uppercase
        }

        .section-blog .view-more-wrap {
            margin-bottom: 0
        }

        .section-blog .view-more-wrap .link-st3 {
            margin-bottom: 0;
            margin-top: 30px
        }

        .section-blog-st2 .col-xlg-4 {
            margin-bottom: 15px;
            margin-top: 15px;
            text-align: left
        }

        .section-blog-st2 .col-xlg-4 .desti {
            text-transform: uppercase;
            margin-top: 10px
        }

        .section-blog-st2 .col-xlg-4 h3 {
            margin-top: 10px;
            font-size: 14px;
            font-weight: 600
        }

        .section-blog-st2 .col-xlg-4 p {
            line-height: 2;
            color: #333
        }

        @media (min-width: 992px) {
            .fab-box {
                top: 50%;
                right: -46px;
                transform: translateY(-50%);
                -moz-transform: translateY(-50%);
                -webkit-transform: translateY(-50%);
                -o-transform: translateY(-50%);
                -ms-transform: translateY(-50%);
                transition: right .3s linear;
                -webkit-transition: right .3s linear;
                -moz-transition: right .3s linear;
                -o-transition: right 0.3s linear;
                -ms-transition: right .3s linear
            }

            .fab-box a {
                overflow: hidden;
                width: 46px;
                height: 60px;
                transition: width .3s linear;
                -webkit-transition: width .3s linear;
                -moz-transition: width .3s linear;
                -o-transition: width .3s linear;
                -ms-transition: width .3s linear
            }

            .fab-box a span {
                transition: opacity .3s;
                -webkit-transition: opacity .3s;
                -moz-transition: opacity .3s;
                -o-transition: opacity .3s;
                -ms-transition: opacity .3s;
                opacity: 0
            }

            .fab-box:hover a {
                width: 70px
            }

            .fab-box:hover a span {
                opacity: 1
            }
        }

        @media (max-width: 1199px) {
            #booking-widget-homepage>.form-banner-top {
                display: none
            }

            #booking-widget-homepage>button {
                display: block;
                margin: 0 auto;
                max-width: 280px;
                width: 90%;
                height: 50px
            }

            .wrap-map {
                padding-bottom: 70px
            }

            .wrap-map-st2 {
                padding-bottom: 70px
            }

            .wrap-map-st2 .map-home .synch-carousels {
                width: 40%;
                left: 10px;
                top: 5px
            }
        }

        @media (max-width: 991px) {
            .fab-box {
                bottom: -50px;
                left: 50%;
                transform: translateX(-50%);
                -moz-transform: translateX(-50%);
                -webkit-transform: translateX(-50%);
                -o-transform: translateX(-50%);
                -ms-transform: translateX(-50%);
                display: flex;
                align-items: center;
                width: 100%;
                max-width: 500px;
                transition: bottom .3s linear;
                -webkit-transition: bottom .3s linear;
                -moz-transition: bottom .3s linear;
                -o-transition: bottom .3s linear;
                -ms-transition: bottom .3s linear
            }

            .fab-box a {
                width: 33.333%;
                height: 50px;
                border-right: 1px solid rgba(255, 255, 255, 0.8)
            }

            .fab-box a:last-child {
                border-right: none
            }

            .fab-box a .icon-font {
                font-size: 18px
            }

            .wrap-map-st2 .map-home .synch-carousels {
                min-height: auto;
                height: auto;
                padding-bottom: 15px
            }

            .wrap-map-st2 .map-home .synch-carousels .item article .paragraph {
                font-size: 11px
            }

            .wrap-map-st2 .map-home .synch-carousels .nav-arrows {
                position: relative;
                bottom: unset;
                top: unset;
                z-index: 4;
                margin-top: 15px
            }

            .wrap-map-st2 .map-home .synch-carousels .nav-arrows .arrow-left {
                margin-left: 10%
            }

            .wrap-map-st2 .map-home .synch-carousels .nav-arrows .arrow-right {
                margin-right: 10%
            }

            .wrap-map-st2 .map-home>.wrap-coo .tooltip>a>span {
                left: 8px
            }
        }

        @media (max-width: 767px) {
            .wrap-title-banner-top {
                padding-top: 22%
            }

            .wrap-title-banner-top h1,
            .wrap-title-banner-top h2 {
                font-size: 52px
            }

            .wrap-title-banner-top p {
                font-size: 14px
            }

            #booking-widget-homepage {
                width: 100%
            }

            .wrap-map {
                padding: 0;
                margin-top: 15px
            }

            .wrap-map .map-home {
                display: none
            }

            .map-home-mobile {
                display: block
            }

            .map-home-mobile .col-sm-6 {
                position: relative;
                margin-top: 10px;
                display: block
            }

            .map-home-mobile .col-sm-6:nth-child(odd) {
                padding-right: 7px;
                padding-left: 15px
            }

            .map-home-mobile .col-sm-6:nth-child(odd)>div:last-child {
                left: 15px
            }

            .map-home-mobile .col-sm-6:nth-child(odd):after {
                right: 7px;
                left: 15px
            }

            .map-home-mobile .col-sm-6:nth-child(even) {
                padding-left: 7px;
                padding-right: 15px
            }

            .map-home-mobile .col-sm-6:nth-child(even)>div:last-child {
                left: 7px
            }

            .map-home-mobile .col-sm-6:nth-child(even):after {
                left: 7px;
                right: 15px
            }

            .map-home-mobile .col-sm-6>div {
                width: 100%
            }

            .map-home-mobile .col-sm-6>div img {
                -webkit-filter: brightness(60%);
                filter: brightness(60%)
            }

            .map-home-mobile .col-sm-6>div:last-child {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                align-items: center;
                align-content: center;
                position: absolute;
                padding: 15px;
                height: 100%;
                width: calc(100% - 22px);
                z-index: 5;
                top: 0
            }

            .map-home-mobile .col-sm-6>div:last-child h3,
            .map-home-mobile .col-sm-6>div:last-child h4 {
                color: #fff;
                font-size: 12px;
                text-transform: uppercase;
                margin-top: 0;
                text-align: center;
                width: 100%
            }

            .map-home-mobile .col-sm-6:after {
                content: '';
                display: block;
                position: absolute;
                top: 0;
                bottom: 0;
                border: 0px;
                border-radius: 0;
                -webkit-transition: all .25s linear;
                -moz-transition: all .25s linear;
                -o-transition: all .25s linear;
                -ms-transition: all .25s linear;
                transition: all .25s linear
            }

            .map-home-mobile .col-sm-6.active-hover {
                opacity: 1
            }

            .map-home-mobile .col-sm-6.active-hover img {
                opacity: 1
            }

            .map-home-mobile .col-sm-6.active-hover:after {
                top: 15px;
                bottom: 15px;
                border-radius: 50% 50% 0px 50%;
                border: 1px solid rgba(207, 172, 27, 0.8)
            }

            .map-home-mobile .col-sm-6.active-hover:nth-child(odd):after {
                right: 22px;
                left: 30px
            }

            .map-home-mobile .col-sm-6.active-hover:nth-child(even):after {
                left: 22px;
                right: 30px
            }

            .section-blog .col-xlg-4 .paragraph {
                padding-left: 0;
                padding-right: 0
            }

            .best-support article .paragraph {
                padding-left: 0;
                padding-right: 0
            }

            .wrap-map-st2 {
                padding: 0;
                margin-top: 15px
            }

            .wrap-map-st2 .map-home>img {
                display: none
            }

            .wrap-map-st2 .map-home .synch-carousels {
                width: 65%;
                margin: 0 auto;
                top: 10%;
                left: 0;
                position: relative
            }

            .wrap-map-st2 .map-home .wrap-coo {
                display: none
            }
        }

        @media (max-width: 479px) {
            .wrap-title-banner-top {
                padding-top: 29%
            }

            .wrap-title-banner-top h1,
            .wrap-title-banner-top h2 {
                font-size: 46px
            }

            .best-support .col-xlg-3 {
                padding-bottom: 80px
            }

            .best-support article .paragraph {
                max-height: 27px
            }

            #booking-widget-homepage {
                bottom: 20px
            }

            .value-2>div span {
                padding-right: 6px;
                padding-left: 6px
            }

            .section-blog-st2 .wrap-slide-st8 {
                margin-bottom: 20px
            }

            .section-blog-st2 .view-more-wrap {
                margin-bottom: 0
            }

            .section-blog-st2 .view-more-wrap .link-st3 {
                margin-bottom: 0
            }

            .wrap-map-st2 .map-home .synch-carousels {
                width: 90%
            }
        }

        @media (max-width: 375px) {
            .wrap-title-banner-top {
                padding-top: 29%
            }

            .wrap-title-banner-top h1,
            .wrap-title-banner-top h2 {
                font-size: 48px
            }

            .wrap-title-banner-top p {
                font-size: 10px
            }

            .value-2>div span {
                padding-right: 3px;
                padding-left: 3px
            }
        }

        .banner-top-slider {
            position: relative;
            min-height: 230px;
            margin-top: 0
        }

        .banner-top-slider .wrap-title-banner-top {
            position: absolute;
            bottom: 98px;
            left: calc(50% + 25px);
            background-color: transparent;
            z-index: 3;
            height: unset;
            width: calc(100% - 51px);
            padding-top: 15px;
            transform: translateX(-50%);
            -moz-transform: translateX(-50%);
            -webkit-transform: translateX(-50%);
            -o-transform: translateX(-50%);
            -ms-transform: translateX(-50%)
        }

        .wrap-slide-st7 {
            width: 100%
        }

        .wrap-slide-st7 .synch-carousels {
            box-shadow: none
        }

        .wrap-slide-st7 .synch-carousels .item {
            height: 550px
        }

        .wrap-slide-st7 .synch-carousels .item>div {
            width: 100%;
            height: 100%;
            position: relative
        }

        .wrap-slide-st7 .synch-carousels .item>div span {
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            webkit-transform-origin: 100% 50%;
            -moz-transform-origin: 100% 50%;
            -o-transform-origin: 100% 50%;
            -ms-transform-origin: 100% 50%;
            transform-origin: 100% 50%;
            webkit-animation: imageAnimation 15s ease-in-out infinite 0s;
            -moz-animation: imageAnimation 15s ease-in-out infinite 0s;
            -o-animation: imageAnimation 15s ease-in-out infinite 0s;
            -ms-animation: imageAnimation 15s ease-in-out infinite 0s;
            animation: imageAnimation 15s ease-in-out infinite 0s;
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-filter: brightness(85%);
            filter: brightness(85%)
        }

        .wrap-slide-st7 .synch-carousels .slick-dots {
            position: absolute;
            z-index: 1;
            bottom: 15px;
            left: 50%;
            transform: translateX(-50%);
            -moz-transform: translateX(-50%);
            -webkit-transform: translateX(-50%);
            -o-transform: translateX(-50%);
            -ms-transform: translateX(-50%);
            margin: 0;
            padding: 0
        }

        .wrap-slide-st7 .synch-carousels .slick-dots li {
            display: inline-block;
            padding: 0;
            margin: 0 5px
        }

        .wrap-slide-st7 .synch-carousels .slick-dots li button {
            background: rgba(255, 255, 255, 0.6);
            border: none;
            padding: 0;
            margin: 0;
            font-size: 0;
            line-height: 100%;
            width: 10px;
            height: 10px;
            border-radius: 50%
        }

        .wrap-slide-st7 .synch-carousels .slick-dots li.slick-active button {
            background: #d0b316
        }

        .big-first-tour-box {
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
            margin-bottom: 40px
        }

        .big-first-tour-box .head-box {
            width: 100%;
            position: relative
        }

        .big-first-tour-box .head-box .img-box-st2 {
            display: block
        }

        .big-first-tour-box .head-box .count-day {
            top: 12px;
            left: 12px;
            background: rgba(208, 179, 22, 0.9);
            text-transform: capitalize;
            font-size: 14px
        }

        .big-first-tour-box .head-box .heart-tour {
            position: absolute;
            top: 10px;
            right: 10px;
            z-index: 2;
            font-size: 36px;
            color: rgba(255, 255, 255, 0.8)
        }

        .big-first-tour-box .head-box h2 {
            position: absolute;
            z-index: 5;
            bottom: 0;
            left: 0;
            font-weight: 500;
            width: 100%;
            padding: 25px 15px 25px 20px;
            background: -webkit-gradient(linear, left top, left bottom, from(transparent), to(rgba(0, 0, 0, 0.65)));
            background: -webkit-linear-gradient(top, transparent 0%, rgba(0, 0, 0, 0.9) 100%);
            background: -moz-linear-gradient(top, transparent 0%, rgba(0, 0, 0, 0.9) 100%);
            background: -ms-linear-gradient(top, transparent 0%, rgba(0, 0, 0, 0.9) 100%);
            background: -o-linear-gradient(top, transparent 0%, rgba(0, 0, 0, 0.9) 100%);
            margin: 0
        }

        .big-first-tour-box .head-box h2 a {
            color: #fff;
            max-width: calc(100% - 180px);
            font-size: 22px;
            letter-spacing: 2px;
            font-weight: 600
        }

        .big-first-tour-box .head-box h2 a:hover {
            color: #d0b316
        }

        .big-first-tour-box .head-box .expert-box {
            position: absolute;
            bottom: 5px;
            right: 15px;
            z-index: 9
        }

        .big-first-tour-box .body-box {
            background-color: #fff;
            padding: 20px 20px 0 20px;
            display: flex;
            flex-wrap: wrap;
            align-items: center
        }

        .big-first-tour-box .body-box .address-box {
            flex-grow: 1;
            padding-right: 30px;
            max-width: calc(100% - 260px)
        }

        .big-first-tour-box .body-box .btn-st2 {
            border: none;
            padding-left: 0;
            padding-right: 0;
            padding-top: 5px;
            padding-bottom: 5px;
            margin-left: auto;
            flex-shrink: 0
        }

        .big-first-tour-box .body-box .btn-st2 .icon-font {
            font-size: 24px;
            color: #d0b316;
            margin-right: 5px
        }

        .big-first-tour-box .body-box .btn-st2 .icon-font:before {
            color: inherit
        }

        .big-first-tour-box .body-box .btn-st2 b {
            width: 215px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            line-height: 1;
            color: #888;
            font-weight: normal
        }

        .big-first-tour-box .body-box .btn-st2 font {
            font-style: normal;
            font-size: 20px
        }

        .big-first-tour-box .body-box .btn-st2:hover {
            border-color: #d0b316;
            opacity: 1
        }

        .big-first-tour-box .body-box .btn-st2:hover b {
            color: inherit
        }

        .big-first-tour-box .body-box .btn-st2.tooltip {
            z-index: 17
        }

        .big-first-tour-box .body-box .btn-st2.tooltip>span {
            background-color: #d0b316;
            color: #fff
        }

        .big-first-tour-box .body-box .btn-st2.tooltip>span:after {
            background-color: #d0b316;
            box-shadow: none
        }

        .big-first-tour-box .body-box .paragraph {
            width: 100%;
            margin-top: 20px;
            text-align: left;
            padding: 0;
            margin-bottom: 0;
            padding-bottom: 15px;
            border-bottom: 1px dotted #dcdcdc
        }

        .big-first-tour-box .foot-trip {
            border-top: none;
            margin-top: 0;
            background-color: #fff;
            padding: 15px 20px 40px 20px
        }

        .big-first-tour-box .foot-trip .btn-st2 {
            border-color: #bbb;
            padding: 5px 25px
        }

        .big-first-tour-box .foot-trip .btn-st2 font {
            font-style: normal;
            font-size: 20px
        }

        .big-first-tour-box .foot-trip .btn-st2:hover {
            border-color: #d0b316
        }

        .expert-box {
            display: flex;
            justify-content: center;
            align-items: center
        }

        .expert-box>div:first-child h6 {
            margin-top: 0;
            font-size: 12px;
            color: #fff;
            font-weight: 600;
            text-align: right;
            text-transform: uppercase;
            margin-bottom: 5px
        }

        .expert-box>div:first-child p {
            color: #fff;
            text-align: right;
            font-size: 10px
        }

        .expert-box>div:last-child {
            padding: 8px;
            background-color: rgba(0, 0, 0, 0.25);
            border-radius: 50%
        }

        .expert-box>div:last-child img {
            max-width: 44px;
            border-radius: 50%
        }

        .address-box {
            display: flex
        }

        .address-box .address-avt {
            width: 50px;
            flex-shrink: 0
        }

        .address-box .address {
            font-size: 13px;
            line-height: 1.5;
            flex-grow: 1;
            padding-left: 10px;
            padding-top: 10px
        }

        .foot-trip {
            width: 100%;
            padding-top: 15px;
            margin-top: 15px;
            border-top: 1px dotted #dcdcdc;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap
        }

        .foot-trip .hand-picked {
            margin-bottom: 10px
        }

        .foot-trip>span {
            font-size: 12px;
            text-transform: uppercase;
            color: #d0b316;
            margin-left: auto;
            margin-right: 15px;
            margin-bottom: 10px
        }

        .foot-trip>span strong {
            font-weight: 600;
            font-size: 16px
        }

        .foot-trip .btn-st2 {
            color: #888;
            border-color: #bbb;
            border-radius: 999px;
            margin-bottom: 10px
        }

        .foot-trip .btn-st2:hover {
            color: #d0b316;
            border-color: #d0b316
        }

        .foot-trip .heart-tour {
            display: block;
            margin-bottom: 10px;
            margin-left: 15px
        }

        .foot-trip .heart-tour .icon-font {
            font-size: 36px;
            color: #AEAEAE
        }

        .foot-trip .heart-tour:hover .icon-font {
            color: #d0b316
        }

        .hand-picked {
            display: flex;
            justify-content: space-between;
            align-items: center
        }

        .hand-picked>span {
            margin-right: 15px;
            color: #888
        }

        .tooltip-handpick {
            padding: 5px;
            z-index: 10
        }

        .tooltip-handpick font {
            margin-left: 5px;
            color: #555
        }

        .tooltip-handpick>div {
            display: inline-flex;
            flex-wrap: wrap;
            justify-content: flex-start;
            align-items: center;
            position: relative
        }

        .tooltip-handpick>div:after {
            content: '';
            display: block;
            width: 100%;
            height: 1px;
            background-color: #c1aa80;
            margin-top: 8px;
            opacity: 0;
            position: absolute;
            bottom: -10px
        }

        .tooltip-handpick .icon-font {
            font-size: 18px;
            color: #c3bdbd
        }

        .tooltip-handpick>span {
            color: #fff;
            background-color: #d0b316
        }

        .tooltip-handpick>span:after {
            background-color: #d0b316
        }

        .tooltip-handpick:hover>div:after {
            opacity: 1
        }

        .tooltip-handpick:hover font,
        .tooltip-handpick:hover .icon-font {
            color: #d0b316
        }

        .wrap-slide-st8 {
            width: 100%
        }

        .wrap-slide-st8 .gallery {
            display: flex;
            flex-wrap: wrap;
            align-items: flex-start;
            justify-content: center
        }

        .section-bg {
            background-color: #e5e5e5;
            position: relative
        }

        .section-bg .bacground-box {
            z-index: 1
        }

        .section-bg>.container {
            position: relative;
            z-index: 3
        }

        .list-faq {
            padding-top: 30px;
            padding-bottom: 50px
        }

        .wrap-faq {
            width: 70%;
            margin-left: auto;
            margin-right: auto
        }

        .wrap-faq .order-day {
            background-color: #fff;
            margin-top: 15px
        }

        .wrap-faq .order-day>a:first-child,
        .wrap-faq .order-day>div:first-child {
            background-color: #fff;
            border-bottom: 1px solid #dcdcdc
        }

        .wrap-faq .order-day>a:first-child img,
        .wrap-faq .order-day>div:first-child img {
            width: 30px;
            margin-right: 10px
        }

        .wrap-faq .order-day>a:first-child .icon-faq,
        .wrap-faq .order-day>a:first-child .icon-info,
        .wrap-faq .order-day>div:first-child .icon-faq,
        .wrap-faq .order-day>div:first-child .icon-info {
            width: 30px;
            display: inline-block;
            margin-right: 10px;
            font-size: 30px;
            color: #ECECEC
        }

        .wrap-faq .order-day>a:first-child .night-img-cr,
        .wrap-faq .order-day>div:first-child .night-img-cr {
            flex-shrink: 0
        }

        .wrap-faq .order-day>a:first-child .night-img-cr img,
        .wrap-faq .order-day>div:first-child .night-img-cr img {
            width: 100%;
            margin-right: 0
        }

        .wrap-faq .order-day>a:first-child h3,
        .wrap-faq .order-day>a:first-child h2,
        .wrap-faq .order-day>div:first-child h3,
        .wrap-faq .order-day>div:first-child h2 {
            line-height: 1.4
        }

        .wrap-faq .order-day>a:first-child:hover,
        .wrap-faq .order-day>div:first-child:hover {
            background-color: #fbfaf9
        }

        .wrap-faq .order-day .panel .paragraph {
            margin-top: 0;
            margin-bottom: 0;
            padding: 10px;
            text-align: justify
        }

        .wrap-faq .order-day .panel .paragraph a {
            display: inline;
            color: #d0b316
        }

        .order-day {
            width: 100%;
            -webkit-transition: all .5s linear;
            -moz-transition: all .5s linear;
            -o-transition: all .5s linear;
            -ms-transition: all .5s linear;
            transition: all .5s linear
        }

        .order-day>a:first-child,
        .order-day>div:first-child {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            background-color: #f6f4f0;
            margin-top: 5px;
            padding: 10px;
            line-height: 1;
            color: #111
        }

        .order-day>a:first-child h3,
        .order-day>a:first-child h2,
        .order-day>div:first-child h3,
        .order-day>div:first-child h2 {
            font-weight: 600;
            font-size: 14px;
            flex-grow: 1
        }

        .order-day>a:first-child>button,
        .order-day>div:first-child>button {
            display: block
        }

        .order-day>a:first-child>button .select-arrow-thin,
        .order-day>div:first-child>button .select-arrow-thin {
            font-size: 10px
        }

        .order-day>a.active>button {
            -ms-transform: rotate(180deg);
            -webkit-transform: rotate(180deg);
            transform: rotate(180deg)
        }

        .order-day .old-style,
        .order-day>.old-style:first-child {
            display: flex;
            justify-content: flex-start;
            align-content: center;
            align-items: center;
            flex-wrap: wrap;
            width: 100%;
            margin-top: 5px;
            padding: 0 10px;
            line-height: 1
        }

        .order-day .old-style .icon-faq,
        .order-day>.old-style:first-child .icon-faq {
            width: 30px;
            display: inline-block;
            margin-right: 10px;
            font-size: 30px;
            color: #ECECEC
        }

        .order-day .old-style h3,
        .order-day>.old-style:first-child h3 {
            font-weight: 600;
            font-size: 14px;
            flex-grow: 1;
            width: calc(100% - 40px);
            line-height: 1.4
        }

        .order-day .old-style .paragraph,
        .order-day>.old-style:first-child .paragraph {
            padding-top: 10px;
            padding-right: 0;
            padding-left: 0;
            border-top: 1px solid #dcdcdc;
            text-align: left
        }

        .order-day .old-style .paragraph a,
        .order-day>.old-style:first-child .paragraph a {
            color: #d0b316
        }

        .wrap-faq .order-day>.old-style:first-child {
            background-color: inherit;
            border-bottom: none
        }

        .wrap-faq .order-day>.old-style:first-child:hover {
            background-color: inherit
        }

        .box-icon-img {
            display: block;
            width: 30px;
            margin-right: 10px
        }

        .box-icon-img img {
            width: 100%
        }

        .bacground-box {
            position: absolute;
            width: calc(100% - 50px);
            top: 0;
            left: 50px;
            height: 100%
        }

        .bacground-box>div {
            position: absolute;
            width: 45%;
            max-width: calc(50% - 315px)
        }

        .bacground-box .bg-left {
            bottom: 0;
            left: 0
        }

        .bacground-box .bg-right {
            bottom: 0;
            right: 0
        }

        .team-contact {
            width: 80%;
            margin: 30px auto 0
        }

        .team-contact form {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            max-width: 631px;
            margin: 0 auto;
            padding: 30px 40px;
            background-color: #fff;
            position: relative
        }

        .team-contact form .loading-modal img {
            margin-top: 0
        }

        .team-contact form .btn-st3 {
            margin-top: 15px;
            padding-left: 30px;
            padding-right: 30px;
            height: 44px;
            width: calc(100% - 30px)
        }

        .team-contact .form-field>div {
            width: 100%;
            margin-bottom: 10px;
            text-align: left
        }

        .team-contact .form-field>div span {
            color: red
        }

        .loading-modal {
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.8);
            z-index: 101;
            padding: 30px
        }

        .loading-modal img {
            max-height: 100%;
            margin-top: 316px
        }

        .parameter-box {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 30px
        }

        .parameter-box>div {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            padding-right: 15px;
            padding-left: 15px
        }

        .parameter-box>div b {
            width: 100%;
            text-align: center;
            color: #d0b316;
            font-size: 40px
        }

        .parameter-box>div span {
            text-transform: uppercase;
            font-size: 11px;
            text-align: center
        }

        .crowd-container {
            width: 100%;
            margin-bottom: 30px
        }

        .row-crowd {
            display: flex;
            display: none
        }

        .row-crowd:first-child,
        .row-crowd:nth-child(2) {
            display: flex
        }

        .row-crowd .crowd-box {
            flex-grow: 1;
            padding-left: 1px;
            padding-right: 1px;
            margin-top: 2px;
            max-height: 180px;
            overflow: hidden;
            position: relative;
            opacity: 1;
            display: inline-flex;
            align-items: center
        }

        .row-crowd .crowd-box .box-img {
            width: 100%;
            -webkit-transition: all .3s linear;
            -moz-transition: all .3s linear;
            -o-transition: all .3s linear;
            -ms-transition: all .3s linear;
            transition: all .3s linear
        }

        .row-crowd .crowd-box .external-link {
            position: absolute;
            z-index: 5;
            color: #fff;
            top: 5px;
            right: 5px;
            font-size: 16px;
            display: none
        }

        .row-crowd .crowd-box>div:last-child {
            position: absolute;
            z-index: 5;
            color: #fff;
            bottom: 5px;
            left: 5px
        }

        .row-crowd .crowd-box>div:last-child .asiatours-black {
            font-size: 16px
        }

        .row-crowd .crowd-box>div:last-child font {
            display: none
        }

        .row-crowd .crowd-box:hover .box-img {
            transform: scale(1.1);
            -moz-transform: scale(1.1);
            -webkit-transform: scale(1.1);
            -o-transform: scale(1.1);
            -ms-transform: scale(1.1);
            -webkit-filter: brightness(70%);
            filter: brightness(70%)
        }

        .row-crowd .crowd-box:hover .external-link {
            display: block
        }

        .row-crowd .crowd-box:hover>div:last-child font {
            display: inline
        }

        .pop-up-foot {
            position: fixed;
            z-index: 219;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: rgba(10, 10, 10, 0.8);
            padding-top: 0px;
            padding-bottom: 0px
        }

        .pop-up-foot .paragraph {
            color: #fff;
            padding-left: 15px;
            padding-right: 15px;
            text-align: left;
            font-size: 10px
        }

        .pop-up-foot .btn-close-st2 {
            position: absolute;
            top: 0;
            right: 20px;
            z-index: 8
        }

        .btn-close {
            z-index: 50
        }

        .opacity-background {
            position: relative
        }

        .btn-close-st2 {
            font-size: 32px;
            color: #fff
        }

        .att-box {
            width: 100%
        }

        .att {
            display: flex;
            align-items: center;
            margin-top: 10px
        }

        .att h5 {
            flex-grow: 1;
            margin: 0;
            padding-right: 5px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            text-align: left;
            font-weight: 600;
            font-size: 14px
        }

        .att .arrow-radius {
            width: 24px;
            height: 24px;
            flex-shrink: 0;
            -ms-transform: rotate(-90deg);
            -webkit-transform: rotate(-90deg);
            transform: rotate(-90deg);
            border-color: #888
        }

        .att .arrow-radius .select-arrow-thin {
            font-size: 6px;
            color: #888;
            -webkit-transition: all .25s linear;
            -moz-transition: all .25s linear;
            -o-transition: all .25s linear;
            -ms-transition: all .25s linear;
            transition: all .25s linear
        }

        .att:hover .arrow-radius {
            border-color: #d0b316;
            background-color: #d0b316
        }

        .att:hover .arrow-radius .select-arrow-thin {
            color: #fff
        }

        .box-hidden-st3 .paragraph {
            text-align: left
        }

        .box-hidden-st3 .link-st3 {
            color: #aaa;
            margin-left: 10px
        }

        .box-hidden-st3 .link-st3:after {
            background-color: #aaa
        }

        .box-hidden-st3 .link-st3:hover {
            color: #d0b316
        }

        .box-hidden-st3 .link-st3:hover:after {
            background-color: #d0b316
        }

        .box-hidden-st3 .text-hidden {
            display: none
        }

        @media (max-width: 1351px) {
            .tooltip-handpick {
                padding: 5px
            }

            .row-crowd .crowd-box {
                max-height: 160px
            }
        }

        @media (max-width: 1199px) {
            .foot-trip {
                justify-content: center
            }

            .foot-trip .btn-st2 {
                margin-left: 15px;
                padding-left: 10px;
                padding-right: 10px
            }

            .foot-trip>span {
                margin-left: 15px
            }

            .section-bg .bacground-box {
                display: none
            }
        }

        @media (max-width: 991px) {
            .foot-trip .hand-picked {
                display: none
            }

            .wrap-slide-st8 {
                margin-bottom: 50px
            }

            .wrap-slide-st8 .gallery .item {
                margin-bottom: 30px
            }

            .wrap-slide-st8 .wrap-dots li {
                background-color: #888;
                width: 9px;
                height: 9px;
            }

            .wrap-slide-st8 .wrap-dots li.slick-active {
                background-color: #d0b316;
                width: 10px;
                height: 10px;
            }

            .wrap-slide-st8 .wrap-dots button {
                color: rgba(255, 255, 255, 0);
                width: 10px;
                height: 10px;
            }

            .row-crowd:nth-child(3) {
                display: flex
            }

            .row-crowd .crowd-box {
                max-height: 230px
            }
        }

        @media (max-width: 767px) {
            .banner-top-slider .wrap-title-banner-top {
                left: 50%;
                width: 100%
            }

            .banner-top-slider #booking-widget-homepage {
                bottom: 45px
            }

            .wrap-slide-st7 .synch-carousels .item {
                height: 350px
            }

            .wrap-slide-st7 .synch-carousels .slick-dots,
            .wrap-slide-st10 .synch-carousels .slick-dots {
                bottom: 15px
            }

            .big-first-tour-box .head-box .count-day {
                top: 5px;
                left: 5px;
                font-size: 10px
            }

            .big-first-tour-box .head-box .heart-tour {
                top: 5px;
                right: 5px;
                font-size: 26px
            }

            .big-first-tour-box .head-box h2 {
                padding-top: 10px;
                padding-bottom: 10px
            }

            .big-first-tour-box .head-box h2 a {
                font-size: 16px;
                text-align: center;
                max-width: unset;
                font-weight: 600
            }

            .big-first-tour-box .head-box .expert-box {
                display: none
            }

            .big-first-tour-box .body-box {
                padding-left: 15px;
                padding-right: 15px;
                justify-content: center
            }

            .big-first-tour-box .body-box .address-box {
                padding-right: 0;
                max-width: unset;
                width: 100%;
                order: 1
            }

            .big-first-tour-box .body-box .btn-st2 {
                order: 3;
                margin-left: unset;
                margin-top: 15px
            }

            .big-first-tour-box .body-box .paragraph {
                order: 2;
                text-align: center
            }

            .big-first-tour-box .foot-trip .btn-st2 {
                padding-left: 15px;
                padding-right: 15px
            }

            .address-box .address {
                font-size: 12px
            }

            .team-contact form {
                padding: 15px 20px
            }

            .parameter-box {
                flex-wrap: wrap
            }

            .parameter-box>div {
                width: 50%;
                margin-bottom: 15px
            }

            .row-crowd .crowd-box {
                max-height: 140px
            }

            .modal-2 {
                padding: 20px 15px
            }
        }

        @media (max-width: 479px) {
            .foot-trip>span {
                width: 100%;
                margin-left: 0;
                margin-right: 0;
                text-align: center
            }

            .foot-trip .btn-st2 {
                margin-left: 0;
                margin-bottom: 0
            }

            .foot-trip .heart-tour {
                margin-bottom: 0
            }

            .hand-picked {
                flex-wrap: wrap
            }

            .hand-picked>span {
                display: block;
                margin-right: 0;
                width: 100%;
                margin-bottom: 10px;
                text-align: center
            }

            .hand-picked>div {
                display: flex;
                align-items: center;
                flex-wrap: wrap
            }

            .hand-picked>div .tooltip-handpick {
                width: 50%
            }

            .team-contact {
                width: 90%;
                margin-top: 0
            }
        }

        @media (max-width: 375px) {
            .row-crowd .crowd-box {
                max-height: 90px
            }
        }

        .input-st3 {
            display: flex;
            justify-content: flex-start;
            align-items: center
        }

        .input-st3 .icon-font {
            font-size: 16px;
            width: 21px;
            flex-shrink: 0;
            color: #888
        }

        .input-st3 input {
            border: none;
            flex-grow: 1;
            padding-left: 0;
            padding-right: 0
        }

        .form-search-nav .input-st3 input {
            display: inline-block
        }

        .wrap-slide-st9,
        .wrap-slide-st10 {
            overflow: hidden
        }

        .wrap-slide-st9 .synch-carousels,
        .wrap-slide-st10 .synch-carousels {
            box-shadow: none
        }

        .wrap-slide-st9 .synch-carousels .slick-track,
        .wrap-slide-st10 .synch-carousels .slick-track {
            background-color: rgba(0, 0, 0, 0.4)
        }

        .wrap-slide-st9 .synch-carousels .item,
        .wrap-slide-st10 .synch-carousels .item {
            line-height: 0
        }

        .wrap-slide-st9 .synch-carousels .item>a,
        .wrap-slide-st10 .synch-carousels .item>a {
            width: 100%
        }

        .wrap-slide-st9 .synch-carousels .wrap-dots,
        .wrap-slide-st10 .synch-carousels .wrap-dots {
            display: block;
            max-width: 70px;
            overflow-x: hidden;
            position: absolute;
            text-align: center;
            left: 50%;
            bottom: 0;
            white-space: nowrap;
            transform: translateX(-50%);
            -moz-transform: translateX(-50%);
            -webkit-transform: translateX(-50%);
            -o-transform: translateX(-50%);
            -ms-transform: translateX(-50%);
            padding: 5px;
            background: -moz-radial-gradient(bottom center, ellipse farthest-corner, rgba(0, 0, 0, 0.6) 10%, rgba(255, 255, 255, 0.01) 70%);
            background: -o-radial-gradient(bottom center, ellipse farthest-corner, rgba(0, 0, 0, 0.6) 10%, rgba(255, 255, 255, 0.01) 70%);
            background: -ms-radial-gradient(bottom center, ellipse farthest-corner, rgba(0, 0, 0, 0.6) 10%, rgba(255, 255, 255, 0.01) 70%);
            background: -webkit-radial-gradient(bottom center, ellipse farthest-corner, rgba(0, 0, 0, 0.6) 10%, rgba(255, 255, 255, 0.01) 70%)
        }

        .wrap-slide-st9 .synch-carousels .wrap-dots li,
        .wrap-slide-st10 .synch-carousels .wrap-dots li {
            width: 5px;
            height: 5px;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            background-color: rgba(255, 255, 255, 0.8)
        }

        .wrap-slide-st9 .synch-carousels .wrap-dots li button,
        .wrap-slide-st10 .synch-carousels .wrap-dots li button {
            font-size: 0;
            width: 100%;
            height: 100%
        }

        .wrap-slide-st9 .synch-carousels .wrap-dots .slick-active,
        .wrap-slide-st10 .synch-carousels .wrap-dots .slick-active {
            width: 8px;
            height: 8px;
            background-color: #fff
        }

        .wrap-slide-st9 .synch-carousels .nav-arrows,
        .wrap-slide-st10 .synch-carousels .nav-arrows {
            top: 50%;
            z-index: unset;
            height: 100%
        }

        .wrap-slide-st9 .synch-carousels .nav-arrows button,
        .wrap-slide-st10 .synch-carousels .nav-arrows button {
            z-index: 0;
            height: 100%;
            width: 60px;
            transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -webkit-transform: translateY(-50%);
            -o-transform: translateY(-50%);
            -ms-transform: translateY(-50%)
        }

        .wrap-slide-st9 .synch-carousels .nav-arrows button i,
        .wrap-slide-st10 .synch-carousels .nav-arrows button i {
            color: #fff;
            font-size: 20px
        }

        .wrap-slide-st9 .synch-carousels .nav-arrows button.arrow-left,
        .wrap-slide-st10 .synch-carousels .nav-arrows button.arrow-left {
            left: -60px;
            visibility: hidden;
            background: -owg-linear-gradient(to right, rgba(0, 0, 0, 0.5), transparent);
            background: -webkit-gradient(linear, left top, right top, from(rgba(0, 0, 0, 0.5)), to(transparent));
            background: linear-gradient(to right, rgba(0, 0, 0, 0.5), transparent)
        }

        .wrap-slide-st9 .synch-carousels .nav-arrows button.arrow-right,
        .wrap-slide-st10 .synch-carousels .nav-arrows button.arrow-right {
            right: -60px;
            visibility: hidden;
            background: -webkit-linear-gradient(left, transparent, rgba(0, 0, 0, 0.5));
            background: -o-linear-gradient(left, transparent, rgba(0, 0, 0, 0.5));
            background: linear-gradient(to right, transparent, rgba(0, 0, 0, 0.5))
        }

        .wrap-slide-st9 .synch-carousels:hover .nav-arrows button,
        .wrap-slide-st10 .synch-carousels:hover .nav-arrows button {
            z-index: 3
        }

        .wrap-slide-st9 .synch-carousels:hover .nav-arrows button.arrow-left,
        .wrap-slide-st10 .synch-carousels:hover .nav-arrows button.arrow-left {
            left: 0px;
            visibility: visible
        }

        .wrap-slide-st9 .synch-carousels:hover .nav-arrows button.arrow-right,
        .wrap-slide-st10 .synch-carousels:hover .nav-arrows button.arrow-right {
            right: 0px;
            visibility: visible
        }

        .hidden-offer-box {
            display: none
        }

        .hidden-offer-box .best-offer .col-xlg-12 {
            padding-right: 0;
            padding-left: 0
        }

        @media (max-width: 991px) {

            .wrap-slide-st9 .synch-carousels .nav-arrows,
            .wrap-slide-st10 .synch-carousels .nav-arrows {
                display: none
            }
        }

        @media (max-width: 767px) {

            .wrap-slide-st7 .synch-carousels .slick-dots,
            .wrap-slide-st10 .synch-carousels .slick-dots {
                bottom: 15px
            }
        }

        @keyframes imageAnimation {
            0% {
                transform: scale(1.1)
            }

            50% {
                transform: scale(1)
            }

            100% {
                transform: scale(1.1)
            }
        }

        @-webkit-keyframes imageAnimation {
            0% {
                -webkit-transform: scale(1.1)
            }

            50% {
                -webkit-transform: scale(1)
            }

            100% {
                -webkit-transform: scale(1.1)
            }
        }

        @-moz-keyframes imageAnimation {
            0% {
                -moz-transform: scale(1.1)
            }

            50% {
                -moz-transform: scale(1)
            }

            100% {
                -moz-transform: scale(1.1)
            }
        }

        @-ms-keyframes imageAnimation {
            0% {
                -ms-transform: scale(1.1)
            }

            50% {
                -ms-transform: scale(1)
            }

            100% {
                -ms-transform: scale(1.1)
            }
        }

        .foot-trip .heart-tour .heart-empty:before {
            content: "\e914"
        }

        .foot-trip .heart-tour:hover .heart-empty:before {
            content: "\e915";
            color: #d0b316
        }

        .foot-trip .heart-tour .heart-full:before {
            content: "\e915";
            color: #d0b316
        }

        .foot-trip .heart-tour:hover .heart-full:before {
            color: #AEAEAE
        }

        .section-grid-dt3 .grid-ct5 {
            grid-row: 3 / 6
        }

        .wrap-coo #map-coo-1 {
            top: 31.1% !important;
            left: 59% !important
        }

        .wrap-coo #map-coo-2 {
            top: 45.1% !important;
            left: 58.8% !important
        }

        .wrap-coo #map-coo-3 {
            top: 34.5% !important;
            left: 56.9% !important
        }

        .wrap-coo #map-coo-4 {
            top: 32.9% !important;
            left: 52.4% !important
        }

        .wrap-coo #map-coo-5 {
            top: 40.2% !important;
            left: 55.9% !important
        }

        .wrap-coo #map-coo-6 {
            top: 73.7% !important;
            left: 63.4% !important
        }

        .wrap-coo #map-coo-7 {
            top: 59.5% !important;
            left: 64.9% !important
        }

        .wrap-coo #map-coo-8 {
            top: 60.6% !important;
            left: 57.5% !important
        }

        .wrap-coo #map-coo-9 {
            top: 42.3% !important;
            left: 71.4% !important
        }

        .wrap-coo #map-coo-10 {
            top: 16.3% !important;
            left: 63.4% !important
        }

        .wrap-coo #map-coo-11 {
            top: 7.3%;
            left: 82.2%
        }

        .wrap-coo #map-coo-12 {
            top: 21.3%;
            left: 47.9%
        }

        .wrap-coo #map-coo-13 {
            top: 20.3%;
            left: 42.9%
        }

        .wrap-coo #map-coo-14 {
            top: 29.3%;
            left: 40.9%
        }

        .wrap-coo #map-coo-15 {
            top: 52.3%;
            left: 40.9%
        }

        .wrap-coo #map-coo-16 {
            top: 30.3% !important;
            left: 65.4% !important
        }

        .wrap-coo #map-coo-17 {
            top: 6% !important;
            left: 75.5% !important
        }

        .gm-style {
            font-family: 'Montserrat', Arial, sans-serif !important
        }

        #goog-gt-tt {
            display: none !important
        }

        .goog-te-banner-frame {
            display: none !important
        }

        .goog-te-menu-value:hover {
            text-decoration: none !important
        }

        .goog-text-highlight {
            background-color: transparent !important;
            box-shadow: none !important
        }

        #google_translate_element2 {
            display: none !important
        }

        body {
            top: 0 !important
        }

        .video-box-st2 .hidden-tablet {
            position: relative;
            padding-bottom: 56.25%;
            height: 0
        }

        .video-box-st2 .hidden-tablet iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%
        }

        #goog-gt-tt {
            display: none !important
        }

        .goog-te-banner-frame {
            display: none !important
        }

        .goog-te-menu-value:hover {
            text-decoration: none !important
        }

        .goog-text-highlight {
            background-color: transparent !important;
            box-shadow: none !important
        }

        body {
            top: 0 !important
        }

        #google_translate_element2 {
            display: none !important
        }

        .wrap-slide-st-new {
            margin-top: 15px;
            width: 100%;
        }

        .wrap-slide-st-new .synch-carousels {
            box-shadow: none;
        }

        .wrap-slide-st-new .gallery {
            width: 351px;
            margin: 0 auto;
        }

        .wrap-recent-travel .gallery>div {
            margin-bottom: 1.5rem;
        }

        .recent-travel-image {
            position: relative;
        }

        .recent-travel-image:hover {
            border: 1px solid #000;
            box-shadow: 0 0 20px #000;
        }

        .recent-travel-image>div {
            display: inline-flex;
            position: absolute;
            background-color: #00000099;
            bottom: 0;
            left: 0;
            height: 30px;
            width: 100%;
            align-items: center;
            justify-content: space-between;
            padding: 0 10px;
        }

        .recent-travel-image>div>div {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .recent-travel-slick {
            display: none;
        }

        .icon-address {
            color: #d0b316;
            font-size: 1.1rem;
        }

        .text-address {
            color: white;
            font-weight: 700;
        }

        .icon-view-tour {
            color: white;
        }

        .text-view-tour {
            color: white;
            text-decoration: underline;
        }

        @media screen and (max-width: 421px) {
            .d-xsm-none {
                display: none;
            }

            .d-xsm-block {
                display: block;
            }
        }
    </style>
@endsection

@section('content')
<section class="banner-top-slider">
    <div class="wrap-slide-st7">
        <div class="synch-carousels">
            <div class="gallery">
                <div class="item">
                    <div>
                        <span
                            style="background-image:url('https://d2lwt6tidfiof0.cloudfront.net/images/background/asia-tours-1.webp');"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wrap-title-banner-top">
        <a href="javascript:void(0);" style="text-align: center;"><img
                src="https://d2lwt6tidfiof0.cloudfront.net/images/asia-tours-wta.webp" style="width:68%"
                class="nolazy" /></a>
        <p>Asia is our homeland. We'll show you Asia, better than anyone else!</p>
    </div>
    <div id="booking-widget-homepage">
        <div class="form-banner-top">
            <div class="booking-step-where select-st1">
                <span class="text">
                    <i class="icon-font icon-destination"></i>
                    <b>Where you want to go</b>
                    <i class="icon-font select-arrow-thin"></i>
                </span>
                <ul class="value">
                    <li>
                        <a href="javascript:" class="btn-value">
                            <i class="icon-font icon-destination"></i>
                            <b>Vietnam</b>
                            <i class="icon-font checkmark"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:" class="btn-value">
                            <i class="icon-font icon-destination"></i>
                            <b>Cambodia</b>
                            <i class="icon-font checkmark"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:" class="btn-value">
                            <i class="icon-font icon-destination"></i>
                            <b>Laos</b>
                            <i class="icon-font checkmark"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:" class="btn-value">
                            <i class="icon-font icon-destination"></i>
                            <b>Myanmar</b>
                            <i class="icon-font checkmark"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:" class="btn-value">
                            <i class="icon-font icon-destination"></i>
                            <b>Thailand</b>
                            <i class="icon-font checkmark"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:" class="btn-value">
                            <i class="icon-font icon-destination"></i>
                            <b>Indonesia</b>
                            <i class="icon-font checkmark"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:" class="btn-value">
                            <i class="icon-font icon-destination"></i>
                            <b>Malaysia</b>
                            <i class="icon-font checkmark"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:" class="btn-value">
                            <i class="icon-font icon-destination"></i>
                            <b>Singapore</b>
                            <i class="icon-font checkmark"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:" class="btn-value">
                            <i class="icon-font icon-destination"></i>
                            <b>Philippines</b>
                            <i class="icon-font checkmark"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:" class="btn-value">
                            <i class="icon-font icon-destination"></i>
                            <b>China</b>
                            <i class="icon-font checkmark"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:" class="btn-value">
                            <i class="icon-font icon-destination"></i>
                            <b>Hong Kong</b>
                            <i class="icon-font checkmark"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:" class="btn-value">
                            <i class="icon-font icon-destination"></i>
                            <b>Japan</b>
                            <i class="icon-font checkmark"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:" class="btn-value">
                            <i class="icon-font icon-destination"></i>
                            <b>South Korea</b>
                            <i class="icon-font checkmark"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:" class="btn-value">
                            <i class="icon-font icon-destination"></i>
                            <b>Bhutan</b>
                            <i class="icon-font checkmark"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:" class="btn-value">
                            <i class="icon-font icon-destination"></i>
                            <b>Nepal</b>
                            <i class="icon-font checkmark"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:" class="btn-value">
                            <i class="icon-font icon-destination"></i>
                            <b>India</b>
                            <i class="icon-font checkmark"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:" class="btn-value">
                            <i class="icon-font icon-destination"></i>
                            <b>Sri Lanka</b>
                            <i class="icon-font checkmark"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="booking-step-when select-st1">
                <span class="text">
                    <i class="icon-font image"></i>
                    <b>Experiences</b>
                    <i class="icon-font select-arrow-thin"></i>
                </span>
                <ul class="value">
                    <li>
                        <a href="javascript:" class="btn-value">
                            <i class="icon-font icon-cultural"></i>
                            <b>Culture & Highlights</b>
                            <i class="icon-font checkmark"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:" class="btn-value">
                            <i class="icon-font icon-cuisine"></i>
                            <b>Food & Local Life</b>
                            <i class="icon-font checkmark"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:" class="btn-value">
                            <i class="icon-font icon-mountain"></i>
                            <b>Active & Nature</b>
                            <i class="icon-font checkmark"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:" class="btn-value">
                            <i class="icon-font ex-wellness-relaxation"></i>
                            <b>Beach & Relaxation</b>
                            <i class="icon-font checkmark"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:" class="btn-value">
                            <i class="icon-font ex-couple-honeymoon"></i>
                            <b>Couple & Honeymoon</b>
                            <i class="icon-font checkmark"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:" class="btn-value">
                            <i class="icon-font ex-family-holiday"></i>
                            <b>Family Holiday</b>
                            <i class="icon-font checkmark"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:" class="btn-value">
                            <i class="icon-font ex-luxury-hotels-resorts"></i>
                            <b>Luxury Hotels & Resorts</b>
                            <i class="icon-font checkmark"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:" class="btn-value">
                            <i class="icon-font ex-boutiquehotels"></i>
                            <b>Boutique Hotels</b>
                            <i class="icon-font checkmark"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:" class="btn-value">
                            <i class="icon-font ex-stardard-hotels"></i>
                            <b>Standard Hotels</b>
                            <i class="icon-font checkmark"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="booking-step-room booking-st1">
                <span class="text">
                    <b>
                        <i class="icon-font icon-users"></i>&nbsp;
                        <strong class="adult-number">2</strong>&nbsp;Adult(s),&nbsp;<strong
                            class="child-number">0</strong>&nbsp;Children,&nbsp;<strong
                            class="infant-number">0</strong>&nbsp;Infant
                    </b>
                    <i class="icon-font select-arrow-thin"></i>
                </span>
                <div class="value-2">
                    <div class="wrap-adult-number">
                        <button class="btn-down">-</button>
                        <span><strong class="adult-number">2</strong>&nbsp;Adult(>12)</span>
                        <button class="btn-up">+</button>
                        <input type="text" name="" value="2">
                    </div>
                    <div class="wrap-child-number">
                        <button class="btn-down btn-disabled">-</button>
                        <span><strong class="child-number">0</strong>&nbsp;Child(4-12)</span>
                        <button class="btn-up">+</button>
                        <input type="text" name="" value="0">
                    </div>
                    <div class="wrap-infant-number">
                        <button class="btn-down btn-disabled">-</button>
                        <span><strong class="infant-number">0</strong>&nbsp;Infant(<3)< /span>
                                <button class="btn-up">+</button>
                                <input type="text" name="" value="0">
                    </div>
                </div>
            </div>
            <div class="booking-step-promo select-st2">
                <span class="text">
                    <i class="icon-font price-tag"></i>
                    <b>Tour Class</b>
                    <i class="icon-font select-arrow-thin"></i>
                </span>
                <ul class="value">

                    <li>
                        <a href="javascript:" class="btn-value">
                            <b>Economy</b>
                            <i class="icon-font checkmark"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:" class="btn-value">
                            <b>Deluxe</b>
                            <i class="icon-font checkmark"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:" class="btn-value">
                            <b>Luxury</b>
                            <i class="icon-font checkmark"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="booking-step-submit">
                <button class="btn-st3 btn-create-trip">Customize Tours</button>
            </div>
        </div>
        <button class="btn-st3 btn-create-trip">Build Your Own Trip</button>
    </div>
</section>
<section class="best-support">
    <div class="wrap-mini-intro wrap-mini-intro-st2">
        <div class="team-quote">
            <img src="https://d2lwt6tidfiof0.cloudfront.net/images/otm_home/a12.webp" />
            <img src="https://d2lwt6tidfiof0.cloudfront.net/images/otm_home/a2.webp" />
            <img src="https://d2lwt6tidfiof0.cloudfront.net/images/otm_home/a3.webp" />
            <img src="https://d2lwt6tidfiof0.cloudfront.net/images/otm_home/a5.webp" />
            <img src="https://d2lwt6tidfiof0.cloudfront.net/images/otm_home/a6.webp" />
            <img src="https://d2lwt6tidfiof0.cloudfront.net/images/otm_home/a10.webp" />
        </div>
        <h1 class="team-name line">We are proudly Asia Tour Experts<br /> Specializing in <b>Asia Private
                Tours</b> & Tailored Travel<br /><img
                src="https://d2lwt6tidfiof0.cloudfront.net/images/asia-geo-post-wta.png"
                data-img="https://d2lwt6tidfiof0.cloudfront.net/images/asia-geo-post-wta.png"
                style="width:886px; padding-top:10px;" /></h1>
    </div>
    <div class="container">
        <div class="col-xlg-3 col-sm-6">
            <img src="https://d2lwt6tidfiof0.cloudfront.net/images/otm_home/h1.webp"
                data-img="https://d2lwt6tidfiof0.cloudfront.net/images/otm_home/h1.webp" alt="">
            <article>
                <h3>100% Personalized Itinerary</h3>
                <p class="paragraph">Hassle-free and uniquely personalized! You'll get a completely flexible
                    trip plan tailored to your individual interests, wishes and budget. Our Inside Travel
                    Experts will give you professional advice, and it's you who decides how many days to travel,
                    where to visit and where to stay.</p>
            </article>
        </div>
        <div class="col-xlg-3 col-sm-6">
            <img src="https://d2lwt6tidfiof0.cloudfront.net/images/otm_home/h2.webp"
                data-img="https://d2lwt6tidfiof0.cloudfront.net/images/otm_home/h2.webp" alt=""
                style="padding-bottom: 8px;">
            <article>
                <h3>Private Guide, Car & Driver</h3>
                <p class="paragraph">You always have private driver & private car flexible upon your travel
                    schedules. Especially, in your Private Tour, our experienced and knowledgeable private guide
                    will show you the hidden gems and inspire you with the most interesting local stories to
                    gain a more in-depth understanding of each exotic country.</p>
            </article>
        </div>
        <div class="col-xlg-3 col-sm-6">
            <img src="https://d2lwt6tidfiof0.cloudfront.net/images/otm_home/h3.webp"
                data-img="https://d2lwt6tidfiof0.cloudfront.net/images/otm_home/h3.webp" alt="">
            <article>
                <h3>Handpicked Hotels & Meals</h3>
                <p class="paragraph">Whether you are looking for a romantic resort or a boutique hotel,
                    authentic cuisine or street food style; our Asia Tour Experts'll create the lifetime journey
                    around your needs & wants with our best hand-picked collection of accommodation and
                    restaurants.</p>
            </article>
        </div>
        <div class="col-xlg-3 col-sm-6">
            <img src="https://d2lwt6tidfiof0.cloudfront.net/images/otm_home/h4.webp"
                data-img="https://d2lwt6tidfiof0.cloudfront.net/images/otm_home/h4.webp" alt="">
            <article>
                <h3>Trip Managing Experts</h3>
                <p class="paragraph">Travelling with us means having a dedicated, friendly & professional team
                    by your side every step of the way and always ready to help whenever you need. Our Inside
                    Travel Experts are available 24/7 and take care of everything to make sure you can enjoy the
                    travel experience of a lifetime and get unforgettable memories.</p>
            </article>
        </div>
    </div>
</section>
<section class="mg-top mg-bot-0">
    <article class="wrap-mini-intro special-width-destop">
        <h2 class="title-h2-line">We Design <strong>Asia Tours</strong> Your Way<br> Best Tailor-made Private
            Asia Tours For You</h2>
        <p class="paragraph">
            <b><a href="https://www.asiatours.com/" title="Asia Tours">AsiaTours.com</a></b> specializes in Asia
            <b>Private Tours</b> &amp; <b>Tailor-Made Holiday</b> Packages.<br>We are proudly recommended by
            <b>National Geographic</b>, <b>The Washington Post</b>, <b>CNN Travel</b> &amp; <b>World Travel
                Awards winner</b>... To be the <b>Best Tour Operators</b> in each destination where you travel
            to, our local <b>professional team</b> is always by your side &amp; <b>take care of your trip</b>
            from start to end to make your tour <b>incredible &amp; unforgettable</b> experiences...<br><br>
            <img src="/images/asia-h1.webp"
                data-img="https://d2lwt6tidfiof0.cloudfront.net/images/asia-h1.webp" style="width:686px"><br>
            <br>At asiatours.com, we <b>don't sell mass tour</b> packages, every tour is <b>privately
                customized</b> &amp; designed to <b>suit your personal desire</b>: budget, travel schedules,
            destinations, special requirements... Our Asia Tour Experts are <b>always ready and happy to
                work</b> with each customer individually to give you a dream trip.<br><br>

        </p>
        <div style="padding:56.25% 0 0 0;position:relative; width:100%"><iframe
                src="/images/568383717.html"
                frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen=""
                style="position:absolute;top:0;left:0;width:100%;height:100%;"
                title="Asia Tours Official Video 4K | We will show you Asia, better than anyone else!"
                data-ready="true"></iframe></div>
        <script
            src="/images/player.js"></script>
        <p class="paragraph">
            <br>We offer a wide range of Asia tour itineraries covering most popular countries such as <b><a
                    href="https://www.asiatours.com/vietnam/tours/" title="Vietnam Tours">Vietnam</a></b>, <b><a
                    href="https://www.asiatours.com/cambodia/tours/" title="Cambodia Tours">Cambodia</a></b>,
            <b><a href="https://www.asiatours.com/laos/tours/" title="Laos Tours">Laos</a></b>, <b><a
                    href="https://www.asiatours.com/myanmar/tours/" title="Myanmar Tours">Myanmar</a></b>, <b><a
                    href="https://www.asiatours.com/thailand/tours/" title="Thailand Tours">Thailand</a></b>,
            <b><a href="https://www.asiatours.com/indonesia/tours/" title="Indonesia Tours">Indonesia</a></b>,
            <b><a href="https://www.asiatours.com/malaysia/tours/" title="Malaysia Tours">Malaysia</a></b>,
            <b><a href="https://www.asiatours.com/singapore/tours/" title="Singapore Tours">Singapore</a></b>,
            <b><a href="https://www.asiatours.com/philippines/tours/"
                    title="Philippines Tours">Philippines</a></b>, <b><a
                    href="https://www.asiatours.com/china/tours/" title="China Tours">China</a></b>, <b><a
                    href="https://www.asiatours.com/hong-kong/tours/" title="Hong Kong Tours">Hong Kong</a></b>,
            <b><a href="https://www.asiatours.com/japan/tours/" title="Japan Tours">Japan</a></b>, <b><a
                    href="https://www.asiatours.com/south-korea/tours/" title="South Korea Tours">South
                    Korea</a></b>, <b><a href="https://www.asiatours.com/bhutan/tours/"
                    title="Bhutan Tours">Bhutan</a></b>, <b><a href="https://www.asiatours.com/nepal/tours/"
                    title="Nepal Tours">Nepal</a></b>, <b><a href="https://www.asiatours.com/india/tours/"
                    title="India Tours">India</a></b>, <b><a href="https://www.asiatours.com/sri-lanka/tours/"
                    title="Sri Lanka Tours">Sri Lanka</a></b>... All <b>Asia Tours</b> can be <b>customized
                easily</b> &amp; start on <b>any date</b> you want.
        </p>
    </article>
    <div class="wrap-map-st2">
        <div class="map-home">
            <img class="nolazy" src="https://d2lwt6tidfiof0.cloudfront.net/images/map-h.webp" alt="map-sea">
            <div class="synch-carousels" id="slick-slider-map">
                <div class="gallery">
                    <div class="item">
                        <a href="https://www.asiatours.com/cambodia/tours/" title="Cambodia Tours"><img
                                class="nolazy"
                                src="https://d2lwt6tidfiof0.cloudfront.net/images/otm_home/bg-map-cambodia.jpg"
                                alt="Cambodia"></a>
                        <article>
                            <h3><a href="https://www.asiatours.com/cambodia/tours/"
                                    title="Cambodia Tours">Cambodia</a></h3>
                            <h4>The Land of Temples and Towers</h4>
                            <p class="paragraph">Awe-inspiring famous ruins & temples (Angkor Wat Complex),
                                turbulent past, laidback islands, untouched jungles, rich heritage & natural
                                beauty. Cambodia, the Kingdom of Wonder, situates to the South portion of the
                                Indochina Peninsula. The country is known to be the Khmer...</p>
                        </article>
                        <a href="https://www.asiatours.com/cambodia/tours/" title="Cambodia Tours"
                            class="link-st3">Discover more</a>
                    </div>
                </div>
                <!-- <div class="nav-arrows">
                            <button class="arrow-left">
                                <i class="icon-font select-arrow-thin"></i>
                            </button>
                            <span><strong>1</strong> of 17 Destinations</span>
                            <button class="arrow-right">
                                <i class="icon-font select-arrow-thin"></i>
                            </button>
                        </div> -->
            </div>
            <div class="wrap-coo" style="box-shadow: none;">
                <div class="map-coo tooltip map-coo-active" id="map-coo-1">
                    <a href="https://www.asiatours.com/philippines/tours/"
                        title="Philippines Tours"><span><b>vietnam</b>
                            <font>The Land of Timeless Charm</font><i></i>
                        </span></a>
                </div>
                <div class="map-coo tooltip" id="map-coo-2">
                    <a href="https://www.asiatours.com/cambodia/tours/"
                        title="Cambodia Tours"><span><b>cambodia</b>
                            <font>The Land of Temples and Towers</font><i></i>
                        </span></a>
                </div>
                <div href="javascript:" class="map-coo tooltip" id="map-coo-3">
                    <a href="https://www.asiatours.com/laos/tours/" title="Laos Tours"><span><b>laos</b>
                            <font>The Land of Million of Elephants</font><i></i>
                        </span></a>
                </div>
                <div href="javascript:" class="map-coo tooltip" id="map-coo-4">
                    <a href="https://www.asiatours.com/myanmar/tours/"
                        title="Myanmar Tours"><span><b>myanmar</b>
                            <font>The Land of Golden Pagodas</font><i></i>
                        </span></a>
                </div>
                <div href="javascript:" class="map-coo tooltip" id="map-coo-5">
                    <a href="https://www.asiatours.com/thailand/tours/"
                        title="Thailand Tours"><span><b>thailand</b>
                            <font>The Land of Smiles</font><i></i>
                        </span></a>
                </div>
                <div href="javascript:" class="map-coo tooltip" id="map-coo-6">
                    <a href="https://www.asiatours.com/indonesia/tours/"
                        title="Indonesia Tours"><span><b>indonesia</b>
                            <font>The Land Of Thousands of Islands</font><i></i>
                        </span></a>
                </div>
                <div href="javascript:" class="map-coo tooltip" id="map-coo-7">
                    <a href="https://www.asiatours.com/malaysia/tours/"
                        title="Malaysia Tours"><span><b>malaysia</b>
                            <font>The Land Of Harmony In Diversity</font><i></i>
                        </span></a>
                </div>
                <div href="javascript:" class="map-coo tooltip" id="map-coo-8">
                    <a href="https://www.asiatours.com/singapore/tours/"
                        title="Singapore Tours"><span><b>singapore</b>
                            <font>The Land Of Contemporary Passions</font><i></i>
                        </span></a>
                </div>
                <div href="javascript:" class="map-coo tooltip" id="map-coo-9">
                    <a href="https://www.asiatours.com/philippines/tours/"
                        title="Philippines Tours"><span><b>philippines</b>
                            <font>The Pearl of the Orient Seas</font><i></i>
                        </span></a>
                </div>
                <div href="javascript:" class="map-coo tooltip" id="map-coo-10">
                    <a href="https://www.asiatours.com/china/tours/" title="China Tours"><span><b>china</b>
                            <font>The Cradle of Oriental Civilization</font><i></i>
                        </span></a>
                </div>
                <div href="javascript:" class="map-coo tooltip" id="map-coo-16">
                    <a href="https://www.asiatours.com/hong-kong/tours/" title="Hong Kong Tours"><span><b>Hong
                                Kong</b>
                            <font>Sparkling Fragrant Harbor</font><i></i>
                        </span></a>
                </div>
                <div href="javascript:" class="map-coo tooltip" id="map-coo-11">
                    <a href="https://www.asiatours.com/japan/tours/" title="Japan Tours"><span><b>japan</b>
                            <font>The Land of Rising Sun</font><i></i>
                        </span></a>
                </div>
                <div href="javascript:" class="map-coo tooltip" id="map-coo-17">
                    <a href="https://www.asiatours.com/south-korea/tours/"
                        title="South Korea Tours"><span><b>South Korea</b>
                            <font>Intriguing & Vibrant Culture</font><i></i>
                        </span></a>
                </div>
                <div href="javascript:" class="map-coo tooltip" id="map-coo-12">
                    <a href="https://www.asiatours.com/bhutan/tours/" title="Bhutan Tours"><span><b>bhutan</b>
                            <font>The Land of the Thunder Dragon</font><i></i>
                        </span></a>
                </div>
                <div href="javascript:" class="map-coo tooltip" id="map-coo-13">
                    <a href="https://www.asiatours.com/nepal/tours/" title="Nepal Tours"><span><b>nepal</b>
                            <font>The Land of the Himalayas</font><i></i>
                        </span></a>
                </div>
                <div href="javascript:" class="map-coo tooltip" id="map-coo-14">
                    <a href="https://www.asiatours.com/india/tours/" title="India Tours"><span><b>india</b>
                            <font>The Land of Incredible Heritages</font><i></i>
                        </span></a>
                </div>
                <div href="javascript:" class="map-coo tooltip" id="map-coo-15">
                    <a href="https://www.asiatours.com/sri-lanka/tours/" title="Sri Lanka Tours"><span><b>sri
                                lanka</b>
                            <font>The Pearl of the Indian Ocean</font><i></i>
                        </span></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="list-trip mg-top-0-1200">
    <div class="wrap-mini-intro special-width-destop">
        <h2 class="title-h2-line">Inspiring Best Asia Tour Itineraries</h2>
        <p class="paragraph">Embark on a journey of discovery with <strong><a href="https://www.asiatours.com"
                    title="Asia Tours">Asia Tours</a></strong>, where you can experience the rich culture,
            stunning natural beauty, and mouth-watering cuisine of this diverse and fascinating continent. From
            ancient temples to modern cities, pristine beaches to rugged mountain landscapes, our customized
            Asia tours will take you on an unforgettable adventure through the heart of Asia.<br><br></p>
    </div>
    <div class="container">
        <div class="big-first-tour-box">
            <div class="head-box">
                <a href="https://www.asiatours.com/tours/japan-and-china-overview-tour-830.html"
                    class="img-box-st2" title="Japan and China Overview Tour">
                    <img src="#"
                        data-img="https://d2lwt6tidfiof0.cloudfront.net/uploads/photo-tour/japan-and-china-overview-tour991-1389-570.jpg"
                        alt="Japan and China Overview Tour">
                </a>
                <div class="count-day">Featured</div>
                <a href="javascript:;" rel="nofollow" id="love_tour1982" onclick="love_tour(1982)"
                    class="heart-tour" title="Like"><i class="icon-font heart-empty"></i></a>
                <h2><a href="https://www.asiatours.com/tours/japan-and-china-overview-tour-830.html"
                        title="Japan and China Overview Tour">Japan and China Overview Tour</a></h2>
                <div class="expert-box">
                    <div>
                        <h6>AsiaTours Expert</h6>
                        <p>We are here to help you</p>
                    </div>
                    <div>
                        <img src="https://d2lwt6tidfiof0.cloudfront.net/images//otm_home/a5.webp"
                            data-img="https://d2lwt6tidfiof0.cloudfront.net/images//otm_home/a4.webp"
                            alt="Asia Tours Expert">
                    </div>
                </div>
            </div>
            <div class="body-box">
                <div class="address-box">
                    <div class="day-trip">
                        <img src="#"
                            data-img="https://d2lwt6tidfiof0.cloudfront.net/images/icon/wrap-img_optimized.png"
                            alt="">
                        <span><b>10</b>Days</span>
                    </div>
                    <address class="address">
                        <a href="https://www.asiatours.com/Tokyo/" target="_blank" title="Tokyo">Tokyo</a>
                        → <a href="https://www.asiatours.com/Kyoto/" target="_blank" title="Kyoto">Kyoto</a>
                        → <a href="https://www.asiatours.com/Beijing/" target="_blank"
                            title="Beijing">Beijing</a>
                    </address>
                </div>
                <button class="btn-st2 tooltip" type="button">
                    <i class="icon-font icon-itine"></i>
                    <b>Japan, China</b>
                    <span>Japan, China</span>
                </button>
                <p class="paragraph">Perfect for first-time visitors, this 10-day overview captures the must-see
                    icons of Japan and China in one streamlined itinerary. Discover Tokyo’s modern energy, step
                    into Kyoto’s refined traditions, and conclude in Beijing with its monumental history and
                    world-famous sites. Carefully curated...</p>
            </div>
            <div class="foot-trip">
                <div class="hand-picked">
                    <span>Handpicked:</span>
                    <div>
                        <a href="javascript:" class="tooltip tooltip-handpick">
                            <div>
                                <i class="icon-font bed"></i>
                                <font>Hotels</font>
                            </div>
                            <span>Handpicked Hotels</span>
                        </a>
                        <a href="javascript:" class="tooltip tooltip-handpick">
                            <div>
                                <i class="icon-font exchange"></i>
                                <i class="icon-font icon-plane"></i>
                                <font>Transfer</font>
                            </div>
                            <span>Private Car & Driver</span>
                        </a>
                        <a href="javascript:" class="tooltip tooltip-handpick">
                            <div>
                                <i class="icon-font spoon-knife"></i>
                                <font>Meals</font>
                            </div>
                            <span>Handpicked Restaurants</span>
                        </a>
                        <a href="javascript:" class="tooltip tooltip-handpick">
                            <div>
                                <i class="icon-font image"></i>
                                <font>Experiences</font>
                            </div>
                            <span>Tailored Unique Experiences</span>
                        </a>
                        <a href="javascript:" class="tooltip tooltip-handpick">
                            <div>
                                <i class="icon-font icon-users"></i>
                                <font>Experts</font>
                            </div>
                            <span>Private Guide & Trip Managers</span>
                        </a>
                    </div>
                </div>
                <span>Only from <strong>$4890</strong>/ person</span>
                <a class="btn-st2" href="https://www.asiatours.com/tours/japan-and-china-overview-tour-830.html"
                    title="Japan and China Overview Tour">explore this trip <font>&rarr;</font></a>
            </div>
        </div>
        <div class="big-first-tour-box">
            <div class="head-box">
                <a href="https://www.asiatours.com/tours/elegant-journey-through-vietnam-cambodia-and-thailand.html"
                    class="img-box-st2" title="Elegant Journey through Vietnam, Cambodia and Thailand">
                    <img src="#"
                        data-img="https://d2lwt6tidfiof0.cloudfront.net/uploads/photo-tour/1764066264482-1389-570.jpg"
                        alt="Elegant Journey through Vietnam, Cambodia and Thailand">
                </a>
                <div class="count-day">Featured</div>
                <a href="javascript:;" rel="nofollow" id="love_tour2005" onclick="love_tour(2005)"
                    class="heart-tour" title="Like"><i class="icon-font heart-empty"></i></a>
                <h2><a href="https://www.asiatours.com/tours/elegant-journey-through-vietnam-cambodia-and-thailand.html"
                        title="Elegant Journey through Vietnam, Cambodia and Thailand">Elegant Journey through
                        Vietnam, Cambodia and Thailand</a></h2>
                <div class="expert-box">
                    <div>
                        <h6>AsiaTours Expert</h6>
                        <p>We are here to help you</p>
                    </div>
                    <div>
                        <img src="https://d2lwt6tidfiof0.cloudfront.net/images//otm_home/a8.webp"
                            data-img="https://d2lwt6tidfiof0.cloudfront.net/images//otm_home/a4.webp"
                            alt="Asia Tours Expert">
                    </div>
                </div>
            </div>
            <div class="body-box">
                <div class="address-box">
                    <div class="day-trip">
                        <img src="#"
                            data-img="https://d2lwt6tidfiof0.cloudfront.net/images/icon/wrap-img_optimized.png"
                            alt="">
                        <span><b>18</b>Days</span>
                    </div>
                    <address class="address">
                        <a href="https://www.asiatours.com/Hanoi/" target="_blank" title="Hanoi">Hanoi</a>
                        → <a href="https://www.asiatours.com/Halong-Bay/" target="_blank"
                            title="Halong Bay">Halong Bay</a>
                        → <a href="https://www.asiatours.com/Siem-Reap/" target="_blank" title="Siem Reap">Siem
                            Reap</a>
                        → <a href="https://www.asiatours.com/Battambang/" target="_blank"
                            title="Battambang">Battambang</a>
                        → <a href="https://www.asiatours.com/Bangkok/" target="_blank"
                            title="Bangkok">Bangkok</a>
                        → <a href="https://www.asiatours.com/Chiang-Mai/" target="_blank"
                            title="Chiang Mai">Chiang Mai</a>
                        → <a href="https://www.asiatours.com/Phuket/" target="_blank" title="Phuket">Phuket</a>
                    </address>
                </div>
                <button class="btn-st2 tooltip" type="button">
                    <i class="icon-font icon-itine"></i>
                    <b>Vietnam, Cambodia, Thailand</b>
                    <span>Vietnam, Cambodia, Thailand</span>
                </button>
                <p class="paragraph">Embark on an elegant 18-day journey that unveils the timeless beauty, rich
                    heritage, and refined charm of Vietnam, Cambodia, and Thailand. Wander through Hanoi’s
                    historic streets, cruise the emerald waters of Halong Bay, and discover the ancient wonders
                    of Angkor in Siem Reap before exploring the...</p>
            </div>
            <div class="foot-trip">
                <div class="hand-picked">
                    <span>Handpicked:</span>
                    <div>
                        <a href="javascript:" class="tooltip tooltip-handpick">
                            <div>
                                <i class="icon-font bed"></i>
                                <font>Hotels</font>
                            </div>
                            <span>Handpicked Hotels</span>
                        </a>
                        <a href="javascript:" class="tooltip tooltip-handpick">
                            <div>
                                <i class="icon-font exchange"></i>
                                <i class="icon-font icon-plane"></i>
                                <font>Transfer</font>
                            </div>
                            <span>Private Car & Driver</span>
                        </a>
                        <a href="javascript:" class="tooltip tooltip-handpick">
                            <div>
                                <i class="icon-font spoon-knife"></i>
                                <font>Meals</font>
                            </div>
                            <span>Handpicked Restaurants</span>
                        </a>
                        <a href="javascript:" class="tooltip tooltip-handpick">
                            <div>
                                <i class="icon-font image"></i>
                                <font>Experiences</font>
                            </div>
                            <span>Tailored Unique Experiences</span>
                        </a>
                        <a href="javascript:" class="tooltip tooltip-handpick">
                            <div>
                                <i class="icon-font icon-users"></i>
                                <font>Experts</font>
                            </div>
                            <span>Private Guide & Trip Managers</span>
                        </a>
                    </div>
                </div>
                <span>Only from <strong>$5663</strong>/ person</span>
                <a class="btn-st2"
                    href="https://www.asiatours.com/tours/elegant-journey-through-vietnam-cambodia-and-thailand.html"
                    title="Elegant Journey through Vietnam, Cambodia and Thailand">explore this trip <font>
                        &rarr;</font></a>
            </div>
        </div>
        <div class="big-first-tour-box">
            <div class="head-box">
                <a href="https://www.asiatours.com/tours/enchanting-journey-through-korea-thailand-vietnam-indonesia.html"
                    class="img-box-st2" title="Enchanting Journey through Korea, Thailand, Vietnam & Indonesia">
                    <img src="#"
                        data-img="https://d2lwt6tidfiof0.cloudfront.net/uploads/photo-tour/1759067691239-1389-570.jpg"
                        alt="Enchanting Journey through Korea, Thailand, Vietnam & Indonesia">
                </a>
                <div class="count-day">Featured</div>
                <a href="javascript:;" rel="nofollow" id="love_tour1963" onclick="love_tour(1963)"
                    class="heart-tour" title="Like"><i class="icon-font heart-empty"></i></a>
                <h2><a href="https://www.asiatours.com/tours/enchanting-journey-through-korea-thailand-vietnam-indonesia.html"
                        title="Enchanting Journey through Korea, Thailand, Vietnam & Indonesia">Enchanting
                        Journey through Korea, Thailand, Vietnam & Indonesia</a></h2>
                <div class="expert-box">
                    <div>
                        <h6>AsiaTours Expert</h6>
                        <p>We are here to help you</p>
                    </div>
                    <div>
                        <img src="https://d2lwt6tidfiof0.cloudfront.net/images//otm_home/a5.webp"
                            data-img="https://d2lwt6tidfiof0.cloudfront.net/images//otm_home/a3.webp"
                            alt="Asia Tours Expert">
                    </div>
                </div>
            </div>
            <div class="body-box">
                <div class="address-box">
                    <div class="day-trip">
                        <img src="#"
                            data-img="https://d2lwt6tidfiof0.cloudfront.net/images/icon/wrap-img_optimized.png"
                            alt="">
                        <span><b>21</b>Days</span>
                    </div>
                    <address class="address">
                        <a href="https://www.asiatours.com/Seoul/" target="_blank" title="Seoul">Seoul</a>
                        → <a href="https://www.asiatours.com/Bangkok/" target="_blank"
                            title="Bangkok">Bangkok</a>
                        → <a href="javascript:;">Ratchaburi</a>
                        → <a href="https://www.asiatours.com/Chiang-Mai/" target="_blank"
                            title="Chiang Mai">Chiang Mai</a>
                        → <a href="https://www.asiatours.com/Chiang-Rai/" target="_blank"
                            title="Chiang Rai">Chiang Rai</a>
                        → <a href="https://www.asiatours.com/Hanoi/" target="_blank" title="Hanoi">Hanoi</a>
                        → <a href="https://www.asiatours.com/Ninh-Binh/" target="_blank" title="Ninh Binh">Ninh
                            Binh</a>
                        → <a href="https://www.asiatours.com/Halong-Bay/" target="_blank"
                            title="Halong Bay">Halong Bay</a>
                        → <a href="https://www.asiatours.com/Bali-Island/" target="_blank"
                            title="Bali Island">Bali Island</a>
                    </address>
                </div>
                <button class="btn-st2 tooltip" type="button">
                    <i class="icon-font icon-itine"></i>
                    <b>South Korea, Thailand, Vietnam, Indonesia</b>
                    <span>South Korea, Thailand, Vietnam, Indonesia</span>
                </button>
                <p class="paragraph">Traverse from East Asia to Southeast parts to unveil enchanting colors of
                    Asia with our 21-day classic itinerary. Start in South Korea where boast about vibrant urban
                    delights and distinctive traditions co-exist, head to the Land of Smile with gorgeous
                    temples in Bangkok, bustling markets,...</p>
            </div>
            <div class="foot-trip">
                <div class="hand-picked">
                    <span>Handpicked:</span>
                    <div>
                        <a href="javascript:" class="tooltip tooltip-handpick">
                            <div>
                                <i class="icon-font bed"></i>
                                <font>Hotels</font>
                            </div>
                            <span>Handpicked Hotels</span>
                        </a>
                        <a href="javascript:" class="tooltip tooltip-handpick">
                            <div>
                                <i class="icon-font exchange"></i>
                                <i class="icon-font icon-plane"></i>
                                <font>Transfer</font>
                            </div>
                            <span>Private Car & Driver</span>
                        </a>
                        <a href="javascript:" class="tooltip tooltip-handpick">
                            <div>
                                <i class="icon-font spoon-knife"></i>
                                <font>Meals</font>
                            </div>
                            <span>Handpicked Restaurants</span>
                        </a>
                        <a href="javascript:" class="tooltip tooltip-handpick">
                            <div>
                                <i class="icon-font image"></i>
                                <font>Experiences</font>
                            </div>
                            <span>Tailored Unique Experiences</span>
                        </a>
                        <a href="javascript:" class="tooltip tooltip-handpick">
                            <div>
                                <i class="icon-font icon-users"></i>
                                <font>Experts</font>
                            </div>
                            <span>Private Guide & Trip Managers</span>
                        </a>
                    </div>
                </div>
                <span>Only from <strong>$5625</strong>/ person</span>
                <a class="btn-st2"
                    href="https://www.asiatours.com/tours/enchanting-journey-through-korea-thailand-vietnam-indonesia.html"
                    title="Enchanting Journey through Korea, Thailand, Vietnam & Indonesia">explore this trip
                    <font>&rarr;</font>
                </a>
            </div>
        </div>
        <div class="big-first-tour-box">
            <div class="head-box">
                <a href="https://www.asiatours.com/tours/wonderful-adventure-through-korea-singapore-indonesia-malaysia.html"
                    class="img-box-st2"
                    title="Wonderful Adventure through Korea, Singapore, Indonesia & Malaysia">
                    <img src="#"
                        data-img="https://d2lwt6tidfiof0.cloudfront.net/uploads/photo-tour/1762575383256-1389-570.jpg"
                        alt="Wonderful Adventure through Korea, Singapore, Indonesia & Malaysia">
                </a>
                <div class="count-day">Featured</div>
                <a href="javascript:;" rel="nofollow" id="love_tour2012" onclick="love_tour(2012)"
                    class="heart-tour" title="Like"><i class="icon-font heart-empty"></i></a>
                <h2><a href="https://www.asiatours.com/tours/wonderful-adventure-through-korea-singapore-indonesia-malaysia.html"
                        title="Wonderful Adventure through Korea, Singapore, Indonesia & Malaysia">Wonderful
                        Adventure through Korea, Singapore, Indonesia & Malaysia</a></h2>
                <div class="expert-box">
                    <div>
                        <h6>AsiaTours Expert</h6>
                        <p>We are here to help you</p>
                    </div>
                    <div>
                        <img src="https://d2lwt6tidfiof0.cloudfront.net/images//otm_home/a4.webp"
                            data-img="https://d2lwt6tidfiof0.cloudfront.net/images//otm_home/a7.webp"
                            alt="Asia Tours Expert">
                    </div>
                </div>
            </div>
            <div class="body-box">
                <div class="address-box">
                    <div class="day-trip">
                        <img src="#"
                            data-img="https://d2lwt6tidfiof0.cloudfront.net/images/icon/wrap-img_optimized.png"
                            alt="">
                        <span><b>17</b>Days</span>
                    </div>
                    <address class="address">
                        <a href="https://www.asiatours.com/Seoul/" target="_blank" title="Seoul">Seoul</a>
                        → <a href="https://www.asiatours.com/Gyeongju/" target="_blank"
                            title="Gyeongju">Gyeongju</a>
                        → <a href="https://www.asiatours.com/Busan/" target="_blank" title="Busan">Busan</a>
                        → <a href="https://www.asiatours.com/Singapore/" target="_blank"
                            title="Singapore">Singapore</a>
                        → <a href="https://www.asiatours.com/Kuala-Lumpur/" target="_blank"
                            title="Kuala Lumpur">Kuala Lumpur</a>
                        → <a href="https://www.asiatours.com/Cameron-Highlands/" target="_blank"
                            title="Cameron Highlands">Cameron Highlands</a>
                        → <a href="https://www.asiatours.com/Malacca/" target="_blank"
                            title="Malacca">Malacca</a>
                        → <a href="https://www.asiatours.com/Java-Island/" target="_blank"
                            title="Java Island">Java Island</a>
                    </address>
                </div>
                <button class="btn-st2 tooltip" type="button">
                    <i class="icon-font icon-itine"></i>
                    <b>South Korea, Singapore, Malaysia, Indonesia</b>
                    <span>South Korea, Singapore, Malaysia, Indonesia</span>
                </button>
                <p class="paragraph">Embark on a culturally rich and wonderfully diverse journey that seamlessly
                    connects tradition, modernity, and tropical charm across Asia. Start in South Korea where
                    ancient palaces and traditional hanok villages meet modern skylines and vibrant markets.
                    Continue to dazzling Singapore, a city of...</p>
            </div>
            <div class="foot-trip">
                <div class="hand-picked">
                    <span>Handpicked:</span>
                    <div>
                        <a href="javascript:" class="tooltip tooltip-handpick">
                            <div>
                                <i class="icon-font bed"></i>
                                <font>Hotels</font>
                            </div>
                            <span>Handpicked Hotels</span>
                        </a>
                        <a href="javascript:" class="tooltip tooltip-handpick">
                            <div>
                                <i class="icon-font exchange"></i>
                                <i class="icon-font icon-plane"></i>
                                <font>Transfer</font>
                            </div>
                            <span>Private Car & Driver</span>
                        </a>
                        <a href="javascript:" class="tooltip tooltip-handpick">
                            <div>
                                <i class="icon-font spoon-knife"></i>
                                <font>Meals</font>
                            </div>
                            <span>Handpicked Restaurants</span>
                        </a>
                        <a href="javascript:" class="tooltip tooltip-handpick">
                            <div>
                                <i class="icon-font image"></i>
                                <font>Experiences</font>
                            </div>
                            <span>Tailored Unique Experiences</span>
                        </a>
                        <a href="javascript:" class="tooltip tooltip-handpick">
                            <div>
                                <i class="icon-font icon-users"></i>
                                <font>Experts</font>
                            </div>
                            <span>Private Guide & Trip Managers</span>
                        </a>
                    </div>
                </div>
                <span>Only from <strong>$6686</strong>/ person</span>
                <a class="btn-st2"
                    href="https://www.asiatours.com/tours/wonderful-adventure-through-korea-singapore-indonesia-malaysia.html"
                    title="Wonderful Adventure through Korea, Singapore, Indonesia & Malaysia">explore this trip
                    <font>&rarr;</font>
                </a>
            </div>
        </div>
        <div class="big-first-tour-box">
            <div class="head-box">
                <a href="https://www.asiatours.com/tours/family-adventure-across-vietnam-singapore-the-philippines.html"
                    class="img-box-st2" title="Family Adventure Across Vietnam, Singapore & the Philippines">
                    <img src="#"
                        data-img="https://d2lwt6tidfiof0.cloudfront.net/uploads/photo-tour/family-adventure-across-vietna995-1389-570.jpg"
                        alt="Family Adventure Across Vietnam, Singapore & the Philippines">
                </a>
                <div class="count-day">Featured</div>
                <a href="javascript:;" rel="nofollow" id="love_tour2034" onclick="love_tour(2034)"
                    class="heart-tour" title="Like"><i class="icon-font heart-empty"></i></a>
                <h2><a href="https://www.asiatours.com/tours/family-adventure-across-vietnam-singapore-the-philippines.html"
                        title="Family Adventure Across Vietnam, Singapore & the Philippines">Family Adventure
                        Across Vietnam, Singapore & the Philippines</a></h2>
                <div class="expert-box">
                    <div>
                        <h6>AsiaTours Expert</h6>
                        <p>We are here to help you</p>
                    </div>
                    <div>
                        <img src="https://d2lwt6tidfiof0.cloudfront.net/images//otm_home/a5.webp"
                            data-img="https://d2lwt6tidfiof0.cloudfront.net/images//otm_home/a6.webp"
                            alt="Asia Tours Expert">
                    </div>
                </div>
            </div>
            <div class="body-box">
                <div class="address-box">
                    <div class="day-trip">
                        <img src="#"
                            data-img="https://d2lwt6tidfiof0.cloudfront.net/images/icon/wrap-img_optimized.png"
                            alt="">
                        <span><b>24</b>Days</span>
                    </div>
                    <address class="address">
                        <a href="https://www.asiatours.com/Ho-Chi-Minh/" target="_blank" title="Ho Chi Minh">Ho
                            Chi Minh</a>
                        → <a href="https://www.asiatours.com/Mekong/" target="_blank" title="Mekong">Mekong</a>
                        → <a href="https://www.asiatours.com/Danang/" target="_blank" title="Danang">Danang</a>
                        → <a href="https://www.asiatours.com/Hoi-An/" target="_blank" title="Hoi An">Hoi An</a>
                        → <a href="https://www.asiatours.com/Hue/" target="_blank" title="Hue">Hue</a>
                        → <a href="https://www.asiatours.com/Hanoi/" target="_blank" title="Hanoi">Hanoi</a>
                        → <a href="https://www.asiatours.com/Ninh-Binh/" target="_blank" title="Ninh Binh">Ninh
                            Binh</a>
                        → <a href="https://www.asiatours.com/Halong-Bay/" target="_blank"
                            title="Halong Bay">Halong Bay</a>
                        → <a href="https://www.asiatours.com/Singapore/" target="_blank"
                            title="Singapore">Singapore</a>
                        → <a href="javascript:;">Visayas</a>
                        → <a href="javascript:;">Luzon</a>
                    </address>
                </div>
                <button class="btn-st2 tooltip" type="button">
                    <i class="icon-font icon-itine"></i>
                    <b>Vietnam, Singapore, Philippines</b>
                    <span>Vietnam, Singapore, Philippines</span>
                </button>
                <p class="paragraph">From charming countryside to dazzling cities, from majestic mountains to
                    azure seawaters, from rich heritages to modern delights, all are captured through the 24-day
                    family adventure across Vietnam, Singapore & the Philippines. This remarkable journey brings
                    your family from Vietnam’s cultural...</p>
            </div>
            <div class="foot-trip">
                <div class="hand-picked">
                    <span>Handpicked:</span>
                    <div>
                        <a href="javascript:" class="tooltip tooltip-handpick">
                            <div>
                                <i class="icon-font bed"></i>
                                <font>Hotels</font>
                            </div>
                            <span>Handpicked Hotels</span>
                        </a>
                        <a href="javascript:" class="tooltip tooltip-handpick">
                            <div>
                                <i class="icon-font exchange"></i>
                                <i class="icon-font icon-plane"></i>
                                <font>Transfer</font>
                            </div>
                            <span>Private Car & Driver</span>
                        </a>
                        <a href="javascript:" class="tooltip tooltip-handpick">
                            <div>
                                <i class="icon-font spoon-knife"></i>
                                <font>Meals</font>
                            </div>
                            <span>Handpicked Restaurants</span>
                        </a>
                        <a href="javascript:" class="tooltip tooltip-handpick">
                            <div>
                                <i class="icon-font image"></i>
                                <font>Experiences</font>
                            </div>
                            <span>Tailored Unique Experiences</span>
                        </a>
                        <a href="javascript:" class="tooltip tooltip-handpick">
                            <div>
                                <i class="icon-font icon-users"></i>
                                <font>Experts</font>
                            </div>
                            <span>Private Guide & Trip Managers</span>
                        </a>
                    </div>
                </div>
                <span>Only from <strong>$3750</strong>/ person</span>
                <a class="btn-st2"
                    href="https://www.asiatours.com/tours/family-adventure-across-vietnam-singapore-the-philippines.html"
                    title="Family Adventure Across Vietnam, Singapore & the Philippines">explore this trip
                    <font>&rarr;</font>
                </a>
            </div>
        </div>
        <div class="big-first-tour-box">
            <div class="head-box">
                <a href="https://www.asiatours.com/tours/wonders-of-the-east-thailand-philippines-vietnam.html"
                    class="img-box-st2" title="Wonders of the East: Thailand - Philippines - Vietnam">
                    <img src="#"
                        data-img="https://d2lwt6tidfiof0.cloudfront.net/uploads/photo-tour/wonders-of-the-east-thailand-p823-1389-570.jpg"
                        alt="Wonders of the East: Thailand - Philippines - Vietnam">
                </a>
                <div class="count-day">Featured</div>
                <a href="javascript:;" rel="nofollow" id="love_tour1987" onclick="love_tour(1987)"
                    class="heart-tour" title="Like"><i class="icon-font heart-empty"></i></a>
                <h2><a href="https://www.asiatours.com/tours/wonders-of-the-east-thailand-philippines-vietnam.html"
                        title="Wonders of the East: Thailand - Philippines - Vietnam">Wonders of the East:
                        Thailand - Philippines - Vietnam</a></h2>
                <div class="expert-box">
                    <div>
                        <h6>AsiaTours Expert</h6>
                        <p>We are here to help you</p>
                    </div>
                    <div>
                        <img src="https://d2lwt6tidfiof0.cloudfront.net/images//otm_home/a3.webp"
                            data-img="https://d2lwt6tidfiof0.cloudfront.net/images//otm_home/a5.webp"
                            alt="Asia Tours Expert">
                    </div>
                </div>
            </div>
            <div class="body-box">
                <div class="address-box">
                    <div class="day-trip">
                        <img src="#"
                            data-img="https://d2lwt6tidfiof0.cloudfront.net/images/icon/wrap-img_optimized.png"
                            alt="">
                        <span><b>16</b>Days</span>
                    </div>
                    <address class="address">
                        <a href="javascript:;">Luzon</a>
                        → <a href="javascript:;">Palawan</a>
                        → <a href="https://www.asiatours.com/Bangkok/" target="_blank"
                            title="Bangkok">Bangkok</a>
                        → <a href="https://www.asiatours.com/Chiang-Mai/" target="_blank"
                            title="Chiang Mai">Chiang Mai</a>
                        → <a href="https://www.asiatours.com/Chiang-Rai/" target="_blank"
                            title="Chiang Rai">Chiang Rai</a>
                        → <a href="https://www.asiatours.com/Hanoi/" target="_blank" title="Hanoi">Hanoi</a>
                        → <a href="https://www.asiatours.com/Halong-Bay/" target="_blank"
                            title="Halong Bay">Halong Bay</a>
                        → <a href="https://www.asiatours.com/Danang/" target="_blank" title="Danang">Danang</a>
                        → <a href="https://www.asiatours.com/Hoi-An/" target="_blank" title="Hoi An">Hoi An</a>
                    </address>
                </div>
                <button class="btn-st2 tooltip" type="button">
                    <i class="icon-font icon-itine"></i>
                    <b>Philippines, Thailand, Vietnam</b>
                    <span>Philippines, Thailand, Vietnam</span>
                </button>
                <p class="paragraph">Admire diverse wonders of Asia from nature to culture when joining in a
                    16-day adventure unveiling the best of the Philippines, Thailand, and Vietnam. Begin your
                    journey amid the pristine beaches and turquoise lagoons of El Nido before discovering
                    Thailand’s cultural treasures from the buzzing...</p>
            </div>
            <div class="foot-trip">
                <div class="hand-picked">
                    <span>Handpicked:</span>
                    <div>
                        <a href="javascript:" class="tooltip tooltip-handpick">
                            <div>
                                <i class="icon-font bed"></i>
                                <font>Hotels</font>
                            </div>
                            <span>Handpicked Hotels</span>
                        </a>
                        <a href="javascript:" class="tooltip tooltip-handpick">
                            <div>
                                <i class="icon-font exchange"></i>
                                <i class="icon-font icon-plane"></i>
                                <font>Transfer</font>
                            </div>
                            <span>Private Car & Driver</span>
                        </a>
                        <a href="javascript:" class="tooltip tooltip-handpick">
                            <div>
                                <i class="icon-font spoon-knife"></i>
                                <font>Meals</font>
                            </div>
                            <span>Handpicked Restaurants</span>
                        </a>
                        <a href="javascript:" class="tooltip tooltip-handpick">
                            <div>
                                <i class="icon-font image"></i>
                                <font>Experiences</font>
                            </div>
                            <span>Tailored Unique Experiences</span>
                        </a>
                        <a href="javascript:" class="tooltip tooltip-handpick">
                            <div>
                                <i class="icon-font icon-users"></i>
                                <font>Experts</font>
                            </div>
                            <span>Private Guide & Trip Managers</span>
                        </a>
                    </div>
                </div>
                <span>Only from <strong>$4266</strong>/ person</span>
                <a class="btn-st2"
                    href="https://www.asiatours.com/tours/wonders-of-the-east-thailand-philippines-vietnam.html"
                    title="Wonders of the East: Thailand - Philippines - Vietnam">explore this trip <font>&rarr;
                    </font></a>
            </div>
        </div>
        <div class="big-first-tour-box">
            <div class="head-box">
                <a href="https://www.asiatours.com/tours/epic-exploration-of-nepal-and-bhutan.html"
                    class="img-box-st2" title="Epic Exploration of Nepal and Bhutan">
                    <img src="#"
                        data-img="https://d2lwt6tidfiof0.cloudfront.net/uploads/photo-tour/1760437816154-1389-570.jpg"
                        alt="Epic Exploration of Nepal and Bhutan">
                </a>
                <div class="count-day">Featured</div>
                <a href="javascript:;" rel="nofollow" id="love_tour1976" onclick="love_tour(1976)"
                    class="heart-tour" title="Like"><i class="icon-font heart-empty"></i></a>
                <h2><a href="https://www.asiatours.com/tours/epic-exploration-of-nepal-and-bhutan.html"
                        title="Epic Exploration of Nepal and Bhutan">Epic Exploration of Nepal and Bhutan</a>
                </h2>
                <div class="expert-box">
                    <div>
                        <h6>AsiaTours Expert</h6>
                        <p>We are here to help you</p>
                    </div>
                    <div>
                        <img src="https://d2lwt6tidfiof0.cloudfront.net/images//otm_home/a2.webp"
                            data-img="https://d2lwt6tidfiof0.cloudfront.net/images//otm_home/a7.webp"
                            alt="Asia Tours Expert">
                    </div>
                </div>
            </div>
            <div class="body-box">
                <div class="address-box">
                    <div class="day-trip">
                        <img src="#"
                            data-img="https://d2lwt6tidfiof0.cloudfront.net/images/icon/wrap-img_optimized.png"
                            alt="">
                        <span><b>10</b>Days</span>
                    </div>
                    <address class="address">
                        <a href="https://www.asiatours.com/Kathmandu/" target="_blank"
                            title="Kathmandu">Kathmandu</a>
                        → <a href="https://www.asiatours.com/Nagarkot/" target="_blank"
                            title="Nagarkot">Nagarkot</a>
                        → <a href="https://www.asiatours.com/Paro/" target="_blank" title="Paro">Paro</a>
                        → <a href="https://www.asiatours.com/Thimphu/" target="_blank"
                            title="Thimphu">Thimphu</a>
                    </address>
                </div>
                <button class="btn-st2 tooltip" type="button">
                    <i class="icon-font icon-itine"></i>
                    <b>Nepal, Bhutan</b>
                    <span>Nepal, Bhutan</span>
                </button>
                <p class="paragraph">Two hidden gems of the Himalayas show you a very unique way of Asia,
                    reflecting a captivating piece in the rich tapestry of Asian cultural diversity. This
                    remarkable 10-day adventure takes you from Nepal’s bustling heritage-filled capital of
                    Kathmandu and serene sunrise viewpoint in Nagarkot to...</p>
            </div>
            <div class="foot-trip">
                <div class="hand-picked">
                    <span>Handpicked:</span>
                    <div>
                        <a href="javascript:" class="tooltip tooltip-handpick">
                            <div>
                                <i class="icon-font bed"></i>
                                <font>Hotels</font>
                            </div>
                            <span>Handpicked Hotels</span>
                        </a>
                        <a href="javascript:" class="tooltip tooltip-handpick">
                            <div>
                                <i class="icon-font exchange"></i>
                                <i class="icon-font icon-plane"></i>
                                <font>Transfer</font>
                            </div>
                            <span>Private Car & Driver</span>
                        </a>
                        <a href="javascript:" class="tooltip tooltip-handpick">
                            <div>
                                <i class="icon-font spoon-knife"></i>
                                <font>Meals</font>
                            </div>
                            <span>Handpicked Restaurants</span>
                        </a>
                        <a href="javascript:" class="tooltip tooltip-handpick">
                            <div>
                                <i class="icon-font image"></i>
                                <font>Experiences</font>
                            </div>
                            <span>Tailored Unique Experiences</span>
                        </a>
                        <a href="javascript:" class="tooltip tooltip-handpick">
                            <div>
                                <i class="icon-font icon-users"></i>
                                <font>Experts</font>
                            </div>
                            <span>Private Guide & Trip Managers</span>
                        </a>
                    </div>
                </div>
                <span>Only from <strong>$3152</strong>/ person</span>
                <a class="btn-st2"
                    href="https://www.asiatours.com/tours/epic-exploration-of-nepal-and-bhutan.html"
                    title="Epic Exploration of Nepal and Bhutan">explore this trip <font>&rarr;</font></a>
            </div>
        </div>
        <div class="big-first-tour-box">
            <div class="head-box">
                <a href="https://www.asiatours.com/tours/sophisticated-journey-through-japan-singapore-thailand.html"
                    class="img-box-st2" title="Sophisticated Journey Through Japan, Singapore & Thailand">
                    <img src="#"
                        data-img="https://d2lwt6tidfiof0.cloudfront.net/uploads/photo-tour/1762515366533-1389-570.jpg"
                        alt="Sophisticated Journey Through Japan, Singapore & Thailand">
                </a>
                <div class="count-day">Featured</div>
                <a href="javascript:;" rel="nofollow" id="love_tour2037" onclick="love_tour(2037)"
                    class="heart-tour" title="Like"><i class="icon-font heart-empty"></i></a>
                <h2><a href="https://www.asiatours.com/tours/sophisticated-journey-through-japan-singapore-thailand.html"
                        title="Sophisticated Journey Through Japan, Singapore & Thailand">Sophisticated Journey
                        Through Japan, Singapore & Thailand</a></h2>
                <div class="expert-box">
                    <div>
                        <h6>AsiaTours Expert</h6>
                        <p>We are here to help you</p>
                    </div>
                    <div>
                        <img src="https://d2lwt6tidfiof0.cloudfront.net/images//otm_home/a1.webp"
                            data-img="https://d2lwt6tidfiof0.cloudfront.net/images//otm_home/a6.webp"
                            alt="Asia Tours Expert">
                    </div>
                </div>
            </div>
            <div class="body-box">
                <div class="address-box">
                    <div class="day-trip">
                        <img src="#"
                            data-img="https://d2lwt6tidfiof0.cloudfront.net/images/icon/wrap-img_optimized.png"
                            alt="">
                        <span><b>16</b>Days</span>
                    </div>
                    <address class="address">
                        <a href="https://www.asiatours.com/Tokyo/" target="_blank" title="Tokyo">Tokyo</a>
                        → <a href="https://www.asiatours.com/Kyoto/" target="_blank" title="Kyoto">Kyoto</a>
                        → <a href="https://www.asiatours.com/Osaka/" target="_blank" title="Osaka">Osaka</a>
                        → <a href="https://www.asiatours.com/Singapore/" target="_blank"
                            title="Singapore">Singapore</a>
                        → <a href="https://www.asiatours.com/Bangkok/" target="_blank"
                            title="Bangkok">Bangkok</a>
                        → <a href="https://www.asiatours.com/Ayutthaya/" target="_blank"
                            title="Ayutthaya">Ayutthaya</a>
                        → <a href="https://www.asiatours.com/Phuket/" target="_blank" title="Phuket">Phuket</a>
                    </address>
                </div>
                <button class="btn-st2 tooltip" type="button">
                    <i class="icon-font icon-itine"></i>
                    <b>Japan, Singapore, Thailand</b>
                    <span>Japan, Singapore, Thailand</span>
                </button>
                <p class="paragraph">Indulge in an unforgettable 16-day voyage through Asia’s most iconic
                    destinations, tailor-made for travelers who appreciate culture, scenery, and seamless
                    luxury. Begin in Japan with the vibrant metropolis of Tokyo, the ancient temples of Kyoto,
                    and the energetic charm of Osaka - all enriched by...</p>
            </div>
            <div class="foot-trip">
                <div class="hand-picked">
                    <span>Handpicked:</span>
                    <div>
                        <a href="javascript:" class="tooltip tooltip-handpick">
                            <div>
                                <i class="icon-font bed"></i>
                                <font>Hotels</font>
                            </div>
                            <span>Handpicked Hotels</span>
                        </a>
                        <a href="javascript:" class="tooltip tooltip-handpick">
                            <div>
                                <i class="icon-font exchange"></i>
                                <i class="icon-font icon-plane"></i>
                                <font>Transfer</font>
                            </div>
                            <span>Private Car & Driver</span>
                        </a>
                        <a href="javascript:" class="tooltip tooltip-handpick">
                            <div>
                                <i class="icon-font spoon-knife"></i>
                                <font>Meals</font>
                            </div>
                            <span>Handpicked Restaurants</span>
                        </a>
                        <a href="javascript:" class="tooltip tooltip-handpick">
                            <div>
                                <i class="icon-font image"></i>
                                <font>Experiences</font>
                            </div>
                            <span>Tailored Unique Experiences</span>
                        </a>
                        <a href="javascript:" class="tooltip tooltip-handpick">
                            <div>
                                <i class="icon-font icon-users"></i>
                                <font>Experts</font>
                            </div>
                            <span>Private Guide & Trip Managers</span>
                        </a>
                    </div>
                </div>
                <span>Only from <strong>$9920</strong>/ person</span>
                <a class="btn-st2"
                    href="https://www.asiatours.com/tours/sophisticated-journey-through-japan-singapore-thailand.html"
                    title="Sophisticated Journey Through Japan, Singapore & Thailand">explore this trip <font>
                        &rarr;</font></a>
            </div>
        </div>

        <div class="view-more-wrap">
            <a href="https://www.asiatours.com/multi-country/" title="Multi-Country Asia Tour Packages"
                class="link-st3">MULTI-COUNTRY ASIA TOUR PACKAGES</a>
        </div>
    </div>
    <div class="wrap-mini-intro" style="width:80%">
        <h2 class="title-h2-line">Asia Tours 11 - 16 Days</h2>

    </div>
    <div class="container">
        <div class="wrap-slide-st8" style="margin-bottom:0px;">
            <div class="gallery">
                <div class="col-xlg-4 col-lg-6 col-md-12" style="margin-bottom: 20px;">
                    <article class="trip trip-itine">
                        <a href="https://www.asiatours.com/tours/japan-china-luxe-voyage.html"
                            title="Japan & China Luxe Voyage"><img
                                src="https://d2lwt6tidfiof0.cloudfront.net/uploads/photo-tour/japan-and-china-luxury-tour-pa164-820-440.jpg"
                                data-img="https://d2lwt6tidfiof0.cloudfront.net/uploads/photo-tour/japan-and-china-luxury-tour-pa164-820-440.jpg"
                                alt=""></a>
                        <a href="javascript:;" rel="nofollow" id="love_tour2016" onclick="love_tour(2016)"
                            class="heart-tour" title="Like"><i class="icon-font heart-empty"></i></a>
                        <div class="content-trip">
                            <h3 class="title-h2-line"><a
                                    href="https://www.asiatours.com/tours/japan-china-luxe-voyage.html">Japan &
                                    China Luxe Voyage</a></h3>
                            <span>14 days from <strong>$9890</strong>/ person</span>
                            <p class="paragraph">Embark on an ultra-luxe 2-week journey exploring the best of
                                Japan and China with a pleasant classic itinerary across iconic attractions and
                                timeless heritage sites. Begin your adventure in Tokyo and Kyoto, where ancient
                                traditions blend seamlessly with modern sophistication, complemented by a...</p>
                        </div>
                        <div class="count-day">Japan, China</div>
                        <div class="wrap-tooltip-itine">
                            <div class="tooltip">
                                <i class="icon-font icon-itine"></i>
                                <span>Tokyo &rarr; Kyoto &rarr; Nara &rarr; Osaka &rarr; Beijing &rarr; Xian
                                    &rarr; Chengdu</span>
                            </div>
                        </div>
                        <div class="wrap-tooltip">
                            <a href="javascript:;" title="Cultural" class="tooltip"><i
                                    class="icon-font icon-cultural"></i><span>cultural<i></i></span></a> <a
                                href="javascript:;" title="Heritage" class="tooltip"><i
                                    class="icon-font icon-heritage"></i><span>heritage<i></i></span></a> <a
                                href="javascript:;" title="Nature" class="tooltip"><i
                                    class="icon-font icon-nature"></i><span>nature<i></i></span></a> <a
                                href="javascript:;" title="Cuisine" class="tooltip"><i
                                    class="icon-font icon-cuisine"></i><span>cuisine<i></i></span></a> <a
                                href="javascript:;" title="Adventure" class="tooltip"><i
                                    class="icon-font icon-adventure"></i><span>adventure<i></i></span></a> <a
                                href="javascript:;" title="Wildlife" class="tooltip"><i
                                    class="icon-font icon-wildlife"></i><span>wildlife<i></i></span></a> <a
                                href="javascript:;" title="History" class="tooltip"><i
                                    class="icon-font icon-history"></i><span>history<i></i></span></a>
                        </div>
                        <a class="btn-st2"
                            href="https://www.asiatours.com/tours/japan-china-luxe-voyage.html">explore this
                            trip</a>
                    </article>
                </div>
                <div class="col-xlg-4 col-lg-6 col-md-12" style="margin-bottom: 20px;">
                    <article class="trip trip-itine">
                        <a href="https://www.asiatours.com/tours/perfect-blend-of-singapore-malaysia-thailand-tour.html"
                            title="Perfect Blend of Singapore, Malaysia & Thailand Tour"><img
                                src="https://d2lwt6tidfiof0.cloudfront.net/uploads/photo-tour/perfect-blend-of-singapore-mal67-820-440.jpg"
                                data-img="https://d2lwt6tidfiof0.cloudfront.net/uploads/photo-tour/perfect-blend-of-singapore-mal67-820-440.jpg"
                                alt=""></a>
                        <a href="javascript:;" rel="nofollow" id="love_tour1723" onclick="love_tour(1723)"
                            class="heart-tour" title="Like"><i class="icon-font heart-empty"></i></a>
                        <div class="content-trip">
                            <h3 class="title-h2-line"><a
                                    href="https://www.asiatours.com/tours/perfect-blend-of-singapore-malaysia-thailand-tour.html">Perfect
                                    Blend of Singapore, Malaysia & Thailand Tour</a></h3>
                            <span>12 days from <strong>$3156</strong>/ person</span>
                            <p class="paragraph">Uncovering the history richness and distinct cultural blend in
                                the trio of fantastic countries: Singapore, Malaysia & Thailand, this 12-day
                                tour package is a true amazing expedition combining both classic routes and
                                active local experiences. Specially made for dynamic highlights-oriented buffs,
                                the...</p>
                        </div>
                        <div class="count-day">Singapore, Malaysia, Thailand</div>
                        <div class="wrap-tooltip-itine">
                            <div class="tooltip">
                                <i class="icon-font icon-itine"></i>
                                <span>Singapore &rarr; Sentosa Island &rarr; Kuala Lumpur &rarr; Malacca &rarr;
                                    Bangkok &rarr; Ayutthaya &rarr; Chiang Mai &rarr; Chiang Rai</span>
                            </div>
                        </div>
                        <div class="wrap-tooltip">
                            <a href="javascript:;" title="Cultural" class="tooltip"><i
                                    class="icon-font icon-cultural"></i><span>cultural<i></i></span></a> <a
                                href="javascript:;" title="Heritage" class="tooltip"><i
                                    class="icon-font icon-heritage"></i><span>heritage<i></i></span></a> <a
                                href="javascript:;" title="Nature" class="tooltip"><i
                                    class="icon-font icon-nature"></i><span>nature<i></i></span></a> <a
                                href="javascript:;" title="Adventure" class="tooltip"><i
                                    class="icon-font icon-adventure"></i><span>adventure<i></i></span></a> <a
                                href="javascript:;" title="History" class="tooltip"><i
                                    class="icon-font icon-history"></i><span>history<i></i></span></a>
                        </div>
                        <a class="btn-st2"
                            href="https://www.asiatours.com/tours/perfect-blend-of-singapore-malaysia-thailand-tour.html">explore
                            this trip</a>
                    </article>
                </div>
                <div class="col-xlg-4 col-lg-6 col-md-12" style="margin-bottom: 20px;">
                    <article class="trip trip-itine">
                        <a href="https://www.asiatours.com/tours/timeless-beauty-of-south-korea-japan.html"
                            title="Timeless Beauty of South Korea & Japan"><img
                                src="https://d2lwt6tidfiof0.cloudfront.net/uploads/photo-tour/269-820-440.jpg"
                                data-img="https://d2lwt6tidfiof0.cloudfront.net/uploads/photo-tour/269-820-440.jpg"
                                alt=""></a>
                        <a href="javascript:;" rel="nofollow" id="love_tour1904" onclick="love_tour(1904)"
                            class="heart-tour" title="Like"><i class="icon-font heart-empty"></i></a>
                        <div class="content-trip">
                            <h3 class="title-h2-line"><a
                                    href="https://www.asiatours.com/tours/timeless-beauty-of-south-korea-japan.html">Timeless
                                    Beauty of South Korea & Japan</a></h3>
                            <span>14 days from <strong>$8225</strong>/ person</span>
                            <p class="paragraph">As the name, let's unveil the timeless beauty of two wonderful
                                East Asian countries where contemporary modern culture meets well-preserved
                                traditions and history. Explore South Korea from North to South through
                                prominent destinations including bustling capital metropolis of Seoul, historic
                                city of...</p>
                        </div>
                        <div class="count-day">South Korea, Japan</div>
                        <div class="wrap-tooltip-itine">
                            <div class="tooltip">
                                <i class="icon-font icon-itine"></i>
                                <span>Seoul &rarr; Gyeongju &rarr; Busan &rarr; Osaka &rarr; Kyoto &rarr;
                                    Kanagawa &rarr; Tokyo</span>
                            </div>
                        </div>
                        <div class="wrap-tooltip">
                            <a href="javascript:;" title="Boating" class="tooltip"><i
                                    class="icon-font icon-boating"></i><span>boating<i></i></span></a> <a
                                href="javascript:;" title="Cultural" class="tooltip"><i
                                    class="icon-font icon-cultural"></i><span>cultural<i></i></span></a> <a
                                href="javascript:;" title="Heritage" class="tooltip"><i
                                    class="icon-font icon-heritage"></i><span>heritage<i></i></span></a> <a
                                href="javascript:;" title="Nature" class="tooltip"><i
                                    class="icon-font icon-nature"></i><span>nature<i></i></span></a> <a
                                href="javascript:;" title="Wildlife" class="tooltip"><i
                                    class="icon-font icon-wildlife"></i><span>wildlife<i></i></span></a> <a
                                href="javascript:;" title="History" class="tooltip"><i
                                    class="icon-font icon-history"></i><span>history<i></i></span></a>
                        </div>
                        <a class="btn-st2"
                            href="https://www.asiatours.com/tours/timeless-beauty-of-south-korea-japan.html">explore
                            this trip</a>
                    </article>
                </div>
            </div>
        </div>
        <div class="view-more-wrap">
            <a href="https://www.asiatours.com/11-16/" title="Asia Tours 11 - 16 Days" class="link-st3"
                target="_blank">ALL ASIA TOURS 11 - 16 DAYS</a>
        </div>
    </div>
    <div class="wrap-mini-intro" style="width:80%">
        <h2 class="title-h2-line">Asia Tours 6 - 10 Days</h2>

    </div>
    <div class="container">
        <div class="wrap-slide-st8" style="margin-bottom:0px;">
            <div class="gallery">
                <div class="col-xlg-4 col-lg-6 col-md-12" style="margin-bottom: 20px;">
                    <article class="trip trip-itine">
                        <a href="https://www.asiatours.com/tours/explore-japan-south-korea-iconic-sights.html"
                            title="Explore Japan & South Korea Iconic Sights"><img src="#"
                                data-img="https://d2lwt6tidfiof0.cloudfront.net/uploads/photo-tour/1760547671644-820-440.jpg"
                                alt=""></a>
                        <a href="javascript:;" rel="nofollow" id="love_tour1979" onclick="love_tour(1979)"
                            class="heart-tour" title="Like"><i class="icon-font heart-empty"></i></a>
                        <div class="content-trip">
                            <h3 class="title-h2-line"><a
                                    href="https://www.asiatours.com/tours/explore-japan-south-korea-iconic-sights.html">Explore
                                    Japan & South Korea Iconic Sights</a></h3>
                            <span>10 days from <strong>$5136</strong>/ person</span>
                            <p class="paragraph">As the name, this 10-day journey offers a perfect glimpse of
                                East Asian essence, covering miracles across neighboring countries of South
                                Korea and Japan. From the dazzling metropolis of Tokyo, where cutting-edge
                                technology coexists with age-old traditions, the iconic majesty of Mt. Fuji and
                                rich...</p>
                        </div>
                        <div class="count-day">Japan, South Korea</div>
                        <div class="wrap-tooltip-itine">
                            <div class="tooltip">
                                <i class="icon-font icon-itine"></i>
                                <span>Tokyo &rarr; Busan &rarr; Seoul</span>
                            </div>
                        </div>
                        <div class="wrap-tooltip">
                            <a href="javascript:;" title="Cultural" class="tooltip"><i
                                    class="icon-font icon-cultural"></i><span>cultural<i></i></span></a> <a
                                href="javascript:;" title="Heritage" class="tooltip"><i
                                    class="icon-font icon-heritage"></i><span>heritage<i></i></span></a> <a
                                href="javascript:;" title="Nature" class="tooltip"><i
                                    class="icon-font icon-nature"></i><span>nature<i></i></span></a> <a
                                href="javascript:;" title="History" class="tooltip"><i
                                    class="icon-font icon-history"></i><span>history<i></i></span></a>
                        </div>
                        <a class="btn-st2"
                            href="https://www.asiatours.com/tours/explore-japan-south-korea-iconic-sights.html">explore
                            this trip</a>
                    </article>
                </div>
                <div class="col-xlg-4 col-lg-6 col-md-12" style="margin-bottom: 20px;">
                    <article class="trip trip-itine">
                        <a href="https://www.asiatours.com/tours/best-bali-indepth-tour.html"
                            title="Best Bali Indepth Tour"><img src="#"
                                data-img="https://d2lwt6tidfiof0.cloudfront.net/uploads/photo-tour/1746107325462-820-440.jpg"
                                alt=""></a>
                        <a href="javascript:;" rel="nofollow" id="love_tour1943" onclick="love_tour(1943)"
                            class="heart-tour" title="Like"><i class="icon-font heart-empty"></i></a>
                        <div class="content-trip">
                            <h3 class="title-h2-line"><a
                                    href="https://www.asiatours.com/tours/best-bali-indepth-tour.html">Best Bali
                                    Indepth Tour</a></h3>
                            <span>10 days from <strong>$3320</strong>/ person</span>
                            <p class="paragraph">Discover the cultural heart and serene natural beauty of
                                Indonesia with our Best Bali Indepth Tour, a bespoke 10-day journey designed for
                                travelers seeking authentic and immersive experiences. This enriching itinerary
                                begins in Bali, where you'll explore the temples haven of Ubud, wander
                                through...</p>
                        </div>
                        <div class="count-day">Indonesia</div>
                        <div class="wrap-tooltip-itine">
                            <div class="tooltip">
                                <i class="icon-font icon-itine"></i>
                                <span>Bali Island &rarr; West Nusa Tenggara</span>
                            </div>
                        </div>
                        <div class="wrap-tooltip">
                            <a href="javascript:;" title="Swimming" class="tooltip"><i
                                    class="icon-font icon-swimming"></i><span>swimming<i></i></span></a> <a
                                href="javascript:;" title="Boating" class="tooltip"><i
                                    class="icon-font icon-boating"></i><span>boating<i></i></span></a> <a
                                href="javascript:;" title="Cultural" class="tooltip"><i
                                    class="icon-font icon-cultural"></i><span>cultural<i></i></span></a> <a
                                href="javascript:;" title="Heritage" class="tooltip"><i
                                    class="icon-font icon-heritage"></i><span>heritage<i></i></span></a> <a
                                href="javascript:;" title="Nature" class="tooltip"><i
                                    class="icon-font icon-nature"></i><span>nature<i></i></span></a> <a
                                href="javascript:;" title="Cuisine" class="tooltip"><i
                                    class="icon-font icon-cuisine"></i><span>cuisine<i></i></span></a> <a
                                href="javascript:;" title="Kayaking" class="tooltip"><i
                                    class="icon-font icon-kayaking"></i><span>kayaking<i></i></span></a> <a
                                href="javascript:;" title="Beach" class="tooltip"><i
                                    class="icon-font icon-beach"></i><span>beach<i></i></span></a>
                        </div>
                        <a class="btn-st2"
                            href="https://www.asiatours.com/tours/best-bali-indepth-tour.html">explore this
                            trip</a>
                    </article>
                </div>
                <div class="col-xlg-4 col-lg-6 col-md-12" style="margin-bottom: 20px;">
                    <article class="trip trip-itine">
                        <a href="https://www.asiatours.com/tours/explore-bangkok-city-surroundings.html"
                            title="Explore Bangkok City & Surroundings"><img src="#"
                                data-img="https://d2lwt6tidfiof0.cloudfront.net/uploads/photo-tour/574-820-440.jpg"
                                alt=""></a>
                        <a href="javascript:;" rel="nofollow" id="love_tour1832" onclick="love_tour(1832)"
                            class="heart-tour" title="Like"><i class="icon-font heart-empty"></i></a>
                        <div class="content-trip">
                            <h3 class="title-h2-line"><a
                                    href="https://www.asiatours.com/tours/explore-bangkok-city-surroundings.html">Explore
                                    Bangkok City & Surroundings</a></h3>
                            <span>6 days from <strong>$827</strong>/ person</span>
                            <p class="paragraph">Welcome to Bangkok, one of the most enchanting cities in Asia!
                                Within 6 days in this package, we purposely hand-picked the most highlighted
                                destinations in Bangkok and neighboring attractions just to offer any choosing
                                this package the chance to unveil the city's colorful glamor and beyond,
                                ranging...</p>
                        </div>
                        <div class="count-day">Thailand</div>
                        <div class="wrap-tooltip-itine">
                            <div class="tooltip">
                                <i class="icon-font icon-itine"></i>
                                <span>Bangkok</span>
                            </div>
                        </div>
                        <div class="wrap-tooltip">
                            <a href="javascript:;" title="Boating" class="tooltip"><i
                                    class="icon-font icon-boating"></i><span>boating<i></i></span></a> <a
                                href="javascript:;" title="Cultural" class="tooltip"><i
                                    class="icon-font icon-cultural"></i><span>cultural<i></i></span></a> <a
                                href="javascript:;" title="Heritage" class="tooltip"><i
                                    class="icon-font icon-heritage"></i><span>heritage<i></i></span></a> <a
                                href="javascript:;" title="Nature" class="tooltip"><i
                                    class="icon-font icon-nature"></i><span>nature<i></i></span></a> <a
                                href="javascript:;" title="Wildlife" class="tooltip"><i
                                    class="icon-font icon-wildlife"></i><span>wildlife<i></i></span></a> <a
                                href="javascript:;" title="History" class="tooltip"><i
                                    class="icon-font icon-history"></i><span>history<i></i></span></a>
                        </div>
                        <a class="btn-st2"
                            href="https://www.asiatours.com/tours/explore-bangkok-city-surroundings.html">explore
                            this trip</a>
                    </article>
                </div>
            </div>
        </div>
        <div class="view-more-wrap">
            <a href="https://www.asiatours.com/6-10/" title="Asia Tours 6 - 10 Days" class="link-st3"
                target="_blank">ALL ASIA TOURS 6 - 10 DAYS</a>
        </div>
    </div>
    <div class="wrap-mini-intro" style="width:80%">
        <h2 class="title-h2-line">Asia Tours 2 - 5 Days</h2>

    </div>
    <div class="container">
        <div class="wrap-slide-st8" style="margin-bottom:0px;">
            <div class="gallery">
                <div class="col-xlg-4 col-lg-6 col-md-12" style="margin-bottom: 20px;">
                    <article class="trip trip-itine">
                        <a href="https://www.asiatours.com/tours/komodo-island-and-yogyakarta-tour.html"
                            title="Komodo Island and Yogyakarta Tour"><img src="#"
                                data-img="https://d2lwt6tidfiof0.cloudfront.net/uploads/photo-tour/220-820-440.jpg"
                                alt=""></a>
                        <a href="javascript:;" rel="nofollow" id="love_tour1833" onclick="love_tour(1833)"
                            class="heart-tour" title="Like"><i class="icon-font heart-empty"></i></a>
                        <div class="content-trip">
                            <h3 class="title-h2-line"><a
                                    href="https://www.asiatours.com/tours/komodo-island-and-yogyakarta-tour.html">Komodo
                                    Island and Yogyakarta Tour</a></h3>
                            <span>5 days from <strong>$1880</strong>/ person</span>
                            <p class="paragraph">If you have big fond of inspiring outdoor activities and
                                impressive local highlights, welcome to our exhilarating 5-day adventure that
                                will take you through the captivating landscapes and rich cultural heritage of
                                Indonesia. Our exclusive tour package combines the breathtaking scenery of
                                Flores...</p>
                        </div>
                        <div class="count-day">Indonesia</div>
                        <div class="wrap-tooltip-itine">
                            <div class="tooltip">
                                <i class="icon-font icon-itine"></i>
                                <span>Bali Island &rarr; Flores Island &rarr; Komodo Island &rarr; Java
                                    Island</span>
                            </div>
                        </div>
                        <div class="wrap-tooltip">
                            <a href="javascript:;" title="Swimming" class="tooltip"><i
                                    class="icon-font icon-swimming"></i><span>swimming<i></i></span></a> <a
                                href="javascript:;" title="Cruising" class="tooltip"><i
                                    class="icon-font icon-cruising"></i><span>cruising<i></i></span></a> <a
                                href="javascript:;" title="Cultural" class="tooltip"><i
                                    class="icon-font icon-cultural"></i><span>cultural<i></i></span></a> <a
                                href="javascript:;" title="Heritage" class="tooltip"><i
                                    class="icon-font icon-heritage"></i><span>heritage<i></i></span></a> <a
                                href="javascript:;" title="Nature" class="tooltip"><i
                                    class="icon-font icon-nature"></i><span>nature<i></i></span></a> <a
                                href="javascript:;" title="Beach" class="tooltip"><i
                                    class="icon-font icon-beach"></i><span>beach<i></i></span></a> <a
                                href="javascript:;" title="Wildlife" class="tooltip"><i
                                    class="icon-font icon-wildlife"></i><span>wildlife<i></i></span></a>
                        </div>
                        <a class="btn-st2"
                            href="https://www.asiatours.com/tours/komodo-island-and-yogyakarta-tour.html">explore
                            this trip</a>
                    </article>
                </div>
                <div class="col-xlg-4 col-lg-6 col-md-12" style="margin-bottom: 20px;">
                    <article class="trip trip-itine">
                        <a href="https://www.asiatours.com/tours/5-days-golden-triangle-tour.html"
                            title="Best of Northern Thailand"><img src="#"
                                data-img="https://d2lwt6tidfiof0.cloudfront.net/uploads/photo-tour/5-days-golden-triangle-tour701-820-440.jpg"
                                alt=""></a>
                        <a href="javascript:;" rel="nofollow" id="love_tour1289" onclick="love_tour(1289)"
                            class="heart-tour" title="Like"><i class="icon-font heart-empty"></i></a>
                        <div class="content-trip">
                            <h3 class="title-h2-line"><a
                                    href="https://www.asiatours.com/tours/5-days-golden-triangle-tour.html">Best
                                    of Northern Thailand</a></h3>
                            <span>5 days from <strong>$935</strong>/ person</span>
                            <p class="paragraph">This amazing 5-day tour has been well-tailored and hand-picked
                                for explorers and culture lovers to take in the spectacular beauty of the Golden
                                Triangle in northern Thailand. Mainly focusing on the two charming cities of the
                                north, Chiang Rai & Chiang Mai, this journey offers you various chances to...
                            </p>
                        </div>
                        <div class="count-day">Thailand</div>
                        <div class="wrap-tooltip-itine">
                            <div class="tooltip">
                                <i class="icon-font icon-itine"></i>
                                <span>Chiang Rai &rarr; Chiang Mai</span>
                            </div>
                        </div>
                        <div class="wrap-tooltip">
                            <a href="javascript:;" title="Boating" class="tooltip"><i
                                    class="icon-font icon-boating"></i><span>boating<i></i></span></a> <a
                                href="javascript:;" title="Ethnic" class="tooltip"><i
                                    class="icon-font icon-ethnic"></i><span>ethnic<i></i></span></a> <a
                                href="javascript:;" title="Cultural" class="tooltip"><i
                                    class="icon-font icon-cultural"></i><span>cultural<i></i></span></a> <a
                                href="javascript:;" title="Nature" class="tooltip"><i
                                    class="icon-font icon-nature"></i><span>nature<i></i></span></a> <a
                                href="javascript:;" title="Cuisine" class="tooltip"><i
                                    class="icon-font icon-cuisine"></i><span>cuisine<i></i></span></a> <a
                                href="javascript:;" title="History" class="tooltip"><i
                                    class="icon-font icon-history"></i><span>history<i></i></span></a>
                        </div>
                        <a class="btn-st2"
                            href="https://www.asiatours.com/tours/5-days-golden-triangle-tour.html">explore this
                            trip</a>
                    </article>
                </div>
                <div class="col-xlg-4 col-lg-6 col-md-12" style="margin-bottom: 20px;">
                    <article class="trip trip-itine">
                        <a href="https://www.asiatours.com/tours/hanoi-halong-bay-ninh-binh-tour.html"
                            title="Northern Vietnam Highlights"><img src="#"
                                data-img="https://d2lwt6tidfiof0.cloudfront.net/uploads/photo-tour/hanoi-halong-bay-ninh-binh-tou245-820-440.jpg"
                                alt=""></a>
                        <a href="javascript:;" rel="nofollow" id="love_tour1034" onclick="love_tour(1034)"
                            class="heart-tour" title="Like"><i class="icon-font heart-empty"></i></a>
                        <div class="content-trip">
                            <h3 class="title-h2-line"><a
                                    href="https://www.asiatours.com/tours/hanoi-halong-bay-ninh-binh-tour.html">Northern
                                    Vietnam Highlights</a></h3>
                            <span>5 days from <strong>$837</strong>/ person</span>
                            <p class="paragraph">This package of Hanoi – Ha Long – Ninh Binh 5 days offers us to
                                explore the best highlights and the most stunning scenery of Vietnam Northern :
                                Hanoi - the unique Asian city with tree-lined boulevards, French colonial
                                architecture, peaceful lakes and oriental pagodas and temples; the history of...
                            </p>
                        </div>
                        <div class="count-day">Vietnam</div>
                        <div class="wrap-tooltip-itine">
                            <div class="tooltip">
                                <i class="icon-font icon-itine"></i>
                                <span>Hanoi &rarr; Ninh Binh &rarr; Halong Bay</span>
                            </div>
                        </div>
                        <div class="wrap-tooltip">
                            <a href="javascript:;" title="Swimming" class="tooltip"><i
                                    class="icon-font icon-swimming"></i><span>swimming<i></i></span></a> <a
                                href="javascript:;" title="Cruising" class="tooltip"><i
                                    class="icon-font icon-cruising"></i><span>cruising<i></i></span></a> <a
                                href="javascript:;" title="Cultural" class="tooltip"><i
                                    class="icon-font icon-cultural"></i><span>cultural<i></i></span></a> <a
                                href="javascript:;" title="Heritage" class="tooltip"><i
                                    class="icon-font icon-heritage"></i><span>heritage<i></i></span></a> <a
                                href="javascript:;" title="Nature" class="tooltip"><i
                                    class="icon-font icon-nature"></i><span>nature<i></i></span></a> <a
                                href="javascript:;" title="Kayaking" class="tooltip"><i
                                    class="icon-font icon-kayaking"></i><span>kayaking<i></i></span></a> <a
                                href="javascript:;" title="History" class="tooltip"><i
                                    class="icon-font icon-history"></i><span>history<i></i></span></a>
                        </div>
                        <a class="btn-st2"
                            href="https://www.asiatours.com/tours/hanoi-halong-bay-ninh-binh-tour.html">explore
                            this trip</a>
                    </article>
                </div>
            </div>
        </div>
        <div class="view-more-wrap">
            <a href="https://www.asiatours.com/2-5/" title="Asia Tours 2 - 5 Days" class="link-st3"
                target="_blank">ALL ASIA TOURS 2 - 5 DAYS</a>
        </div>
    </div>
    <div class="wrap-mini-intro" style="width:80%">
        <h2 class="title-h2-line">Asia Tours 1 Day</h2>

    </div>
    <div class="container">
        <div class="wrap-slide-st8" style="margin-bottom:0px;">
            <div class="gallery">
                <div class="col-xlg-4 col-lg-6 col-md-12" style="margin-bottom: 20px;">
                    <article class="trip trip-itine">
                        <a href="https://www.asiatours.com/tours/luxury-ha-long-bay-one-day-tour-512.html"
                            title="Luxury Halong Bay one day tour"><img src="#"
                                data-img="https://d2lwt6tidfiof0.cloudfront.net/uploads/photo-tour/luxury-ha-long-bay-one-day-tou891-820-440.jpg"
                                alt=""></a>
                        <a href="javascript:;" rel="nofollow" id="love_tour1030" onclick="love_tour(1030)"
                            class="heart-tour" title="Like"><i class="icon-font heart-empty"></i></a>
                        <div class="content-trip">
                            <h3 class="title-h2-line"><a
                                    href="https://www.asiatours.com/tours/luxury-ha-long-bay-one-day-tour-512.html">Luxury
                                    Halong Bay one day tour</a></h3>
                            <span>1 day from <strong>$79</strong>/ person</span>
                            <p class="paragraph">Experience majestic Halong Bay in one day from Hanoi, you will
                                have chance to immerse incredible scenery of limestone karst formations and
                                cruising at leisure across some of the most hidden and unspoilt routes of the
                                bay. You will also get an opportunity to discover most popular attractions on
                                Ha...</p>
                        </div>
                        <div class="count-day">Vietnam</div>
                        <div class="wrap-tooltip-itine">
                            <div class="tooltip">
                                <i class="icon-font icon-itine"></i>
                                <span>Hanoi &rarr; Halong Bay &rarr; Hanoi</span>
                            </div>
                        </div>
                        <div class="wrap-tooltip">
                            <a href="javascript:;" title="Cruising" class="tooltip"><i
                                    class="icon-font icon-cruising"></i><span>cruising<i></i></span></a> <a
                                href="javascript:;" title="Heritage" class="tooltip"><i
                                    class="icon-font icon-heritage"></i><span>heritage<i></i></span></a> <a
                                href="javascript:;" title="Nature" class="tooltip"><i
                                    class="icon-font icon-nature"></i><span>nature<i></i></span></a> <a
                                href="javascript:;" title="Kayaking" class="tooltip"><i
                                    class="icon-font icon-kayaking"></i><span>kayaking<i></i></span></a> <a
                                href="javascript:;" title="Beach" class="tooltip"><i
                                    class="icon-font icon-beach"></i><span>beach<i></i></span></a>
                        </div>
                        <a class="btn-st2"
                            href="https://www.asiatours.com/tours/luxury-ha-long-bay-one-day-tour-512.html">explore
                            this trip</a>
                    </article>
                </div>
                <div class="col-xlg-4 col-lg-6 col-md-12" style="margin-bottom: 20px;">
                    <article class="trip trip-itine">
                        <a href="https://www.asiatours.com/tours/full-day-trip-floating-market-kanchanaburi.html"
                            title="Full Day Trip Floating Market – Kanchanaburi"><img src="#"
                                data-img="https://d2lwt6tidfiof0.cloudfront.net/uploads/photo-tour/full-day-trip-floating-market-408-820-440.jpg"
                                alt=""></a>
                        <a href="javascript:;" rel="nofollow" id="love_tour1265" onclick="love_tour(1265)"
                            class="heart-tour" title="Like"><i class="icon-font heart-empty"></i></a>
                        <div class="content-trip">
                            <h3 class="title-h2-line"><a
                                    href="https://www.asiatours.com/tours/full-day-trip-floating-market-kanchanaburi.html">Full
                                    Day Trip Floating Market – Kanchanaburi</a></h3>
                            <span>1 day from <strong>$139</strong>/ person</span>
                            <p class="paragraph">This full-day tour from Bangkok is a great journey that
                                combines a stop by the lively Damnoen Saduak Floating Market and a visit to the
                                charming province of Kanchanaburi. Through the narrow canals on a long-tail
                                boat, you will get an insightful view of the most popular Thai floating markets
                                where...</p>
                        </div>
                        <div class="count-day">Thailand</div>
                        <div class="wrap-tooltip-itine">
                            <div class="tooltip">
                                <i class="icon-font icon-itine"></i>
                                <span>Bangkok &rarr; Ratchaburi &rarr; Kanchanaburi &rarr; Bangkok</span>
                            </div>
                        </div>
                        <div class="wrap-tooltip">
                            <a href="javascript:;" title="Boating" class="tooltip"><i
                                    class="icon-font icon-boating"></i><span>boating<i></i></span></a> <a
                                href="javascript:;" title="Cultural" class="tooltip"><i
                                    class="icon-font icon-cultural"></i><span>cultural<i></i></span></a>
                        </div>
                        <a class="btn-st2"
                            href="https://www.asiatours.com/tours/full-day-trip-floating-market-kanchanaburi.html">explore
                            this trip</a>
                    </article>
                </div>
                <div class="col-xlg-4 col-lg-6 col-md-12" style="margin-bottom: 20px;">
                    <article class="trip trip-itine">
                        <a href="https://www.asiatours.com/tours/angkor-temples-cycling-adventure.html"
                            title="Angkor Temples Cycling Adventure"><img src="#"
                                data-img="https://d2lwt6tidfiof0.cloudfront.net/uploads/photo-tour/angkor-temples-cycling-adventu671-820-440.jpg"
                                alt=""></a>
                        <a href="javascript:;" rel="nofollow" id="love_tour1212" onclick="love_tour(1212)"
                            class="heart-tour" title="Like"><i class="icon-font heart-empty"></i></a>
                        <div class="content-trip">
                            <h3 class="title-h2-line"><a
                                    href="https://www.asiatours.com/tours/angkor-temples-cycling-adventure.html">Angkor
                                    Temples Cycling Adventure</a></h3>
                            <span>1 day from <strong>$125</strong>/ person</span>
                            <p class="paragraph">This full-day biking tour is a fantastic way to explore the
                                grandeur of Angkor temples and experience the lush Cambodian countryside
                                settings around the heritages. You will not only discover the most highlights of
                                the Angkor Archaeological Park as other tourist trails but also visit the...</p>
                        </div>
                        <div class="count-day">Cambodia</div>
                        <div class="wrap-tooltip-itine">
                            <div class="tooltip">
                                <i class="icon-font icon-itine"></i>
                                <span>Siem Reap</span>
                            </div>
                        </div>
                        <div class="wrap-tooltip">
                            <a href="javascript:;" title="Cultural" class="tooltip"><i
                                    class="icon-font icon-cultural"></i><span>cultural<i></i></span></a> <a
                                href="javascript:;" title="Heritage" class="tooltip"><i
                                    class="icon-font icon-heritage"></i><span>heritage<i></i></span></a> <a
                                href="javascript:;" title="Adventure" class="tooltip"><i
                                    class="icon-font icon-adventure"></i><span>adventure<i></i></span></a> <a
                                href="javascript:;" title="History" class="tooltip"><i
                                    class="icon-font icon-history"></i><span>history<i></i></span></a>
                        </div>
                        <a class="btn-st2"
                            href="https://www.asiatours.com/tours/angkor-temples-cycling-adventure.html">explore
                            this trip</a>
                    </article>
                </div>
            </div>
        </div>
        <div class="view-more-wrap">
            <a href="https://www.asiatours.com/1/" title="Asia Tours 1 Day" class="link-st3" target="_blank">ALL
                ASIA TOURS 1 DAY</a>
        </div>
    </div>
    <div class="wrap-mini-intro" style="width:80%">
        <h2 class="title-h2-line">Asia Tours 16 - 20 Days</h2>

    </div>
    <div class="container">
        <div class="wrap-slide-st8" style="margin-bottom:0px;">
            <div class="gallery">
                <div class="col-xlg-4 col-lg-6 col-md-12" style="margin-bottom: 20px;">
                    <article class="trip trip-itine">
                        <a href="https://www.asiatours.com/tours/an-odyssey-to-southeast-asia-japan.html"
                            title="An Odyssey to Southeast Asia & Japan"><img src="#"
                                data-img="https://d2lwt6tidfiof0.cloudfront.net/uploads/photo-tour/1757468264516-820-440.jpg"
                                alt=""></a>
                        <a href="javascript:;" rel="nofollow" id="love_tour1967" onclick="love_tour(1967)"
                            class="heart-tour" title="Like"><i class="icon-font heart-empty"></i></a>
                        <div class="content-trip">
                            <h3 class="title-h2-line"><a
                                    href="https://www.asiatours.com/tours/an-odyssey-to-southeast-asia-japan.html">An
                                    Odyssey to Southeast Asia & Japan</a></h3>
                            <span>20 days from <strong>$5420</strong>/ person</span>
                            <p class="paragraph">Connect the Asian diverse culture through an extensive odyssey
                                to Vietnam, Thailand, Cambodia and Japan in 20 days with Asia Tours. This
                                extraordinary journey takes you from the bustling streets of Bangkok and the
                                cultural treasures of Chiang Mai to Vietnam’s capital Hanoi and the natural
                                wonder...</p>
                        </div>
                        <div class="count-day">Thailand, Vietnam, Cambodia, Japan</div>
                        <div class="wrap-tooltip-itine">
                            <div class="tooltip">
                                <i class="icon-font icon-itine"></i>
                                <span>Bangkok &rarr; Chiang Mai &rarr; Hanoi &rarr; Halong Bay &rarr; Siem Reap
                                    &rarr; Ho Chi Minh &rarr; Mekong &rarr; Tokyo &rarr; Kanagawa</span>
                            </div>
                        </div>
                        <div class="wrap-tooltip">
                            <a href="javascript:;" title="Swimming" class="tooltip"><i
                                    class="icon-font icon-swimming"></i><span>swimming<i></i></span></a> <a
                                href="javascript:;" title="Cruising" class="tooltip"><i
                                    class="icon-font icon-cruising"></i><span>cruising<i></i></span></a> <a
                                href="javascript:;" title="Boating" class="tooltip"><i
                                    class="icon-font icon-boating"></i><span>boating<i></i></span></a> <a
                                href="javascript:;" title="Cultural" class="tooltip"><i
                                    class="icon-font icon-cultural"></i><span>cultural<i></i></span></a> <a
                                href="javascript:;" title="Heritage" class="tooltip"><i
                                    class="icon-font icon-heritage"></i><span>heritage<i></i></span></a> <a
                                href="javascript:;" title="Nature" class="tooltip"><i
                                    class="icon-font icon-nature"></i><span>nature<i></i></span></a> <a
                                href="javascript:;" title="Cuisine" class="tooltip"><i
                                    class="icon-font icon-cuisine"></i><span>cuisine<i></i></span></a> <a
                                href="javascript:;" title="Kayaking" class="tooltip"><i
                                    class="icon-font icon-kayaking"></i><span>kayaking<i></i></span></a>
                        </div>
                        <a class="btn-st2"
                            href="https://www.asiatours.com/tours/an-odyssey-to-southeast-asia-japan.html">explore
                            this trip</a>
                    </article>
                </div>
                <div class="col-xlg-4 col-lg-6 col-md-12" style="margin-bottom: 20px;">
                    <article class="trip trip-itine">
                        <a href="https://www.asiatours.com/tours/a-luxury-grand-tour-of-vietnam-cambodia-and-thailand.html"
                            title="A Luxury Grand Tour of Vietnam, Cambodia and Thailand"><img src="#"
                                data-img="https://d2lwt6tidfiof0.cloudfront.net/uploads/photo-tour/1760153170522-820-440.jpg"
                                alt=""></a>
                        <a href="javascript:;" rel="nofollow" id="love_tour2004" onclick="love_tour(2004)"
                            class="heart-tour" title="Like"><i class="icon-font heart-empty"></i></a>
                        <div class="content-trip">
                            <h3 class="title-h2-line"><a
                                    href="https://www.asiatours.com/tours/a-luxury-grand-tour-of-vietnam-cambodia-and-thailand.html">A
                                    Luxury Grand Tour of Vietnam, Cambodia and Thailand</a></h3>
                            <span>18 days from <strong>$4263</strong>/ person</span>
                            <p class="paragraph">Embrace a touch of exclusive journey to Southeast Asia across
                                three amazing countries of Vietnam, Cambodia and Thailand. This 18-day grand
                                tour promises an extraordinary blend of cultural discovery, world-class comfort,
                                and stunning natural beauty. From cruising among the limestone islets of
                                Halong...</p>
                        </div>
                        <div class="count-day">Vietnam, Cambodia, Thailand</div>
                        <div class="wrap-tooltip-itine">
                            <div class="tooltip">
                                <i class="icon-font icon-itine"></i>
                                <span>Hanoi &rarr; Halong Bay &rarr; Siem Reap &rarr; Battambang &rarr; Bangkok
                                    &rarr; Chiang Mai &rarr; Phuket</span>
                            </div>
                        </div>
                        <div class="wrap-tooltip">
                            <a href="javascript:;" title="Swimming" class="tooltip"><i
                                    class="icon-font icon-swimming"></i><span>swimming<i></i></span></a> <a
                                href="javascript:;" title="Cruising" class="tooltip"><i
                                    class="icon-font icon-cruising"></i><span>cruising<i></i></span></a> <a
                                href="javascript:;" title="Boating" class="tooltip"><i
                                    class="icon-font icon-boating"></i><span>boating<i></i></span></a> <a
                                href="javascript:;" title="Cultural" class="tooltip"><i
                                    class="icon-font icon-cultural"></i><span>cultural<i></i></span></a> <a
                                href="javascript:;" title="Heritage" class="tooltip"><i
                                    class="icon-font icon-heritage"></i><span>heritage<i></i></span></a> <a
                                href="javascript:;" title="Nature" class="tooltip"><i
                                    class="icon-font icon-nature"></i><span>nature<i></i></span></a> <a
                                href="javascript:;" title="Cuisine" class="tooltip"><i
                                    class="icon-font icon-cuisine"></i><span>cuisine<i></i></span></a> <a
                                href="javascript:;" title="Kayaking" class="tooltip"><i
                                    class="icon-font icon-kayaking"></i><span>kayaking<i></i></span></a>
                        </div>
                        <a class="btn-st2"
                            href="https://www.asiatours.com/tours/a-luxury-grand-tour-of-vietnam-cambodia-and-thailand.html">explore
                            this trip</a>
                    </article>
                </div>
                <div class="col-xlg-4 col-lg-6 col-md-12" style="margin-bottom: 20px;">
                    <article class="trip trip-itine">
                        <a href="https://www.asiatours.com/tours/incredible-vietnam-malaysia-thailand-indonesia-tour.html"
                            title="Incredible Vietnam, Malaysia, Thailand & Indonesia Tour"><img src="#"
                                data-img="https://d2lwt6tidfiof0.cloudfront.net/uploads/photo-tour/incredible-vietnam-malaysia-th406-820-440.jpg"
                                alt=""></a>
                        <a href="javascript:;" rel="nofollow" id="love_tour1728" onclick="love_tour(1728)"
                            class="heart-tour" title="Like"><i class="icon-font heart-empty"></i></a>
                        <div class="content-trip">
                            <h3 class="title-h2-line"><a
                                    href="https://www.asiatours.com/tours/incredible-vietnam-malaysia-thailand-indonesia-tour.html">Incredible
                                    Vietnam, Malaysia, Thailand & Indonesia Tour</a></h3>
                            <span>19 days from <strong>$4265</strong>/ person</span>
                            <p class="paragraph">Purposely combining modern highlights in bigger cities with
                                multiple inviting things-to-do and outstanding natural sites should not be
                                missed in any itineraries, we planned a travel schedule that is suitable for all
                                types of travelers, which lasts 19 days traversing through Vietnam, Thailand,...
                            </p>
                        </div>
                        <div class="count-day">Vietnam, Thailand, Malaysia, Indonesia</div>
                        <div class="wrap-tooltip-itine">
                            <div class="tooltip">
                                <i class="icon-font icon-itine"></i>
                                <span>Hanoi &rarr; Halong Bay &rarr; Bangkok &rarr; Penang &rarr; Langkawi
                                    &rarr; Kuala Lumpur &rarr; Bali Island</span>
                            </div>
                        </div>
                        <div class="wrap-tooltip">
                            <a href="javascript:;" title="Swimming" class="tooltip"><i
                                    class="icon-font icon-swimming"></i><span>swimming<i></i></span></a> <a
                                href="javascript:;" title="Cruising" class="tooltip"><i
                                    class="icon-font icon-cruising"></i><span>cruising<i></i></span></a> <a
                                href="javascript:;" title="Cultural" class="tooltip"><i
                                    class="icon-font icon-cultural"></i><span>cultural<i></i></span></a> <a
                                href="javascript:;" title="Heritage" class="tooltip"><i
                                    class="icon-font icon-heritage"></i><span>heritage<i></i></span></a> <a
                                href="javascript:;" title="Nature" class="tooltip"><i
                                    class="icon-font icon-nature"></i><span>nature<i></i></span></a> <a
                                href="javascript:;" title="Kayaking" class="tooltip"><i
                                    class="icon-font icon-kayaking"></i><span>kayaking<i></i></span></a> <a
                                href="javascript:;" title="Adventure" class="tooltip"><i
                                    class="icon-font icon-adventure"></i><span>adventure<i></i></span></a> <a
                                href="javascript:;" title="History" class="tooltip"><i
                                    class="icon-font icon-history"></i><span>history<i></i></span></a>
                        </div>
                        <a class="btn-st2"
                            href="https://www.asiatours.com/tours/incredible-vietnam-malaysia-thailand-indonesia-tour.html">explore
                            this trip</a>
                    </article>
                </div>
            </div>
        </div>
        <div class="view-more-wrap">
            <a href="https://www.asiatours.com/16-20/" title="Asia Tours 16 - 20 Days" class="link-st3"
                target="_blank">ALL ASIA TOURS 16 - 20 DAYS</a>
        </div>
    </div>
    <div class="wrap-mini-intro" style="width:80%">
        <h2 class="title-h2-line">Asia Tours Over 20 Days</h2>

    </div>
    <div class="container">
        <div class="wrap-slide-st8" style="margin-bottom:0px;">
            <div class="gallery">
                <div class="col-xlg-4 col-lg-6 col-md-12" style="margin-bottom: 20px;">
                    <article class="trip trip-itine">
                        <a href="https://www.asiatours.com/tours/essence-of-vietnam-cambodia-south-korea.html"
                            title="Essence of Vietnam, Cambodia & South Korea"><img src="#"
                                data-img="https://d2lwt6tidfiof0.cloudfront.net/uploads/photo-tour/1755704458489-820-440.jpg"
                                alt=""></a>
                        <a href="javascript:;" rel="nofollow" id="love_tour1964" onclick="love_tour(1964)"
                            class="heart-tour" title="Like"><i class="icon-font heart-empty"></i></a>
                        <div class="content-trip">
                            <h3 class="title-h2-line"><a
                                    href="https://www.asiatours.com/tours/essence-of-vietnam-cambodia-south-korea.html">Essence
                                    of Vietnam, Cambodia & South Korea</a></h3>
                            <span>24 days from <strong>$5931</strong>/ person</span>
                            <p class="paragraph">Catch an amazing glance of Vietnam, Cambodia and South Korea's
                                essence through this remarkable 24-day journey and traverse across most
                                celebrated destinations of three countries. If Vietnam allures you by timeless
                                charm of history richness, mesmerizing natural beauty, and rustic rural
                                charms,...</p>
                        </div>
                        <div class="count-day">Vietnam, Cambodia, South Korea</div>
                        <div class="wrap-tooltip-itine">
                            <div class="tooltip">
                                <i class="icon-font icon-itine"></i>
                                <span>Hanoi &rarr; Halong Bay &rarr; Siem Reap &rarr; Phnom Penh &rarr; Ho Chi
                                    Minh &rarr; Mekong &rarr; Danang &rarr; Hoi An &rarr; Busan &rarr; Jeju
                                    Island &rarr; Seoul</span>
                            </div>
                        </div>
                        <div class="wrap-tooltip">
                            <a href="javascript:;" title="Swimming" class="tooltip"><i
                                    class="icon-font icon-swimming"></i><span>swimming<i></i></span></a> <a
                                href="javascript:;" title="Cruising" class="tooltip"><i
                                    class="icon-font icon-cruising"></i><span>cruising<i></i></span></a> <a
                                href="javascript:;" title="Boating" class="tooltip"><i
                                    class="icon-font icon-boating"></i><span>boating<i></i></span></a> <a
                                href="javascript:;" title="Cultural" class="tooltip"><i
                                    class="icon-font icon-cultural"></i><span>cultural<i></i></span></a> <a
                                href="javascript:;" title="Heritage" class="tooltip"><i
                                    class="icon-font icon-heritage"></i><span>heritage<i></i></span></a> <a
                                href="javascript:;" title="Nature" class="tooltip"><i
                                    class="icon-font icon-nature"></i><span>nature<i></i></span></a> <a
                                href="javascript:;" title="Kayaking" class="tooltip"><i
                                    class="icon-font icon-kayaking"></i><span>kayaking<i></i></span></a> <a
                                href="javascript:;" title="Beach" class="tooltip"><i
                                    class="icon-font icon-beach"></i><span>beach<i></i></span></a>
                        </div>
                        <a class="btn-st2"
                            href="https://www.asiatours.com/tours/essence-of-vietnam-cambodia-south-korea.html">explore
                            this trip</a>
                    </article>
                </div>
                <div class="col-xlg-4 col-lg-6 col-md-12" style="margin-bottom: 20px;">
                    <article class="trip trip-itine">
                        <a href="https://www.asiatours.com/tours/best-of-southeast-asia-grandfamilyjourney.html"
                            title="Best of Southeast Asia Grand Family Journey"><img src="#"
                                data-img="https://d2lwt6tidfiof0.cloudfront.net/uploads/photo-tour/best-of-southeast-asia-grandfa416-820-440.jpg"
                                alt=""></a>
                        <a href="javascript:;" rel="nofollow" id="love_tour2029" onclick="love_tour(2029)"
                            class="heart-tour" title="Like"><i class="icon-font heart-empty"></i></a>
                        <div class="content-trip">
                            <h3 class="title-h2-line"><a
                                    href="https://www.asiatours.com/tours/best-of-southeast-asia-grandfamilyjourney.html">Best
                                    of Southeast Asia Grand Family Journey</a></h3>
                            <span>25 days from <strong>$4780</strong>/ person</span>
                            <p class="paragraph">An extensive family adventure awaiting your family to enjoy
                                together, traveling across through most charming countries in Southeast Asia.
                                This 25-day grand Indochina journey unveils the captivating blend of Thailand,
                                Laos, Vietnam, and Cambodia, where cultural treasures, natural wonders, and...
                            </p>
                        </div>
                        <div class="count-day">Thailand, Laos, Vietnam, Cambodia</div>
                        <div class="wrap-tooltip-itine">
                            <div class="tooltip">
                                <i class="icon-font icon-itine"></i>
                                <span>Bangkok &rarr; Chiang Mai &rarr; Luang Prabang &rarr; Hanoi &rarr; Halong
                                    Bay &rarr; Danang &rarr; Hoi An &rarr; Ho Chi Minh &rarr; Mekong &rarr; Siem
                                    Reap</span>
                            </div>
                        </div>
                        <div class="wrap-tooltip">
                            <a href="javascript:;" title="Swimming" class="tooltip"><i
                                    class="icon-font icon-swimming"></i><span>swimming<i></i></span></a> <a
                                href="javascript:;" title="Cruising" class="tooltip"><i
                                    class="icon-font icon-cruising"></i><span>cruising<i></i></span></a> <a
                                href="javascript:;" title="Boating" class="tooltip"><i
                                    class="icon-font icon-boating"></i><span>boating<i></i></span></a> <a
                                href="javascript:;" title="Cultural" class="tooltip"><i
                                    class="icon-font icon-cultural"></i><span>cultural<i></i></span></a> <a
                                href="javascript:;" title="Heritage" class="tooltip"><i
                                    class="icon-font icon-heritage"></i><span>heritage<i></i></span></a> <a
                                href="javascript:;" title="Nature" class="tooltip"><i
                                    class="icon-font icon-nature"></i><span>nature<i></i></span></a> <a
                                href="javascript:;" title="Cuisine" class="tooltip"><i
                                    class="icon-font icon-cuisine"></i><span>cuisine<i></i></span></a> <a
                                href="javascript:;" title="Kayaking" class="tooltip"><i
                                    class="icon-font icon-kayaking"></i><span>kayaking<i></i></span></a>
                        </div>
                        <a class="btn-st2"
                            href="https://www.asiatours.com/tours/best-of-southeast-asia-grandfamilyjourney.html">explore
                            this trip</a>
                    </article>
                </div>
                <div class="col-xlg-4 col-lg-6 col-md-12" style="margin-bottom: 20px;">
                    <article class="trip trip-itine">
                        <a href="https://www.asiatours.com/tours/exclusive-journey-through-the-heart-of-vietnam-laos-cambodia.html"
                            title="Exclusive Journey Through the Heart of Vietnam, Laos & Cambodia"><img src="#"
                                data-img="https://d2lwt6tidfiof0.cloudfront.net/uploads/photo-tour/1753722369214-820-440.jpg"
                                alt=""></a>
                        <a href="javascript:;" rel="nofollow" id="love_tour1958" onclick="love_tour(1958)"
                            class="heart-tour" title="Like"><i class="icon-font heart-empty"></i></a>
                        <div class="content-trip">
                            <h3 class="title-h2-line"><a
                                    href="https://www.asiatours.com/tours/exclusive-journey-through-the-heart-of-vietnam-laos-cambodia.html">Exclusive
                                    Journey Through the Heart of Vietnam, Laos & Cambodia</a></h3>
                            <span>30 days from <strong>$6633</strong>/ person</span>
                            <p class="paragraph">This month-covering journey invites you to uncover the heart of
                                Southeast Asia through a rich, multi-country experience of Vietnam, Laos and
                                Cambodia. From Vietnam’s vibrant cities and tranquil river deltas to Laos’
                                spiritual landmarks and Cambodia’s awe-inspiring ancient ruins, each...</p>
                        </div>
                        <div class="count-day">Cambodia, Laos, Vietnam</div>
                        <div class="wrap-tooltip-itine">
                            <div class="tooltip">
                                <i class="icon-font icon-itine"></i>
                                <span>Ho Chi Minh &rarr; Mekong &rarr; Siem Reap &rarr; Luang Prabang &rarr;
                                    Hanoi &rarr; Ninh Binh &rarr; Halong Bay &rarr; Hue &rarr; Danang &rarr; Hoi
                                    An &rarr; Nha Trang</span>
                            </div>
                        </div>
                        <div class="wrap-tooltip">
                            <a href="javascript:;" title="Swimming" class="tooltip"><i
                                    class="icon-font icon-swimming"></i><span>swimming<i></i></span></a> <a
                                href="javascript:;" title="Cruising" class="tooltip"><i
                                    class="icon-font icon-cruising"></i><span>cruising<i></i></span></a> <a
                                href="javascript:;" title="Boating" class="tooltip"><i
                                    class="icon-font icon-boating"></i><span>boating<i></i></span></a> <a
                                href="javascript:;" title="Cultural" class="tooltip"><i
                                    class="icon-font icon-cultural"></i><span>cultural<i></i></span></a> <a
                                href="javascript:;" title="Heritage" class="tooltip"><i
                                    class="icon-font icon-heritage"></i><span>heritage<i></i></span></a> <a
                                href="javascript:;" title="Nature" class="tooltip"><i
                                    class="icon-font icon-nature"></i><span>nature<i></i></span></a> <a
                                href="javascript:;" title="Cuisine" class="tooltip"><i
                                    class="icon-font icon-cuisine"></i><span>cuisine<i></i></span></a> <a
                                href="javascript:;" title="Kayaking" class="tooltip"><i
                                    class="icon-font icon-kayaking"></i><span>kayaking<i></i></span></a>
                        </div>
                        <a class="btn-st2"
                            href="https://www.asiatours.com/tours/exclusive-journey-through-the-heart-of-vietnam-laos-cambodia.html">explore
                            this trip</a>
                    </article>
                </div>
            </div>
        </div>
        <div class="view-more-wrap">
            <a href="https://www.asiatours.com/over-20/" title="Asia Tours Over 20 Days" class="link-st3"
                target="_blank">ALL ASIA TOURS OVER 20 DAYS</a>
        </div>
    </div>
</section>
<section class="mg-bottom mg-top-0">
    <div class="wrap-mini-intro">
        <h2 class="title-h2-line">Asia Tours by Styles</h2>
    </div>
    <div class="container">
        <div class="wrap-slide-st1">
            <div class="synch-carousels">
                <div class="gallery" id="carousel-1">
                    <div class="item">
                        <a href="https://www.asiatours.com/tours/best-tours/" title="Best Asia Tours">
                            <img src="#"
                                data-img="https://d2lwt6tidfiof0.cloudfront.net/images/otm_home/best-tours.jpg"
                                alt="">
                            <div class="box-text">
                                <h3>Best Asia Tours</h3>
                            </div>
                        </a>
                        <p class="paragraph">Welcome to Asia, the vibrant and inspiring land of diverse culture,
                            nature, history and tradition waiting to be discovered. Connect to the fascinating
                            countries of Asia -&nbsp;Vietnam, Laos, Cambodia, Thailand, Myanmar, Indonesia,
                            Malaysia, Singapore, the Philippines, China, Japan, Nepal, Bhutan,...</p>
                        <a href="https://www.asiatours.com/tours/best-tours/" class="link-st3">View
                            itineraries</a>
                    </div>
                    <div class="item">
                        <a href="https://www.asiatours.com/tours/classic-highlights/"
                            title="Asia Classic Highlights">
                            <img src="#"
                                data-img="https://d2lwt6tidfiof0.cloudfront.net/images/otm_home/classic-highlights.jpg"
                                alt="">
                            <div class="box-text">
                                <h3>Asia Classic Highlights</h3>
                            </div>
                        </a>
                        <p class="paragraph">Discover your own classic Asia with our unforgettable tours
                            throughout the highlights of fascinating countries (e.g., Thailand, Cambodia,
                            Vietnam, Laos, Myanmar, Malaysia, Indonesia, Singapore, the Philippines, China,
                            Japan, Nepal, Bhutan, India and Sri Lanka). Regardless of your preferred group...
                        </p>
                        <a href="https://www.asiatours.com/tours/classic-highlights/" class="link-st3">View
                            itineraries</a>
                    </div>
                    <div class="item">
                        <a href="https://www.asiatours.com/tours/family/" title="Asia Family Tours">
                            <img src="#"
                                data-img="https://d2lwt6tidfiof0.cloudfront.net/images/otm_home/family.jpg"
                                alt="">
                            <div class="box-text">
                                <h3>Asia Family Tours</h3>
                            </div>
                        </a>
                        <p class="paragraph">If you are looking for a destination to travel with your family
                            members, Asia could be a perfect choice. Join our Asia Family Tours with a variety
                            of memorable and first-hand experiences in Vietnam, Cambodia, Thailand, Laos,
                            Myanmar, Malaysia, Indonesia, Singapore, the Philippines, China, Hong...</p>
                        <a href="https://www.asiatours.com/tours/family/" class="link-st3">View itineraries</a>
                    </div>
                    <div class="item">
                        <a href="https://www.asiatours.com/tours/beach/" title="Asia Beach Holidays ">
                            <img src="#"
                                data-img="https://d2lwt6tidfiof0.cloudfront.net/images/otm_home/beach.jpg"
                                alt="">
                            <div class="box-text">
                                <h3>Asia Beach Holidays </h3>
                            </div>
                        </a>
                        <p class="paragraph">Leave your stressful days behind and travel to Asia for an amazing
                            beach holiday. Having a worldwide reputation for its breath-taking views, peaceful
                            islands and stunning beaches, Asia provides a list of terrific beach destinations
                            (e.g., Vietnam, Cambodia, Thailand, Myanmar, Malaysia, Indonesia,...</p>
                        <a href="https://www.asiatours.com/tours/beach/" class="link-st3">View itineraries</a>
                    </div>
                    <div class="item">
                        <a href="https://www.asiatours.com/tours/luxury/" title="Asia Luxury Tours ">
                            <img src="#"
                                data-img="https://d2lwt6tidfiof0.cloudfront.net/images/otm_home/luxury.jpg"
                                alt="">
                            <div class="box-text">
                                <h3>Asia Luxury Tours </h3>
                            </div>
                        </a>
                        <p class="paragraph">Asia is a wonderland for any explorer who is looking for the most
                            intriguing experiences unlike anywhere in the world. This land offers experiences of
                            the contrast between old and new, traditional and modern which could cater to every
                            whim. Experience a 5-star journey across Asia with our fully...</p>
                        <a href="https://www.asiatours.com/tours/luxury/" class="link-st3">View itineraries</a>
                    </div>
                    <div class="item">
                        <a href="https://www.asiatours.com/tours/honeymoon/" title="Asia Honeymoon Tours">
                            <img src="#"
                                data-img="https://d2lwt6tidfiof0.cloudfront.net/images/otm_home/honeymoon.jpg"
                                alt="">
                            <div class="box-text">
                                <h3>Asia Honeymoon Tours</h3>
                            </div>
                        </a>
                        <p class="paragraph">A honeymoon trip to the lands of love, romance and peace is
                            something each couple could not miss to get a perfect beginning to the new marriage
                            life. Whether you are looking for a honeymoon vacation on tropical islands with
                            pristine beaches and luxury resorts or desiring to visit cities of exotic...</p>
                        <a href="https://www.asiatours.com/tours/honeymoon/" class="link-st3">View
                            itineraries</a>
                    </div>
                    <div class="item">
                        <a href="https://www.asiatours.com/tours/active/" title="Asia Active Tours">
                            <img src="#"
                                data-img="https://d2lwt6tidfiof0.cloudfront.net/images/otm_home/active.jpg"
                                alt="">
                            <div class="box-text">
                                <h3>Asia Active Tours</h3>
                            </div>
                        </a>
                        <p class="paragraph">Being the largest continent on Earth and famous for its cultural
                            diversity along with the hottest travel destinations, Asia is a great place for the
                            active traveller. There are an array of options for the more adventurous minded such
                            as kayaking along tranquil bays or around pristine islands,...</p>
                        <a href="https://www.asiatours.com/tours/active/" class="link-st3">View itineraries</a>
                    </div>
                    <div class="item">
                        <a href="https://www.asiatours.com/tours/cruise-packages/" title="Asia Cruise Packages">
                            <img src="#"
                                data-img="https://d2lwt6tidfiof0.cloudfront.net/images/otm_home/cruise-packages.jpg"
                                alt="">
                            <div class="box-text">
                                <h3>Asia Cruise Packages</h3>
                            </div>
                        </a>
                        <p class="paragraph">Asia is a harmony of countless cultures, tranquil landscapes and
                            incredibly hospital people. A cruise package to Asia is an exciting journey to
                            discover some of the world's hottest travel destinations on one unforgettable
                            vacation. From port to port, you will have a chance to discover picturesque...</p>
                        <a href="https://www.asiatours.com/tours/cruise-packages/" class="link-st3">View
                            itineraries</a>
                    </div>
                    <div class="item">
                        <a href="https://www.asiatours.com/tours/day-trips-short-breaks/"
                            title="Asia Day Trips & Short Breaks">
                            <img src="#"
                                data-img="https://d2lwt6tidfiof0.cloudfront.net/images/otm_home/day-trips-short-breaks.jpg"
                                alt="">
                            <div class="box-text">
                                <h3>Asia Day Trips & Short Breaks</h3>
                            </div>
                        </a>
                        <p class="paragraph">Day trips and short breaks in Asia are the best choices for those
                            who do not have much time in a destination while wishing to have some short but
                            fulfill experiences. At Asia Tours, we offer a wide range of day trips and short
                            excursions in which tourists will enjoy private guided experiences and...</p>
                        <a href="https://www.asiatours.com/tours/day-trips-short-breaks/" class="link-st3">View
                            itineraries</a>
                    </div>
                    <div class="item">
                        <a href="https://www.asiatours.com/tours/special-interests/"
                            title="Asia Special Interests Tours">
                            <img src="#"
                                data-img="https://d2lwt6tidfiof0.cloudfront.net/images/otm_home/special-interests.jpg"
                                alt="">
                            <div class="box-text">
                                <h3>Asia Special Interests Tours</h3>
                            </div>
                        </a>
                        <p class="paragraph">Asia is best known for its ancient cultures, timeless beauty of
                            legendary landmarks and alluring natural places that also offers travelers with
                            special interests plent of impressive tour packages. Take an extremely relaxing spa
                            and wellness treatment. Visit ancient and modern masterpieces of art...</p>
                        <a href="https://www.asiatours.com/tours/special-interests/" class="link-st3">View
                            itineraries</a>
                    </div>
                    <div class="item">
                        <a href="https://www.asiatours.com/tours/culinary/" title="Asia Culinary Tours">
                            <img src="#"
                                data-img="https://d2lwt6tidfiof0.cloudfront.net/images/otm_home/culinary.jpg"
                                alt="">
                            <div class="box-text">
                                <h3>Asia Culinary Tours</h3>
                            </div>
                        </a>
                        <p class="paragraph">Asia is a paradise of open-air bazaars, exotic indigenous spices,
                            tropical fruits, and vegetables which tempt the taste buds of cuisine lovers from
                            all over the world. From the vibrant night markets of Thailand, the special blue
                            rice – Nasi Kerabu in Malaysia, the delicious nuances of Khmer...</p>
                        <a href="https://www.asiatours.com/tours/culinary/" class="link-st3">View
                            itineraries</a>
                    </div>
                    <div class="item">
                        <a href="https://www.asiatours.com/tours/local-life/" title="Asia Local Life Tours">
                            <img src="#"
                                data-img="https://d2lwt6tidfiof0.cloudfront.net/images/otm_home/local-life.jpg"
                                alt="">
                            <div class="box-text">
                                <h3>Asia Local Life Tours</h3>
                            </div>
                        </a>
                        <p class="paragraph">Asia is a continent which has different countries blessed with rich
                            culture, exotic destinations, and beautiful attractions which offers very diverse
                            travel options. If you are planning a trip and wishing for real-life, honest and
                            authentic experiences in Asia, Local Life Tours is a great choice....</p>
                        <a href="https://www.asiatours.com/tours/local-life/" class="link-st3">View
                            itineraries</a>
                    </div>
                    <div class="item">
                        <a href="https://www.asiatours.com/tours/nature-wildlife/"
                            title="Asia Nature & Wildlife Tours">
                            <img src="#"
                                data-img="https://d2lwt6tidfiof0.cloudfront.net/images/otm_home/nature-wildlife.jpg"
                                alt="">
                            <div class="box-text">
                                <h3>Asia Nature & Wildlife Tours</h3>
                            </div>
                        </a>
                        <p class="paragraph">Blessed with plenty of wildlife attractions (e.g., Kalimantan
                            Island, Sumatra Island, Sabah, Sarawak,&nbsp; Danjugan and Bohol), a wide variety of
                            terrain and the stunning landscape, Asia is a truly home to the most wonderful
                            wildlife which you won’t find in many places on Earth. In our Asia...</p>
                        <a href="https://www.asiatours.com/tours/nature-wildlife/" class="link-st3">View
                            itineraries</a>
                    </div>
                </div>
                <div class="nav-arrows">
                    <button class="arrow-left slick-arrow">
                        <i class="icon-font icon-next-back"></i>
                    </button>
                    <button class="arrow-right slick-arrow">
                        <i class="icon-font icon-next-back"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-bg">
    <div class="bacground-box">
        <div class="bg-left">
            <img src="#" data-img="https://d2lwt6tidfiof0.cloudfront.net/images/otm_home/form_l.jpg" alt="">
        </div>
        <div class="bg-right">
            <img src="#" data-img="https://d2lwt6tidfiof0.cloudfront.net/images/otm_home/form_r.jpg" alt="">
        </div>
    </div>
    <div class="container">
        <div class="wrap-mini-intro-st2">
            <div class="team-quote">
                <img src="#" data-img="https://d2lwt6tidfiof0.cloudfront.net/images/otm_home/a2.webp" alt="">
                <img src="#" data-img="https://d2lwt6tidfiof0.cloudfront.net/images/otm_home/a3.webp" alt="">
                <img src="#" data-img="https://d2lwt6tidfiof0.cloudfront.net/images/otm_home/a5.webp" alt="">
                <div class="team-name" style="font-family: 'Reenie Beanie', cursive;font-size: 36px;">Being the
                    locals, We know our homeland the best!</div>
            </div>
        </div>
        <div class="team-mess mobile-hidden">
            <p>We are here to take the stress out of the tour & holiday planning process.<br>Let us help you
                plan an unforgettable journey of lifetime with High Quality & Affordable Price.<br>Surely, you
                will feel satisfied!</p>
        </div>
        <div class="team-contact">
            <form id="form-contact-home" action="" style="position: relative;">
                <div class="loading-modal close-display">
                    <img src="#" data-img="https://d2lwt6tidfiof0.cloudfront.net/images/loading-modal.gif">
                </div>
                <div class="form-field col-xlg-12">
                    <div>Your trip ideas, questions...<span>*</span></div>
                    <textarea id="f_question" name="" required=""></textarea>
                </div>
                <div class="half">
                    <div class="form-field col-xlg-6 col-xsm-12">
                        <div>Name:<span>*</span></div>
                        <input id="f_name" name="" type="text" required="">
                    </div>
                    <div class="form-field col-xlg-6 col-xsm-12">
                        <div>Email:<span>*</span></div>
                        <input id="f_mail" name="" type="text" required="">
                    </div>
                </div>
                <div class="form-field col-xlg-12">
                    <div class="booking-step-budget select-st2 select-st2-new">
                        <select id="f_budget" name="f_budget">
                            <option value="" selected=""></option>
                        </select>
                        <div class="text">
                            <b>Your budget (USD)/person (without in/out flights)</b>
                            <i class="icon-font select-arrow-thin"></i>
                        </div>
                        <ul class="value">
                            <li>
                                <a href="javascript:" class="btn-value">
                                    <b>> $10,000</b>
                                    <i class="icon-font checkmark"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:" class="btn-value">
                                    <b>$5,000 - $10,000</b>
                                    <i class="icon-font checkmark"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:" class="btn-value">
                                    <b>$3,000 - $5,000</b>
                                    <i class="icon-font checkmark"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:" class="btn-value">
                                    <b>$2,000 - $3,000</b>
                                    <i class="icon-font checkmark"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:" class="btn-value">
                                    <b>$1,000 - $2,000</b>
                                    <i class="icon-font checkmark"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:" class="btn-value">
                                    <b>
                                        < $1,000</b>
                                            <i class="icon-font checkmark"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="check-field">
                        <div class="">
                            <label for="">
                                <div style="font-style: italic;">* Above is just budget reference to match you
                                    up with the perfect product, not fixed price.</div>
                            </label>
                        </div>
                    </div>
                </div>
                <div id="load-contact-home"></div>
                <button id="btn-contact-home" class="btn-st3" type="button">Send</button>
            </form>
        </div>
    </div>
</section>
<section>
    <div class="wrap-mini-intro">
        <h2 class="title-h2-line">The authentic & unique experiences in asia<br>you can expect</h2>
        <p class="paragraph">Home to some of the world's most ancient cultures and captivating destinations,
            Asia is a wonderful land of diverse beauty and uniqueness that offers a variety of dreamy journeys
            for every type of traveler.</p>
    </div>
    <div class="container">
        <div class="wrap-slide-st2">
            <div class="synch-carousels">
                <div class="gallery">
                    <div class="item">
                        <div class="theme-slide-img">
                            <a href="https://www.asiatours.com/experiences/experiencing-kayaking-in-beautiful-halong-bay.html"
                                title="Experience kayaking in the beautiful Halong Bay"><img src="#"
                                    data-img="https://d2lwt6tidfiof0.cloudfront.net/uploads/photo-e/experience/kayak-halong/halong-bay-kayaking-2320-399.jpg"
                                    alt=""></a>
                        </div>
                        <div class="theme-slide-text">
                            <div class="type-rotate">Halong Bay</div>
                            <a href="https://www.asiatours.com/vietnam/tours/" title="Vietnam Tours">Vietnam</a>
                            <h3><a href="https://www.asiatours.com/experiences/experiencing-kayaking-in-beautiful-halong-bay.html"
                                    title="Experience kayaking in the beautiful Halong Bay - Vietnam Tours">Experience
                                    kayaking in the beautiful Halong Bay</a></h3>
                            <p>When in Halong Bay - the World Natural Heritage recognized by UNESCO, you should
                                not miss the chance to join the outdoor activities to explore the beautiful
                                nature in exciting experience. Kayaking is...</p>
                            <div class="box-button">
                                <a href="https://www.asiatours.com/experiences/experiencing-kayaking-in-beautiful-halong-bay.html"
                                    title="Experience kayaking in the beautiful Halong Bay - Vietnam Tours"
                                    class="link-st3">View More Info</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="theme-slide-img">
                            <a href="https://www.asiatours.com/experiences/coron-twin-lagoons.html"
                                title="Coron Twin Lagoons"><img src="#"
                                    data-img="https://d2lwt6tidfiof0.cloudfront.net/uploads/photo-e/experience/Twin-Lagoons/Twin-Lagoons-Coron-4320-399.jpg"
                                    alt=""></a>
                        </div>
                        <div class="theme-slide-text">
                            <div class="type-rotate">Coron</div>
                            <a href="https://www.asiatours.com/philippines/tours/"
                                title="Philippines Tours">Philippines</a>
                            <h3><a href="https://www.asiatours.com/experiences/coron-twin-lagoons.html"
                                    title="Coron Twin Lagoons - Philippines Tours">Coron Twin Lagoons</a></h3>
                            <p>The Twin Lagoons is one of the most popular destinations for day-trip island
                                hopping tour in Coron island and almost every boat tour company in the vicinity
                                includes it in their itineraries. The...</p>
                            <div class="box-button">
                                <a href="https://www.asiatours.com/experiences/coron-twin-lagoons.html"
                                    title="Coron Twin Lagoons - Philippines Tours" class="link-st3">View More
                                    Info</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="theme-slide-img">
                            <a href="https://www.asiatours.com/experiences/visiting-gamcheon-culture-village-which-is-known-as-the-machu-picchu-of-busan.html"
                                title="Visit Gamcheon Culture Village which is known as the 'Machu Picchu of Korea'"><img
                                    src="#"
                                    data-img="https://d2lwt6tidfiof0.cloudfront.net/uploads/photo-e/experience/Gamcheon-Culture-Village/bart-busan-im320-399.jpeg"
                                    alt=""></a>
                        </div>
                        <div class="theme-slide-text">
                            <div class="type-rotate">Busan</div>
                            <a href="https://www.asiatours.com/south-korea/tours/"
                                title="South Korea Tours">South Korea</a>
                            <h3><a href="https://www.asiatours.com/experiences/visiting-gamcheon-culture-village-which-is-known-as-the-machu-picchu-of-busan.html"
                                    title="Visit Gamcheon Culture Village which is known as the 'Machu Picchu of Korea' - South Korea Tours">Visit
                                    Gamcheon Culture Village which is known as the 'Machu Picchu of Korea'</a>
                            </h3>
                            <p>Gamcheon Culture Village, located in Busan, South Korea, is a vibrant and
                                colorful hillside neighborhood known for its narrow alleyways, steep stairways,
                                and brightly painted houses in various...</p>
                            <div class="box-button">
                                <a href="https://www.asiatours.com/experiences/visiting-gamcheon-culture-village-which-is-known-as-the-machu-picchu-of-busan.html"
                                    title="Visit Gamcheon Culture Village which is known as the 'Machu Picchu of Korea' - South Korea Tours"
                                    class="link-st3">View More Info</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="theme-slide-img">
                            <a href="https://www.asiatours.com/experiences/visit-the-most-most-beautiful-dzong-of-bhutan-punakha-dzong.html"
                                title="Marvel at the most most beautiful dzong of Bhutan - Punakha Dzong"><img
                                    src="#"
                                    data-img="https://d2lwt6tidfiof0.cloudfront.net/uploads/photo-e/experience/Punakha-Dzong/punakha-dzong-bhutan-800x490320-399.jpg"
                                    alt=""></a>
                        </div>
                        <div class="theme-slide-text">
                            <div class="type-rotate">Punakha</div>
                            <a href="https://www.asiatours.com/bhutan/tours/" title="Bhutan Tours">Bhutan</a>
                            <h3><a href="https://www.asiatours.com/experiences/visit-the-most-most-beautiful-dzong-of-bhutan-punakha-dzong.html"
                                    title="Marvel at the most most beautiful dzong of Bhutan - Punakha Dzong - Bhutan Tours">Marvel
                                    at the most most beautiful dzong of Bhutan - Punakha Dzong</a></h3>
                            <p>Located in the bountiful Punakha Valley, right at the confluence of two rivers
                                Pho Chu (Father River) and Mo Chu (Mother River), Punakha Dzong (Palace of Great
                                Happiness) is the second oldest and...</p>
                            <div class="box-button">
                                <a href="https://www.asiatours.com/experiences/visit-the-most-most-beautiful-dzong-of-bhutan-punakha-dzong.html"
                                    title="Marvel at the most most beautiful dzong of Bhutan - Punakha Dzong - Bhutan Tours"
                                    class="link-st3">View More Info</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="theme-slide-img">
                            <a href="https://www.asiatours.com/experiences/great-time-to-exploring-the-rich-history-and-culture-of-captal-hanoi.html"
                                title="Great time to exploring the rich history and culture of Capital Hanoi"><img
                                    src="#"
                                    data-img="https://d2lwt6tidfiof0.cloudfront.net/uploads/photo-e/experience/Captal-Hanoi/captal-hanoi320-399.jpg"
                                    alt=""></a>
                        </div>
                        <div class="theme-slide-text">
                            <div class="type-rotate">Hanoi</div>
                            <a href="https://www.asiatours.com/vietnam/tours/" title="Vietnam Tours">Vietnam</a>
                            <h3><a href="https://www.asiatours.com/experiences/great-time-to-exploring-the-rich-history-and-culture-of-captal-hanoi.html"
                                    title="Great time to exploring the rich history and culture of Capital Hanoi - Vietnam Tours">Great
                                    time to exploring the rich history and culture of Capital Hanoi</a></h3>
                            <p>Hanoi - a blend between the traditional and the modern beauties - a sedate
                                capital with rich history and the unique architecture from East to West welcomes
                                you. Ho Chi Minh complex with the...</p>
                            <div class="box-button">
                                <a href="https://www.asiatours.com/experiences/great-time-to-exploring-the-rich-history-and-culture-of-captal-hanoi.html"
                                    title="Great time to exploring the rich history and culture of Capital Hanoi - Vietnam Tours"
                                    class="link-st3">View More Info</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="theme-slide-img">
                            <a href="https://www.asiatours.com/experiences/explore-the-ancient-capital-ayutthaya.html"
                                title="Explore the ancient capital Ayutthaya"><img src="#"
                                    data-img="https://d2lwt6tidfiof0.cloudfront.net/uploads/photo-e/destinations/ayutthaya/ayutthaya-thailand (4)320-399.jpg"
                                    alt=""></a>
                        </div>
                        <div class="theme-slide-text">
                            <div class="type-rotate">Ayutthaya</div>
                            <a href="https://www.asiatours.com/thailand/tours/"
                                title="Thailand Tours">Thailand</a>
                            <h3><a href="https://www.asiatours.com/experiences/explore-the-ancient-capital-ayutthaya.html"
                                    title="Explore the ancient capital Ayutthaya - Thailand Tours">Explore the
                                    ancient capital Ayutthaya</a></h3>
                            <p>A rich history and developing modern culture make Ayutthaya a fascinating place
                                to visit. Located at 85 km north of Bangkok, this special place possesses both
                                the ruins of an ancient city and the...</p>
                            <div class="box-button">
                                <a href="https://www.asiatours.com/experiences/explore-the-ancient-capital-ayutthaya.html"
                                    title="Explore the ancient capital Ayutthaya - Thailand Tours"
                                    class="link-st3">View More Info</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="theme-slide-img">
                            <a href="https://www.asiatours.com/experiences/enjoy-a-full-day-tour-visiting-hong-kong-landmarks.html"
                                title="Enjoy a full day tour visiting Hong Kong landmarks"><img src="#"
                                    data-img="https://d2lwt6tidfiof0.cloudfront.net/uploads/photo-e/experience/HK-tour/hk320-399.jpg"
                                    alt=""></a>
                        </div>
                        <div class="theme-slide-text">
                            <div class="type-rotate">Hong Kong</div>
                            <a href="https://www.asiatours.com/hong-kong/tours/" title="Hong Kong Tours">Hong
                                Kong</a>
                            <h3><a href="https://www.asiatours.com/experiences/enjoy-a-full-day-tour-visiting-hong-kong-landmarks.html"
                                    title="Enjoy a full day tour visiting Hong Kong landmarks - Hong Kong Tours">Enjoy
                                    a full day tour visiting Hong Kong landmarks</a></h3>
                            <p>Embark on a full-day tour of Hong Kong's most iconic landmarks, starting with a
                                visit to Victoria Peak, where you can enjoy breathtaking panoramic views of the
                                city skyline and Victoria Harbour....</p>
                            <div class="box-button">
                                <a href="https://www.asiatours.com/experiences/enjoy-a-full-day-tour-visiting-hong-kong-landmarks.html"
                                    title="Enjoy a full day tour visiting Hong Kong landmarks - Hong Kong Tours"
                                    class="link-st3">View More Info</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="theme-slide-img">
                            <a href="https://www.asiatours.com/experiences/visit-the-historical-city-malacca.html"
                                title="Visit the historical city Malacca"><img src="#"
                                    data-img="https://d2lwt6tidfiof0.cloudfront.net/uploads/photo-e/experience/Malacca-City/Malacca-city-1320-399.jpg"
                                    alt=""></a>
                        </div>
                        <div class="theme-slide-text">
                            <div class="type-rotate">Malacca</div>
                            <a href="https://www.asiatours.com/malaysia/tours/"
                                title="Malaysia Tours">Malaysia</a>
                            <h3><a href="https://www.asiatours.com/experiences/visit-the-historical-city-malacca.html"
                                    title="Visit the historical city Malacca - Malaysia Tours">Visit the
                                    historical city Malacca</a></h3>
                            <p>As an iconic historical hotspot of Malaysia, Malacca used to be a thriving port
                                in the past that illustrate hundreds of years of cultural and trade exchange
                                between the East and the West. Malacca not...</p>
                            <div class="box-button">
                                <a href="https://www.asiatours.com/experiences/visit-the-historical-city-malacca.html"
                                    title="Visit the historical city Malacca - Malaysia Tours"
                                    class="link-st3">View More Info</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="theme-slide-img">
                            <a href="https://www.asiatours.com/experiences/lake-beratan-and-ulun-danu-temple.html"
                                title="Lake Beratan and Ulun Danu temple in Bali"><img src="#"
                                    data-img="https://d2lwt6tidfiof0.cloudfront.net/uploads/photo-e/experience/Lake-Beratan-and-Ulun-Danu-temple/stock-photo-1000446506320-399.jpg"
                                    alt=""></a>
                        </div>
                        <div class="theme-slide-text">
                            <div class="type-rotate">Bali Island</div>
                            <a href="https://www.asiatours.com/indonesia/tours/"
                                title="Indonesia Tours">Indonesia</a>
                            <h3><a href="https://www.asiatours.com/experiences/lake-beratan-and-ulun-danu-temple.html"
                                    title="Lake Beratan and Ulun Danu temple in Bali - Indonesia Tours">Lake
                                    Beratan and Ulun Danu temple in Bali</a></h3>
                            <p>Set within the highlands of the mountainous Bedugul Regency in Bali, Lake Beratan
                                is the second largest lake in Bali that is also a perfect place for sightseeing
                                and water sports. However, the...</p>
                            <div class="box-button">
                                <a href="https://www.asiatours.com/experiences/lake-beratan-and-ulun-danu-temple.html"
                                    title="Lake Beratan and Ulun Danu temple in Bali - Indonesia Tours"
                                    class="link-st3">View More Info</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nav-arrows">
                    <button class="arrow-left arrow-radius">
                        <i class="icon-font select-arrow-thin"></i>
                    </button>
                    <button class="arrow-right arrow-radius">
                        <i class="icon-font select-arrow-thin"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="view-more-wrap">
            <a href="https://www.asiatours.com/experiences/" class="arrow-radius">
                <i class="icon-font select-arrow-thin"></i>
            </a>
            <a href="https://www.asiatours.com/experiences/" class="link-st3"
                title="All  Tour Experiences">Click to view more experiences</a>
        </div>
    </div>
</section>
<section class="section-blog-st2">
    <div class="wrap-mini-intro">
        <h2 class="title-h2-line">Asia Travel Guide & Inspirations</h2>
    </div>
    <div class="container">
        <div class="wrap-slide-st8">
            <div class="gallery">
                <div class="col-xlg-4 col-md-6 col-xsm-12">
                    <a href="https://www.asiatours.com/blog/the-best-couples-holidays-in-asia.html"
                        title="The Best Couples' Holidays in Asia">
                        <img src="#"
                            data-img="https://d2lwt6tidfiof0.cloudfront.net/uploads/photo-blog/the-best-couples-holidays-in-asia-661-650-388.jpg"
                            alt="The Best Couples' Holidays in Asia">
                    </a>
                    <div>
                        <div class="desti">Asia</div>
                        <h3><a href="https://www.asiatours.com/blog/the-best-couples-holidays-in-asia.html"
                                title="The Best Couples' Holidays in Asia">The Best Couples' Holidays in
                                Asia</a></h3>
                        <p>Asia has a way of slowing time. It invites couples to step out of routine and into a
                            world where mornings begin with misty...</p>
                    </div>
                </div>
                <div class="col-xlg-4 col-md-6 col-xsm-12">
                    <a href="https://www.asiatours.com/blog/top-family-friendly-theme-parks-in-asia.html"
                        title="Top Family-Friendly Theme Parks in Asia">
                        <img src="#"
                            data-img="https://d2lwt6tidfiof0.cloudfront.net/uploads/photo-blog/top-family-friendly-theme-parks-in-asia-1-650-388.jpg"
                            alt="Top Family-Friendly Theme Parks in Asia">
                    </a>
                    <div>
                        <div class="desti">Asia</div>
                        <h3><a href="https://www.asiatours.com/blog/top-family-friendly-theme-parks-in-asia.html"
                                title="Top Family-Friendly Theme Parks in Asia">Top Family-Friendly Theme Parks
                                in Asia</a></h3>
                        <p>Asia's theme parks are as diverse as the continent itself, offering everything from
                            spellbinding Disney magic to culturally...</p>
                    </div>
                </div>
                <div class="col-xlg-4 col-md-6 col-xsm-12">
                    <a href="https://www.asiatours.com/blog/sri-lanka-india-epic-wildlife-and-timeless-wonders.html"
                        title="Sri Lanka & India: Epic Wildlife and Timeless Wonders">
                        <img src="#"
                            data-img="https://d2lwt6tidfiof0.cloudfront.net/uploads/photo-blog/sri-lanka-india-epic-wildlife-and-timeless-wonders-537-650-388.jpg"
                            alt="Sri Lanka & India: Epic Wildlife and Timeless Wonders">
                    </a>
                    <div>
                        <div class="desti">India, Sri Lanka</div>
                        <h3><a href="https://www.asiatours.com/blog/sri-lanka-india-epic-wildlife-and-timeless-wonders.html"
                                title="Sri Lanka & India: Epic Wildlife and Timeless Wonders">Sri Lanka & India:
                                Epic Wildlife and Timeless Wonders</a></h3>
                        <p>When people imagine world-class wildlife safaris, ancient civilizations, and iconic
                            landmarks, they often picture faraway...</p>
                    </div>
                </div>
                <div class="col-xlg-4 col-md-6 col-xsm-12">
                    <a href="https://www.asiatours.com/blog/two-kingdoms-of-the-himalayas-why-nepal-bhutan-belong-in-one-trip.html"
                        title="Two Kingdoms of the Himalayas: Why Nepal & Bhutan Belong in One Trip">
                        <img src="#"
                            data-img="https://d2lwt6tidfiof0.cloudfront.net/uploads/photo-blog/two-kingdoms-of-the-himalayas-why-nepal-bhutan-bel-493-650-388.jpg"
                            alt="Two Kingdoms of the Himalayas: Why Nepal & Bhutan Belong in One Trip">
                    </a>
                    <div>
                        <div class="desti">Bhutan, Nepal</div>
                        <h3><a href="https://www.asiatours.com/blog/two-kingdoms-of-the-himalayas-why-nepal-bhutan-belong-in-one-trip.html"
                                title="Two Kingdoms of the Himalayas: Why Nepal & Bhutan Belong in One Trip">Two
                                Kingdoms of the Himalayas: Why Nepal & Bhutan Belong in One Trip</a></h3>
                        <p>There is something magnetic about the Himalayas: those impossible walls of rock and
                            ice that catch the sunrise before the rest of...</p>
                    </div>
                </div>
                <div class="col-xlg-4 col-md-6 col-xsm-12">
                    <a href="https://www.asiatours.com/blog/spring-wonders-chasing-cherry-blossoms-across-japan-korea.html"
                        title="Spring Wonders: Chasing Cherry Blossoms Across Japan & Korea">
                        <img src="#"
                            data-img="https://d2lwt6tidfiof0.cloudfront.net/uploads/photo-blog/spring-wonders-chasing-cherry-blossoms-across-japa-238-650-388.jpg"
                            alt="Spring Wonders: Chasing Cherry Blossoms Across Japan & Korea">
                    </a>
                    <div>
                        <div class="desti">Japan, South Korea</div>
                        <h3><a href="https://www.asiatours.com/blog/spring-wonders-chasing-cherry-blossoms-across-japan-korea.html"
                                title="Spring Wonders: Chasing Cherry Blossoms Across Japan & Korea">Spring
                                Wonders: Chasing Cherry Blossoms Across Japan & Korea</a></h3>
                        <p>If you’re dreaming of a pastel-pink spring, few journeys rival a two-country sweep
                            through Japan and South Korea at sakura...</p>
                    </div>
                </div>
                <div class="col-xlg-4 col-md-6 col-xsm-12">
                    <a href="https://www.asiatours.com/blog/why-thailand-singapore-should-be-your-next-family-adventure.html"
                        title="Why Thailand & Singapore Should Be Your Next Family Adventure">
                        <img src="#"
                            data-img="https://d2lwt6tidfiof0.cloudfront.net/uploads/photo-blog/why-thailand-singapore-should-be-your-next-family--228-650-388.jpg"
                            alt="Why Thailand & Singapore Should Be Your Next Family Adventure">
                    </a>
                    <div>
                        <div class="desti">Thailand, Singapore</div>
                        <h3><a href="https://www.asiatours.com/blog/why-thailand-singapore-should-be-your-next-family-adventure.html"
                                title="Why Thailand & Singapore Should Be Your Next Family Adventure">Why
                                Thailand & Singapore Should Be Your Next Family Adventure</a></h3>
                        <p>Planning a family getaway means finding that sweet spot where fun, comfort, and
                            connection come together. You want a place that...</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="view-more-wrap">
            <a href="https://www.asiatours.com/blog/" title="Asia Travel Guide" class="link-st3">Click to view
                more Asia Travel Guide</a>
        </div>
    </div>
</section>
<section class="list-faq">
    <div class="wrap-mini-intro">
        <h2 class="title-h2-line">FAQs about Asia Tours</h2>
    </div>
    <div class="container">
        <div class="wrap-faq">
            <div class="order-day">
                <a href="javascript:;">
                    <img src="#" data-img="https://d2lwt6tidfiof0.cloudfront.net/images/icon/icon_faq.svg"
                        alt="">
                    <h3>What is the cost of a luxury tour in Asia?</h3>
                    <button>
                        <i class="icon-font select-arrow-thin"></i>
                    </button>
                </a>
                <div class="panel" style="display: none;">
                    <p class="paragraph">The cost of a luxury tour in Asia can vary widely depending on several
                        factors, including the destinations visited, the duration of the tour, the level of
                        luxury desired, and the specific activities and accommodations included. It's important
                        to work with reputable tour operators or travel advisors who specialize in luxury travel
                        to ensure that your tour meets your expectations and preferences within your budget. We
                        can provide detailed itineraries and cost tailored to your specific interests and
                        requirements</p>
                </div>
            </div>
            <div class="order-day">
                <a href="javascript:;">
                    <img src="#" data-img="https://d2lwt6tidfiof0.cloudfront.net/images/icon/icon_faq.svg"
                        alt="">
                    <h3>Is the Asia tour fully private?</h3>
                    <button>
                        <i class="icon-font select-arrow-thin"></i>
                    </button>
                </a>
                <div class="panel" style="display: none;">
                    <p class="paragraph">Yes, you are correct. The Asia tour will be privated just for you (and
                        your travel partners). Exception is overnight on <strong><a
                                href="https://www.halongbaycruises.com/" target="_blank">Halong Bay
                                Cruise</a></strong>, <strong><a href="https://www.mekongrivercruises.com/"
                                target="_blank">Mekong River Cruise</a></strong> and <strong><a
                                href="https://www.myanmarrivercruises.com/" target="_blank">Myanmar River
                                Cruise</a></strong>, you will share the cruise guide and sightseeing with other
                        guests, but stay in your own room. Any other special circumstances will be noted case by
                        case.</p>
                </div>
            </div>
            <div class="order-day">
                <a href="javascript:;">
                    <img src="#" data-img="https://d2lwt6tidfiof0.cloudfront.net/images/icon/icon_faq.svg"
                        alt="">
                    <h3>Is it safe to book a tour online with Asia Tours?</h3>
                    <button>
                        <i class="icon-font select-arrow-thin"></i>
                    </button>
                </a>
                <div class="panel" style="display: none;">
                    <p class="paragraph">As we are more interconnected by developing technology, online bookings
                        are safer and more familiar by time. Asia Tours are confident to chill you out as fully
                        licensed & trusted company as official member of ATTA, ASTA, FTA; 6 consecutive-year
                        Tripadvisor Travelers' Choice Awards, World Travel Awards winner & proudly recommended
                        by well-known travel magazines such as National Geographic, CNN Travel, The Washington
                        Post... With our trusted Accreditations, Secure Payment Methods, Verified Contact
                        Information, we hope these are helpful resources for you to make a wise decision.
                    </p>
                </div>
            </div>
            <div class="order-day">
                <a href="javascript:;">
                    <img src="#" data-img="https://d2lwt6tidfiof0.cloudfront.net/images/icon/icon_faq.svg"
                        alt="">
                    <h3>How is Asia Tours different from other tour companies?</h3>
                    <button>
                        <i class="icon-font select-arrow-thin"></i>
                    </button>
                </a>
                <div class="panel" style="display: none;">
                    <p class="paragraph">We provide private and customized packages in a wide range of Asian
                        countries. We let clients decide the departure date, the duration of the trip and the
                        places they want then tailor a fabulous trips upon their requests. Also, with our
                        enriched local expertise, bunches of different sample Asia tours are available on our
                        website to inspire clients, especially multi-country tours with competitive price
                        offers. In short, the dedication, agility and knowledge are our core values to build the
                        team on and increase customer loyalty.</p>
                </div>
            </div>
            <div class="order-day">
                <a href="javascript:;">
                    <img src="#" data-img="https://d2lwt6tidfiof0.cloudfront.net/images/icon/icon_faq.svg"
                        alt="">
                    <h3>Do I need a Travel Insuarance for my Asia Tour?</h3>
                    <button>
                        <i class="icon-font select-arrow-thin"></i>
                    </button>
                </a>
                <div class="panel" style="display: none;">
                    <p class="paragraph">It's totally up to your needs. However, having travel insurance can
                        provide valuable protection and peace of mind in case of unexpected events during your
                        Asia Tours. Before purchasing travel insurance, you are advised to review carefully the
                        policy terms, coverage limits, exclusions, and any pre-existing medical condition
                        clauses. Consider your specific travel needs and risks to determine the level of
                        coverage that's right for you. Additionally, check if you already have any existing
                        coverage through your credit card, health insurance, or other sources, as you may
                        already be partially covered for certain aspects of your trip.</p>
                </div>
            </div>
            <div class="order-day">
                <a href="javascript:;">
                    <img src="#" data-img="https://d2lwt6tidfiof0.cloudfront.net/images/icon/icon_faq.svg"
                        alt="">
                    <h3>Can you provide assistance while I am at a destination?</h3>
                    <button>
                        <i class="icon-font select-arrow-thin"></i>
                    </button>
                </a>
                <div class="panel" style="display: none;">
                    <p class="paragraph">Every customer will have a dedicated Travel Expert following up during
                        the trip, who would be in touch with customer from the initiated inquiry till the time
                        the tour finishes. Besides, there would be local operator & customer-care staff to back
                        up Travel Expert and clients in their Asia tours. So, whichever assistance request in
                        tour, there will be a team behind to support you until a satisfied solution is found.
                    </p>
                </div>
            </div>
            <div class="order-day">
                <a href="javascript:;">
                    <img src="#" data-img="https://d2lwt6tidfiof0.cloudfront.net/images/icon/icon_faq.svg"
                        alt="">
                    <h3>What forms of payment are accepted?</h3>
                    <button>
                        <i class="icon-font select-arrow-thin"></i>
                    </button>
                </a>
                <div class="panel" style="display: none;">
                    <p class="paragraph">Asia Tours accepts all major credit cards and wire transfer via bank
                        account. In additional, cash is accepted upon arrival for the balance in some cases.</p>
                </div>
            </div>
            <div class="order-day">
                <a href="javascript:;">
                    <img src="#" data-img="https://d2lwt6tidfiof0.cloudfront.net/images/icon/icon_faq.svg"
                        alt="">
                    <h3>What is the difference between the economy, deluxe and luxury tours in your website?
                    </h3>
                    <button>
                        <i class="icon-font select-arrow-thin"></i>
                    </button>
                </a>
                <div class="panel" style="display: none;">
                    <p class="paragraph">While the airport experience, car service, tour guides, meals, etc.
                        would be the same, the main difference among tour categories is the hotel standard
                        (Economy: 3-star, Deluxe: 4-star, Luxury: 5-star). However, since we do customized
                        packages, every item could be flexible to be customized/upgraded to fit clients'
                        personal standard.</p>
                </div>
            </div>
            <div class="order-day">
                <a href="javascript:;">
                    <img src="#" data-img="https://d2lwt6tidfiof0.cloudfront.net/images/icon/icon_faq.svg"
                        alt="">
                    <h3>Do I have our own certain free time in Asia tour?</h3>
                    <button>
                        <i class="icon-font select-arrow-thin"></i>
                    </button>
                </a>
                <div class="panel" style="display: none;">
                    <p class="paragraph">Absolutely! As the tour is designed upon your travel wish and plan, we
                        always make sure you have enough free time to relax or do own schedules every day after
                        finishing activities with us.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="wrap-mini-intro">
        <h2 class="title-h2-line">
            Our Customers' Recent Travel Experience </h2>
    </div>
    <div class="container recent-travel-block">
        <div class="wrap-recent-travel wrap-slide-st8">
            <div class="gallery">
                <div class="col-xlg-3 col-md-6 col-sm-12 col-xsm-12">
                    <a href="https://www.asiatours.com/tours/bangkok-pattaya-short-trip.html"
                        title="Bangkok - Pattaya Short Trip" class="recent-travel-image" target="_blank"><img
                            src="https://d2lwt6tidfiof0.cloudfront.net/uploads/slide/45794-1695693637.jpg"
                            data-img="https://d2lwt6tidfiof0.cloudfront.net/uploads/slide/45794-1695693637.jpg" />
                        <div>
                            <div>
                                <span class="icon-address"><i class="icon-font icon-menu-4"></i></span>
                                <span class="text-address"> Pattaya, Thailand </span>
                            </div>
                            <div>
                                <span class="text-view-tour">View Tour</span>
                                <span class="icon-view-tour"><i class="icon-font external-link"></i></span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xlg-3 col-md-6 col-sm-12 col-xsm-12">
                    <a href="https://www.asiatours.com/tours/exclusive-family-holiday-in-singapore-japan.html"
                        title="Exclusive Family Holiday in Singapore & Japan" class="recent-travel-image"
                        target="_blank"><img
                            src="https://d2lwt6tidfiof0.cloudfront.net/uploads/slide/1250-1761194613.jpg"
                            data-img="https://d2lwt6tidfiof0.cloudfront.net/uploads/slide/1250-1761194613.jpg" />
                        <div>
                            <div>
                                <span class="icon-address"><i class="icon-font icon-menu-4"></i></span>
                                <span class="text-address"> Kanazawa, Japan </span>
                            </div>
                            <div>
                                <span class="text-view-tour">View Tour</span>
                                <span class="icon-view-tour"><i class="icon-font external-link"></i></span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xlg-3 col-md-6 col-sm-12 col-xsm-12">
                    <a href="https://www.asiatours.com/tours/best-of-north-india-tour.html"
                        title="Best of North India Tour" class="recent-travel-image" target="_blank"><img
                            src="https://d2lwt6tidfiof0.cloudfront.net/uploads/slide/asia-63704-1742959832.jpg"
                            data-img="https://d2lwt6tidfiof0.cloudfront.net/uploads/slide/asia-63704-1742959832.jpg" />
                        <div>
                            <div>
                                <span class="icon-address"><i class="icon-font icon-menu-4"></i></span>
                                <span class="text-address"> Delhi, India </span>
                            </div>
                            <div>
                                <span class="text-view-tour">View Tour</span>
                                <span class="icon-view-tour"><i class="icon-font external-link"></i></span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xlg-3 col-md-6 col-sm-12 col-xsm-12">
                    <a href="https://www.asiatours.com/tours/pleasant-vietnam-thailand-vacation.html"
                        title="Pleasant Vietnam & Thailand Vacation" class="recent-travel-image"
                        target="_blank"><img
                            src="https://d2lwt6tidfiof0.cloudfront.net/uploads/slide/594-1724513394.jpg"
                            data-img="https://d2lwt6tidfiof0.cloudfront.net/uploads/slide/594-1724513394.jpg" />
                        <div>
                            <div>
                                <span class="icon-address"><i class="icon-font icon-menu-4"></i></span>
                                <span class="text-address"> Hanoi, Vietnam </span>
                            </div>
                            <div>
                                <span class="text-view-tour">View Tour</span>
                                <span class="icon-view-tour"><i class="icon-font external-link"></i></span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xlg-3 col-md-6 col-sm-12 col-xsm-12">
                    <a href="https://www.asiatours.com/tours/great-journey-through-southeast-asia.html"
                        title="Great Journey Through Southeast Asia" class="recent-travel-image"
                        target="_blank"><img
                            src="https://d2lwt6tidfiof0.cloudfront.net/uploads/slide/1202-1759374044.jpg"
                            data-img="https://d2lwt6tidfiof0.cloudfront.net/uploads/slide/1202-1759374044.jpg" />
                        <div>
                            <div>
                                <span class="icon-address"><i class="icon-font icon-menu-4"></i></span>
                                <span class="text-address"> Siem Reap, Cambodia </span>
                            </div>
                            <div>
                                <span class="text-view-tour">View Tour</span>
                                <span class="icon-view-tour"><i class="icon-font external-link"></i></span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xlg-3 col-md-6 col-sm-12 col-xsm-12">
                    <a href="https://www.asiatours.com/tours/china-family-tour.html" title="China Family Tour"
                        class="recent-travel-image" target="_blank"><img
                            src="https://d2lwt6tidfiof0.cloudfront.net/uploads/slide/1012-1749828146.jpg"
                            data-img="https://d2lwt6tidfiof0.cloudfront.net/uploads/slide/1012-1749828146.jpg" />
                        <div>
                            <div>
                                <span class="icon-address"><i class="icon-font icon-menu-4"></i></span>
                                <span class="text-address"> Beijing, China </span>
                            </div>
                            <div>
                                <span class="text-view-tour">View Tour</span>
                                <span class="icon-view-tour"><i class="icon-font external-link"></i></span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xlg-3 col-md-6 col-sm-12 col-xsm-12">
                    <a href="https://www.asiatours.com/tours/bali-flores-sumba-adventure.html"
                        title="Bali - Flores - Sumba Adventure" class="recent-travel-image" target="_blank"><img
                            src="https://d2lwt6tidfiof0.cloudfront.net/uploads/slide/43714-1695693793.jpg"
                            data-img="https://d2lwt6tidfiof0.cloudfront.net/uploads/slide/43714-1695693793.jpg" />
                        <div>
                            <div>
                                <span class="icon-address"><i class="icon-font icon-menu-4"></i></span>
                                <span class="text-address"> Komodo Island, Indonesia </span>
                            </div>
                            <div>
                                <span class="text-view-tour">View Tour</span>
                                <span class="icon-view-tour"><i class="icon-font external-link"></i></span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xlg-3 col-md-6 col-sm-12 col-xsm-12">
                    <a href="https://www.asiatours.com/tours/hidden-paradise-philippines.html"
                        title="Hidden Paradise Philippines" class="recent-travel-image" target="_blank"><img
                            src="https://d2lwt6tidfiof0.cloudfront.net/uploads/slide/544-1724337159.jpg"
                            data-img="https://d2lwt6tidfiof0.cloudfront.net/uploads/slide/544-1724337159.jpg" />
                        <div>
                            <div>
                                <span class="icon-address"><i class="icon-font icon-menu-4"></i></span>
                                <span class="text-address"> El Nido, Philippines </span>
                            </div>
                            <div>
                                <span class="text-view-tour">View Tour</span>
                                <span class="icon-view-tour"><i class="icon-font external-link"></i></span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="view-more-wrap">
            <a rel="nofollow" href="https://www.asiatours.com/customers-experiences.html"
                title="Customers Recent Travel Experience" class="link-st3">View More Our Customers'
                Experience</a>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="water-mask">real local experiences</div>
    </div>
</section>
<section class="section-crowd">
    <div class="container">
        <div class="parameter-box">
            <div>
                <b>18</b>
                <span>Countries</span>
            </div>
            <div>
                <b>316</b>
                <span>Destinations</span>
            </div>
            <div>
                <b>900+</b>
                <span>Unique Experiences</span>
            </div>
            <div>
                <b>98%</b>
                <span>Reviews Rated Excellent</span>
            </div>
            <div>
                <b>20.000+</b>
                <span>Happy Guests</span>
            </div>
        </div>
    </div>
    <div class="crowd-container">
        <a href="javascript:;" class="crowd-box crow-size-1 open-info-modal" data-content="1">
            <div class="box-img">
                <img src="#" data-img="https://d2lwt6tidfiof0.cloudfront.net/images/feedbacks/1/200-250.jpg"
                    alt="">
            </div>
            <i class="icon-font external-link"></i>
            <div>
                <i class="icon-font asiatours-black"></i>
                <font>Ms. Ruth Moreland</font>
            </div>
        </a>
        <a href="javascript:;" class="crowd-box crow-size-1 open-info-modal" data-content="2">
            <div class="box-img">
                <img src="#" data-img="https://d2lwt6tidfiof0.cloudfront.net/images/feedbacks/2/200-250.jpg"
                    alt="">
            </div>
            <i class="icon-font external-link"></i>
            <div>
                <i class="icon-font asiatours-black"></i>
                <font>Mr. Cliff Turner</font>
            </div>
        </a>
        <a href="javascript:;" class="crowd-box crow-size-2 open-info-modal" data-content="3">
            <div class="box-img">
                <img src="#" data-img="https://d2lwt6tidfiof0.cloudfront.net/images/feedbacks/3/250-250.jpg"
                    alt="">
            </div>
            <i class="icon-font external-link"></i>
            <div>
                <i class="icon-font asiatours-black"></i>
                <font>Mr. John Marcus Thomas</font>
            </div>
        </a>
        <a href="javascript:;" class="crowd-box crow-size-1 open-info-modal" data-content="4">
            <div class="box-img">
                <img src="#" data-img="https://d2lwt6tidfiof0.cloudfront.net/images/feedbacks/4/200-250.jpg"
                    alt="">
            </div>
            <i class="icon-font external-link"></i>
            <div>
                <i class="icon-font asiatours-black"></i>
                <font>Mr. Mike Jefferys</font>
            </div>
        </a>
        <a href="javascript:;" class="crowd-box crow-size-1 open-info-modal" data-content="5">
            <div class="box-img">
                <img src="#" data-img="https://d2lwt6tidfiof0.cloudfront.net/images/feedbacks/5/200-250.jpg"
                    alt="">
            </div>
            <i class="icon-font external-link"></i>
            <div>
                <i class="icon-font asiatours-black"></i>
                <font>Mrs. Sue Smith</font>
            </div>
        </a>
        <a href="javascript:;" class="crowd-box crow-size-1 open-info-modal" data-content="6">
            <div class="box-img">
                <img src="#" data-img="https://d2lwt6tidfiof0.cloudfront.net/images/feedbacks/6/200-250.jpg"
                    alt="">
            </div>
            <i class="icon-font external-link"></i>
            <div>
                <i class="icon-font asiatours-black"></i>
                <font>Ms. Lawrence Ginsberg</font>
            </div>
        </a>
        <a href="javascript:;" class="crowd-box crow-size-3 open-info-modal" data-content="7">
            <div class="box-img">
                <img src="#" data-img="https://d2lwt6tidfiof0.cloudfront.net/images/feedbacks/7/375-281.jpg"
                    alt="">
            </div>
            <i class="icon-font external-link"></i>
            <div>
                <i class="icon-font asiatours-black"></i>
                <font>Mrs. Kylie Beckhouse</font>
            </div>
        </a>
        <a href="javascript:;" class="crowd-box crow-size-1 open-info-modal" data-content="8">
            <div class="box-img">
                <img src="#" data-img="https://d2lwt6tidfiof0.cloudfront.net/images/feedbacks/8/200-250.jpg"
                    alt="">
            </div>
            <i class="icon-font external-link"></i>
            <div>
                <i class="icon-font asiatours-black"></i>
                <font>Ms. Xuan</font>
            </div>
        </a>
        <a href="javascript:;" class="crowd-box open-info-modal" data-content="9">
            <div class="box-img">
                <img src="#" data-img="https://d2lwt6tidfiof0.cloudfront.net/images/feedbacks/9/200-250.jpg"
                    alt="">
            </div>
            <i class="icon-font external-link"></i>
            <div>
                <i class="icon-font asiatours-black"></i>
                <font>Mr. Kenneth Walkky</font>
            </div>
        </a>
        <a href="javascript:;" class="crowd-box open-info-modal" data-content="10">
            <div class="box-img">
                <img src="#" data-img="https://d2lwt6tidfiof0.cloudfront.net/images/feedbacks/10/375-281.jpg"
                    alt="">
            </div>
            <i class="icon-font external-link"></i>
            <div>
                <i class="icon-font asiatours-black"></i>
                <font>Mr. Brett Roberts</font>
            </div>
        </a>
        <a href="javascript:;" class="crowd-box open-info-modal" data-content="11">
            <div class="box-img">
                <img src="#" data-img="https://d2lwt6tidfiof0.cloudfront.net/images/feedbacks/11/200-250.jpg"
                    alt="">
            </div>
            <i class="icon-font external-link"></i>
            <div>
                <i class="icon-font asiatours-black"></i>
                <font>Mr. Hoan Anh Nguyen</font>
            </div>
        </a>
        <a href="javascript:;" class="crowd-box open-info-modal" data-content="12">
            <div class="box-img">
                <img src="#" data-img="https://d2lwt6tidfiof0.cloudfront.net/images/feedbacks/12/250-250.jpg"
                    alt="">
            </div>
            <i class="icon-font external-link"></i>
            <div>
                <i class="icon-font asiatours-black"></i>
                <font>Mr. Scott Daniels</font>
            </div>
        </a>
        <a href="javascript:;" class="crowd-box open-info-modal" data-content="13">
            <div class="box-img">
                <img src="#" data-img="https://d2lwt6tidfiof0.cloudfront.net/images/feedbacks/13/225-250.jpg"
                    alt="">
            </div>
            <i class="icon-font external-link"></i>
            <div>
                <i class="icon-font asiatours-black"></i>
                <font>Ms. Gweniver Exton</font>
            </div>
        </a>
        <a href="javascript:;" class="crowd-box open-info-modal" data-content="14">
            <div class="box-img">
                <img src="#" data-img="https://d2lwt6tidfiof0.cloudfront.net/images/feedbacks/14/250-250.jpg"
                    alt="">
            </div>
            <i class="icon-font external-link"></i>
            <div>
                <i class="icon-font asiatours-black"></i>
                <font>Mr. Roberto Dicasillati</font>
            </div>
        </a>
        <a href="javascript:;" class="crowd-box open-info-modal" data-content="15">
            <div class="box-img">
                <img src="#" data-img="https://d2lwt6tidfiof0.cloudfront.net/images/feedbacks/15/200-250.jpg"
                    alt="">
            </div>
            <i class="icon-font external-link"></i>
            <div>
                <i class="icon-font asiatours-black"></i>
                <font>Mr. Torsten Spillecke</font>
            </div>
        </a>
        <a href="javascript:;" class="crowd-box open-info-modal" data-content="16">
            <div class="box-img">
                <img src="#" data-img="https://d2lwt6tidfiof0.cloudfront.net/images/feedbacks/16/200-250.jpg"
                    alt="">
            </div>
            <i class="icon-font external-link"></i>
            <div>
                <i class="icon-font asiatours-black"></i>
                <font>Ms. Liz Anderson</font>
            </div>
        </a>
        <a href="javascript:;" class="crowd-box open-info-modal" data-content="17">
            <div class="box-img">
                <img src="#" data-img="https://d2lwt6tidfiof0.cloudfront.net/images/feedbacks/17/200-250.jpg"
                    alt="">
            </div>
            <i class="icon-font external-link"></i>
            <div>
                <i class="icon-font asiatours-black"></i>
                <font>Mr. Karthik Padmanabhan</font>
            </div>
        </a>
        <a href="javascript:;" class="crowd-box open-info-modal" data-content="18">
            <div class="box-img">
                <img src="#" data-img="https://d2lwt6tidfiof0.cloudfront.net/images/feedbacks/18/225-250.jpg"
                    alt="">
            </div>
            <i class="icon-font external-link"></i>
            <div>
                <i class="icon-font asiatours-black"></i>
                <font>Ms. Julie Murray</font>
            </div>
        </a>
        <a href="javascript:;" class="crowd-box open-info-modal" data-content="19">
            <div class="box-img">
                <img src="#" data-img="https://d2lwt6tidfiof0.cloudfront.net/images/feedbacks/19/200-250.jpg"
                    alt="">
            </div>
            <i class="icon-font external-link"></i>
            <div>
                <i class="icon-font asiatours-black"></i>
                <font>Ms. Daniela</font>
            </div>
        </a>
        <a href="javascript:;" class="crowd-box open-info-modal" data-content="20">
            <div class="box-img">
                <img src="#" data-img="https://d2lwt6tidfiof0.cloudfront.net/images/feedbacks/20/202-250.jpg"
                    alt="">
            </div>
            <i class="icon-font external-link"></i>
            <div>
                <i class="icon-font asiatours-black"></i>
                <font>Ms. Mai Nguyen</font>
            </div>
        </a>
        <a href="javascript:;" class="crowd-box open-info-modal" data-content="21">
            <div class="box-img">
                <img src="#" data-img="https://d2lwt6tidfiof0.cloudfront.net/images/feedbacks/21/200-250.jpg"
                    alt="">
            </div>
            <i class="icon-font external-link"></i>
            <div>
                <i class="icon-font asiatours-black"></i>
                <font>Ms. Lavon</font>
            </div>
        </a>
        <a href="javascript:;" class="crowd-box open-info-modal" data-content="22">
            <div class="box-img">
                <img src="#" data-img="https://d2lwt6tidfiof0.cloudfront.net/images/feedbacks/22/202-249.jpg"
                    alt="">
            </div>
            <i class="icon-font external-link"></i>
            <div>
                <i class="icon-font asiatours-black"></i>
                <font>Ms. Faigie Grunberg</font>
            </div>
        </a>
        <a href="javascript:;" class="crowd-box open-info-modal" data-content="23">
            <div class="box-img">
                <img src="#" data-img="https://d2lwt6tidfiof0.cloudfront.net/images/feedbacks/23/200-250.jpg"
                    alt="">
            </div>
            <i class="icon-font external-link"></i>
            <div>
                <i class="icon-font asiatours-black"></i>
                <font>Mr. Chirath</font>
            </div>
        </a>
        <a href="javascript:;" class="crowd-box open-info-modal" data-content="24">
            <div class="box-img">
                <img src="#" data-img="https://d2lwt6tidfiof0.cloudfront.net/images/feedbacks/24/203-250.jpg"
                    alt="">
            </div>
            <i class="icon-font external-link"></i>
            <div>
                <i class="icon-font asiatours-black"></i>
                <font>Mr. Martin</font>
            </div>
        </a>
        <div class="view-more-wrap">
            <a href="javascript:;" class="link-st4">Load more<i class="icon-font select-arrow-thin"></i></a>
            <a rel="nofollow" href="https://www.asiatours.com/customers-experiences.html"
                title="Customers Recent Travel Experience" class="link-st3" style="display:none">View More Our
                Customers' Experience</a>
        </div>
    </div>
</section>
<div class="modal-2 modal-info-team close-display">
    <button class="btn-close" aria-label="close modal">&times;</button>
    <div id="detail_modal_review_home" class="modal-content"></div>
</div>

@endsection