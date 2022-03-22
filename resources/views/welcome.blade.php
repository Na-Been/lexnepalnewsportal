@extends('frontend.layouts.app')
@section('title','Home')
@section('content')

    <section class="ads py-3">
        <div class="container">
            <img width="100%" src="https://jagaranpost.com/wp-content/uploads/2020/12/ads.gif" alt="">
        </div>
    </section>
    <!-- topnews -->
    <section class="news py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="news_block">
                        <h1 class="news_title pb-4 text-center" style="font-size: 40px;">
                            यसरी पुरा भयो काठमाडौंवासीको वर्षौ देखिको सपना, नेताको भोट
                            माग्ने एउटा नारा पनि सकियो
                        </h1>
                        <div class="block_image">
                            <img src="http://www.{{getSetting('site-title')??'LexNepal '}}.com/wp-content/uploads/2020/09/rastriya-sabhako-girdo-saakh-514x300.jpg"
                                 alt="" />
                            <p class="news_description mt-3 text-center">
                                २०७४ सालको प्रतिनिधिसभा निर्वाचनमा पराजित नेपाल कम्युनिस्ट
                                पार्टी (नेकपा)का उपाध्यक्ष वामदेव गौतमलाई सरकारले मनोनयनको
                                सिफारिस गरेसँगै राष्ट्रियसभा सदस्य बन्ने गौतमको चाहना अन्ततः
                                पूरा हुने भएको छ । तर प्रतिनिधिसभाको उही कार्यकालमा पराजित
                                व्यक्तिलाई पार्टीको आन्तरिक शक्ति सन्तुलन मिलाउने नाममा
                                राष्ट्रियसभामा पु¥याउने...
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="news py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="news_block">
                        <div class="block-header">
                            <h3 class="block-title">न्यायालय अप्डेट</h3>
                            <h5 class="block-title-all"><a href="">सबै हेनुर्होस</a></h5>
                        </div>
                        <div class="block_image">
                            <img src="http://www.{{getSetting('site-title')??'LexNepal '}}.com/wp-content/uploads/2020/09/rastriya-sabhako-girdo-saakh-514x300.jpg"
                                 alt="" />
                            <p class="news_description mt-3">
                                २०७४ सालको प्रतिनिधिसभा निर्वाचनमा पराजित नेपाल कम्युनिस्ट
                                पार्टी (नेकपा)का उपाध्यक्ष वामदेव गौतमलाई सरकारले मनोनयनको
                                सिफारिस गरेसँगै राष्ट्रियसभा सदस्य बन्ने गौतमको चाहना अन्ततः
                                पूरा हुने भएको छ । तर प्रतिनिधिसभाको उही कार्यकालमा पराजित
                                व्यक्तिलाई पार्टीको आन्तरिक शक्ति सन्तुलन मिलाउने नाममा
                                राष्ट्रियसभामा पु¥याउने...
                            </p>
                        </div>
                    </div>
                </div>

                <!-- ताजा खबर -->
                <div class="col-md-4">
                    <div class="news-block">
                        <div class="block-header">
                            <h3 class="block-title">ताजा खबर</h3>
                            <h5 class="block-title-all"><a href="">सबै हेनुर्होस</a></h5>
                        </div>
                    </div>

                    <ul>
                        <li class="pb-3">
                            <a href="/news-detail.html">
                                <div class="row">
                                    <div class="col-2">
                                        <div class="news_list_number">
                                            <span> १</span>
                                        </div>
                                    </div>
                                    <div class="col-10">
                                        <h5 class="news_title">
                                            आपराधिक घटनामा बालक नै बढी संलग्न
                                        </h5>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="pb-3">
                            <a href="/news-detail.html">
                                <div class="row">
                                    <div class="col-2">
                                        <div class="news_list_number">
                                            <span> २</span>
                                        </div>
                                    </div>
                                    <div class="col-10">
                                        <h5 class="news_title">
                                            न्यायालयमा विदेशी हस्तक्षेप प्रधानन्यायालय बनाउँदा देखि
                                            नै
                                        </h5>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="pb-3">
                            <a href="/news-detail.html">
                                <div class="row">
                                    <div class="col-2">
                                        <div class="news_list_number">
                                            <span> ३ </span>
                                        </div>
                                    </div>
                                    <div class="col-10">
                                        <h5 class="news_title">
                                            आपराधिक घटनामा बालक नै बढी संलग्न
                                        </h5>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="pb-3">
                            <a href="/news-detail.html">
                                <div class="row">
                                    <div class="col-2">
                                        <div class="news_list_number">
                                            <span> ४</span>
                                        </div>
                                    </div>
                                    <div class="col-10">
                                        <h5 class="news_title">
                                            सार्कस्तरीय सांस्कृतिक महोत्सव शुरु
                                        </h5>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="pb-3">
                            <a href="/news-detail.html">
                                <div class="row">
                                    <div class="col-2">
                                        <div class="news_list_number">
                                            <span> ५</span>
                                        </div>
                                    </div>
                                    <div class="col-10">
                                        <h5 class="news_title">
                                            समृद्धि अनुकूल अन्तर्राष्ट्रिय सम्बन्ध विस्तारमा
                                            प्राथमिकता
                                        </h5>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="pb-3">
                            <a href="/news-detail.html">
                                <div class="row">
                                    <div class="col-2">
                                        <div class="news_list_number">
                                            <span>६</span>
                                        </div>
                                    </div>
                                    <div class="col-10">
                                        <h5 class="news_title">भन्सारमा अनलाइन सेवा</h5>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="pb-3">
                            <a href="/">
                                <div class="row">
                                    <div class="col-2">
                                        <div class="news_list_number">
                                            <span> ७</span>
                                        </div>
                                    </div>
                                    <div class="col-10">
                                        <h5 class="news_title">
                                            विपन्नलाई उद्यमशील बनाउन बिना धितो ऋण दिइने
                                        </h5>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="pb-3">
                            <a href="">
                                <div class="row">
                                    <div class="col-2">
                                        <div class="news_list_number">
                                            <span> ८</span>
                                        </div>
                                    </div>
                                    <div class="col-10">
                                        <h5 class="news_title">
                                            अस्पताल गएकी २५ वर्षीया महिलालाई डाक्टरले हेर्नुपर्ने
                                            एकतिर अर्को तिर ....
                                        </h5>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- कानुन ग्यालरी -->
    <section class="bichar-bislesan py-5">
        <div class="container">
            <div class="block-header">
                <h3 class="block-title">न्यायालय अप्डेट</h3>
                <h5 class="block-title-all"><a href="">सबै हेनुर्होस</a></h5>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="card ">
                        <div class="img text-center">
                            <img width="150px" class="" src="http://www.{{getSetting('site-title')??'LexNepal '}}.com/wp-content/uploads/2020/07/kushal-150x150.jpg"
                                 alt="" class="card-img-top" />
                        </div>
                        <div class="card-body">
                            <h4 class="card-text news_title text-center">
                                <b>An Account of History of…</b>
                            </h4>

                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card ">
                        <div class="img text-center">
                            <img width="150px" class="" src="http://www.{{getSetting('site-title')??'LexNepal '}}.com/wp-content/uploads/2020/07/kushal-150x150.jpg"
                                 alt="" class="card-img-top" />
                        </div>
                        <div class="card-body">
                            <h4 class="card-text news_title text-center">
                                <b>कानूनको अज्ञानता क्षम्य हुँदैन’: सिद्धान्त…</b>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card ">
                        <div class="img text-center">
                            <img width="150px" class="" src="http://www.{{getSetting('site-title')??'LexNepal '}}.com/wp-content/uploads/2020/07/kushal-150x150.jpg"
                                 alt="" class="card-img-top" />
                        </div>
                        <div class="card-body">
                            <h4 class="card-text  news_title text-center">
                                <b>राष्ट्रियसभाको गिर्दो साख</b>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="img text-center">
                            <img width="150px" class="" src="http://www.{{getSetting('site-title')??'LexNepal '}}.com/wp-content/uploads/2020/07/kushal-150x150.jpg"
                                 alt="" class="card-img-top" />
                        </div>
                        <div class="card-body">
                            <h4 class="card-text news_title text-center">
                                <b>निराशात्मक न्यायालय</b>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- कानुन ग्यालरी / ऐन कानुन-->

    <section class="yenkanun">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="news-block">
                        <div class="block-header">
                            <h3 class="block-title">कानुन ग्यालरी</h3>
                            <h5 class="block-title-all"><a href="">सबै हेनुर्होस</a></h5>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <img width="100%" src="
                  http://www.{{getSetting('site-title')??'LexNepal '}}.com/wp-content/uploads/2018/12/nepal-law-campus-library.jpg" alt=""
                                         class="card-img-top">
                                    <div class="card-body">
                                        <h4 class="card-text news_title">
                                            Nepal law campus | Library management event 2075
                                        </h4>
                                        <p>
                                        <p>
                                            काठमाडौं । कीर्तिपुरमै नक्कली नोट छाप्ने मेसिन फेला परेको छ । नक्कली नोट बनाइरहेको अवस्थामा
                                            प्रहरीले कीर्तिपुर नगरपालिकाबाट दुई जनालाई पक्राउ गरेको छ। उनीहरुले युट्युव हेरेर नक्कली नोट बनाउन
                                            सिकेको प्रहरी अनुसन्धानवाट खुलेको छ
                                        </p>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <ul>
                                    <li class="pb-4">
                                        <a href="">
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="news_img">
                                                        <img src="  http://www.{{getSetting('site-title')??'LexNepal '}}.com/wp-content/uploads/2018/12/nepal-law-campus-library.jpg"
                                                             alt="">
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <h5 class="news_title">
                                                        आपराधिक घटनामा बालक नै बढी संलग्न
                                                    </h5>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="pb-3">
                                        <a href="">
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="news_img">
                                                        <img src="  http://www.{{getSetting('site-title')??'LexNepal '}}.com/wp-content/uploads/2018/12/nepal-law-campus-library.jpg"
                                                             alt="">
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <h5 class="news_title">
                                                        न्यायालयमा विदेशी हस्तक्षेप प्रधानन्यायालय बनाउँदा देखि
                                                        नै
                                                    </h5>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="pb-3">
                                        <a href="">
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="news_img">
                                                        <img src="  http://www.{{getSetting('site-title')??'LexNepal '}}.com/wp-content/uploads/2018/12/nepal-law-campus-library.jpg"
                                                             alt="">
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <h5 class="news_title">
                                                        आपराधिक घटनामा बालक नै बढी संलग्न
                                                    </h5>
                                                </div>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="pb-3">
                                        <a href="">
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="news_img">
                                                        <img src="  http://www.{{getSetting('site-title')??'LexNepal '}}.com/wp-content/uploads/2018/12/nepal-law-campus-library.jpg"
                                                             alt="">
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <h5 class="news_title">
                                                        आपराधिक घटनामा बालक नै बढी संलग्न
                                                    </h5>
                                                </div>
                                            </div>
                                        </a>
                                    </li>


                                    <li class="pb-3">
                                        <a href="">
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="news_img">
                                                        <img src="  http://www.{{getSetting('site-title')??'LexNepal '}}.com/wp-content/uploads/2018/12/nepal-law-campus-library.jpg"
                                                             alt="">
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <h5 class="news_title">
                                                        आपराधिक घटनामा बालक नै बढी संलग्न
                                                    </h5>
                                                </div>
                                            </div>
                                        </a>
                                    </li>



                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ऐन कानुन -->

                <div class="col-md-4">
                    <div class="news-block">
                        <div class="block-header">
                            <h3 class="block-title">ऐन कानुन</h3>
                            <h5 class="block-title-all"><a href="">सबै हेनुर्होस</a></h5>
                        </div>
                        <ul>
                            <li class="pb-3">
                                <a href="">
                                    <div class="row">
                                        <div class="col-2">
                                            <div class="news_list_number">
                                                <span> १</span>
                                            </div>
                                        </div>
                                        <div class="col-10">
                                            <h5 class="news_title">
                                                आपराधिक घटनामा बालक नै बढी संलग्न
                                            </h5>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="pb-3">
                                <a href="">
                                    <div class="row">
                                        <div class="col-2">
                                            <div class="news_list_number">
                                                <span> २</span>
                                            </div>
                                        </div>
                                        <div class="col-10">
                                            <h5 class="news_title">
                                                न्यायालयमा विदेशी हस्तक्षेप प्रधानन्यायालय बनाउँदा देखि
                                                नै
                                            </h5>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="pb-3">
                                <a href="">
                                    <div class="row">
                                        <div class="col-2">
                                            <div class="news_list_number">
                                                <span> ३ </span>
                                            </div>
                                        </div>
                                        <div class="col-10">
                                            <h5 class="news_title">
                                                आपराधिक घटनामा बालक नै बढी संलग्न
                                            </h5>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="pb-3">
                                <a href="">
                                    <div class="row">
                                        <div class="col-2">
                                            <div class="news_list_number">
                                                <span> ४</span>
                                            </div>
                                        </div>
                                        <div class="col-10">
                                            <h5 class="news_title">
                                                सार्कस्तरीय सांस्कृतिक महोत्सव शुरु
                                            </h5>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="pb-3">
                                <a href="">
                                    <div class="row">
                                        <div class="col-2">
                                            <div class="news_list_number">
                                                <span> ५</span>
                                            </div>
                                        </div>
                                        <div class="col-10">
                                            <h5 class="news_title">
                                                समृद्धि अनुकूल अन्तर्राष्ट्रिय सम्बन्ध विस्तारमा
                                                प्राथमिकता
                                            </h5>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="pb-3">
                                <a href="">
                                    <div class="row">
                                        <div class="col-2">
                                            <div class="news_list_number">
                                                <span>६</span>
                                            </div>
                                        </div>
                                        <div class="col-10">
                                            <h5 class="news_title">भन्सारमा अनलाइन सेवा</h5>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="pb-3">
                                <a href="">
                                    <div class="row">
                                        <div class="col-2">
                                            <div class="news_list_number">
                                                <span> ७</span>
                                            </div>
                                        </div>
                                        <div class="col-10">
                                            <h5 class="news_title">
                                                विपन्नलाई उद्यमशील बनाउन बिना धितो ऋण दिइने
                                            </h5>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="pb-3">
                                <a href="">
                                    <div class="row">
                                        <div class="col-2">
                                            <div class="news_list_number">
                                                <span> ८</span>
                                            </div>
                                        </div>
                                        <div class="col-10">
                                            <h5 class="news_title">
                                                अस्पताल गएकी २५ वर्षीया महिलालाई डाक्टरले हेर्नुपर्ने
                                                एकतिर अर्को तिर ....
                                            </h5>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
    </section>

    <!-- कानुन सम्वाद -->
    <section class="kanun-sambad py-5">
        <div class="container">
            <div class="news_block">
                <div class="block-header">
                    <h3 class="block-title">कानुन सम्वाद</h3>
                    <h5 class="block-title-all"><a href="">सबै हेनुर्होस</a></h5>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="card position_relative">
                            <div class="card_mask"></div>
                            <img src="http://www.{{getSetting('site-title')??'LexNepal '}}.com/wp-content/uploads/2020/01/mqdefault.jpg" alt="">
                            <div class="card-body">
                                <h4 class="card-text news_title">कति गाह्रो सजिलो न्यायिक समितिको कामकारबाही</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card position_relative">
                            <div class="card_mask"></div>
                            <img src="http://www.{{getSetting('site-title')??'LexNepal '}}.com/wp-content/uploads/2020/01/mqdefault.jpg" alt="">
                            <div class="card-body">
                                <h4 class="card-text news_title">कति गाह्रो सजिलो न्यायिक समितिको कामकारबाही</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card position_relative">
                            <div class="card_mask"></div>
                            <img src="http://www.{{getSetting('site-title')??'LexNepal '}}.com/wp-content/uploads/2020/01/mqdefault.jpg" alt="">
                            <div class="card-body">
                                <h4 class="card-text news_title">कति गाह्रो सजिलो न्यायिक समितिको कामकारबाही</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card position_relative">
                            <div class="card_mask"></div>
                            <img src="http://www.{{getSetting('site-title')??'LexNepal '}}.com/wp-content/uploads/2020/01/mqdefault.jpg" alt="">
                            <div class="card-body">
                                <h4 class="card-text news_title">कति गाह्रो सजिलो न्यायिक समितिको कामकारबाही</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- व्यक्तित्व विशेष -->

    <section class="bektibises py-5 block-dark">
        <div class="container">
            <div class="block-header b-r">
                <h3 class="block-title">व्यक्तित्व विशेष</h3>
                <h5 class="block-title-all"><a href=""></a></h5>
            </div>
            <div class="bektibises_slider">
                <div>
                    <div style="position: relative;">
                        <img src="http://www.{{getSetting('site-title')??'LexNepal '}}.com/wp-content/uploads/2019/05/received_784222711957894-610x500.jpeg" alt="">
                        <div class="bektibises_contain">
                            <h4 class="news_title text-white">
                                कानुनका कर्मयोगी, बहुआयामिक व्यक्तित्व: नयनबहादुर खत्री
                            </h4>
                        </div>
                    </div>
                </div>

                <div>
                    <div style="position: relative;">
                        <img src="http://www.{{getSetting('site-title')??'LexNepal '}}.com/wp-content/uploads/2020/02/yagya-article-on-anirudra-610x500.jpg" alt="">
                        <div class="bektibises_contain">
                            <h4 class="news_title text-white">
                                कानुनका कर्मयोगी, बहुआयामिक व्यक्तित्व: नयनबहादुर खत्री
                            </h4>
                        </div>
                    </div>
                </div>

                <div>
                    <div style="position: relative;">
                        <img src="http://www.{{getSetting('site-title')??'LexNepal '}}.com/wp-content/uploads/2019/05/received_784222711957894-610x500.jpeg" alt="">
                        <div class="bektibises_contain">
                            <h4 class="news_title text-white">
                                कानुनका कर्मयोगी, बहुआयामिक व्यक्तित्व: नयनबहादुर खत्री
                            </h4>
                        </div>
                    </div>
                </div>

                <div>
                    <div style="position: relative;">
                        <img src="http://www.{{getSetting('site-title')??'LexNepal '}}.com/wp-content/uploads/2019/05/received_784222711957894-610x500.jpeg" alt="">
                        <div class="bektibises_contain">
                            <h4 class="news_title text-white">
                                कानुनका कर्मयोगी, बहुआयामिक व्यक्तित्व: नयनबहादुर खत्री
                            </h4>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="ads py-3">
        <div class="container">
            <img width="100%" src="https://jagaranpost.com/wp-content/uploads/2020/12/ads.gif" alt="">
        </div>
    </section>

    <!-- anya-samachar -->
    <section class="kanun-sambad py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="news_block">
                            <div class="block-header">
                                <h3 class="block-title">अन्य समाचार</h3>
                                <h5 class="block-title-all"><a href="">सबै हेनुर्होस</a></h5>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card position_relative">
                                        <div class="card_mask"></div>
                                        <img
                                            src="http://www.{{getSetting('site-title')??'LexNepal '}}.com/wp-content/uploads/2018/11/Nepalese_Constituent_Assembly_Building-400x250.jpg"
                                            alt="">
                                        <div class="card-body">
                                            <h4 class="card-text news_title">कति गाह्रो सजिलो न्यायिक समितिको कामकारबाही</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card position_relative">
                                        <div class="card_mask"></div>
                                        <img
                                            src="http://www.{{getSetting('site-title')??'LexNepal '}}.com/wp-content/uploads/2018/11/Nepalese_Constituent_Assembly_Building-400x250.jpg"
                                            alt="">
                                        <div class="card-body">
                                            <h4 class="card-text news_title">कति गाह्रो सजिलो न्यायिक समितिको कामकारबाही</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card position_relative">
                                        <div class="card_mask"></div>
                                        <img
                                            src="http://www.{{getSetting('site-title')??'LexNepal '}}.com/wp-content/uploads/2018/11/Nepalese_Constituent_Assembly_Building-400x250.jpg"
                                            alt="">
                                        <div class="card-body">
                                            <h4 class="card-text news_title">कति गाह्रो सजिलो न्यायिक समितिको कामकारबाही</h4>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <section class="ads py-3">
                        <div class="container">
                            <img width="100%" src="https://jagaranpost.com/wp-content/uploads/2020/12/ads.gif" alt="">
                        </div>
                    </section>
                    <div class="row">
                        <div class="news_block">
                            <div class="block-header">
                                <h3 class="block-title">ऐन / फैसला व्याख्या</h3>
                                <h5 class="block-title-all"><a href="">सबै हेनुर्होस</a></h5>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card position_relative">
                                        <div class="card_mask"></div>
                                        <img
                                            src="http://www.{{getSetting('site-title')??'LexNepal '}}.com/wp-content/uploads/2018/11/Nepalese_Constituent_Assembly_Building-400x250.jpg"
                                            alt="">
                                        <div class="card-body">
                                            <h4 class="card-text news_title">कति गाह्रो सजिलो न्यायिक समितिको कामकारबाही</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card position_relative">
                                        <div class="card_mask"></div>
                                        <img
                                            src="http://www.{{getSetting('site-title')??'LexNepal '}}.com/wp-content/uploads/2018/11/Nepalese_Constituent_Assembly_Building-400x250.jpg"
                                            alt="">
                                        <div class="card-body">
                                            <h4 class="card-text news_title">कति गाह्रो सजिलो न्यायिक समितिको कामकारबाही</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card position_relative">
                                        <div class="card_mask"></div>
                                        <img
                                            src="http://www.{{getSetting('site-title')??'LexNepal '}}.com/wp-content/uploads/2018/11/Nepalese_Constituent_Assembly_Building-400x250.jpg"
                                            alt="">
                                        <div class="card-body">
                                            <h4 class="card-text news_title">कति गाह्रो सजिलो न्यायिक समितिको कामकारबाही</h4>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <section class="ads py-3">
                        <div class="container">
                            <img width="100%" src="https://jagaranpost.com/wp-content/uploads/2020/12/ads.gif" alt="">
                        </div>
                    </section>
                    <!-- विषयगत लेक्चर -->
                    <div class="row lecture">
                        <div class="news-block">
                            <div class="block-header">
                                <h3 class="block-title">विषयगत लेक्चर</h3>
                                <h5 class="block-title-all"><a href="">सबै हेनुर्होस</a></h5>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card">
                                        <img width="100%" src="
                  http://www.{{getSetting('site-title')??'LexNepal '}}.com/wp-content/uploads/2018/12/nepal-law-campus-library.jpg" alt=""
                                             class="card-img-top">
                                        <div class="card-body">
                                            <h4 class="card-text news_title">
                                                Nepal law campus | Library management event 2075
                                            </h4>
                                            <p>
                                            <p>
                                                काठमाडौं । कीर्तिपुरमै नक्कली नोट छाप्ने मेसिन फेला परेको छ । नक्कली नोट बनाइरहेको अवस्थामा
                                                प्रहरीले कीर्तिपुर नगरपालिकाबाट दुई जनालाई पक्राउ गरेको छ। उनीहरुले युट्युव हेरेर नक्कली नोट
                                                बनाउन
                                                सिकेको प्रहरी अनुसन्धानवाट खुलेको छ
                                            </p>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card mb-3">
                                        <img width="100%" src="
               http://www.{{getSetting('site-title')??'LexNepal '}}.com/wp-content/uploads/2018/11/Yubraj-Sangraula-380x172.jpg" alt=""
                                             class="card-img-top">
                                        <div class="card-body">
                                            <h4 class="card-text news_title">
                                                Prof Dr Yubaraj Sangroula talking on Nepalese Legal Philsophy
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="card mb-3">
                                        <img width="100%" src="
                  http://www.{{getSetting('site-title')??'LexNepal '}}.com/wp-content/uploads/2018/12/nepal-law-campus-library.jpg" alt=""
                                             class="card-img-top">
                                        <div class="card-body">
                                            <h4 class="card-text news_title">
                                                Nepal law campus | Library management event 2075
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card mb-3">
                                        <img width="100%" src="
                http://www.{{getSetting('site-title')??'LexNepal '}}.com/wp-content/uploads/2018/11/Kalyan-shrestha-380x172.jpg" alt=""
                                             class="card-img-top">
                                        <div class="card-body">
                                            <h4 class="card-text news_title">
                                                |Former CJ Kalyan Shrestha| Talking on Judicial Committee|
                                            </h4>

                                        </div>
                                    </div>
                                    <div class="card mb-3">
                                        <img width="100%" src="
                  http://www.{{getSetting('site-title')??'LexNepal '}}.com/wp-content/uploads/2018/12/nepal-law-campus-library.jpg" alt=""
                                             class="card-img-top">
                                        <div class="card-body">
                                            <h4 class="card-text news_title">
                                                Nepal law campus | Library management event 2075
                                            </h4>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <!-- अन्तरराष्ट्रिय -->
                    <div class="row">
                        <div class="news_block">
                            <div class="block-header">
                                <h3 class="block-title">अन्तरराष्ट्रिय</h3>
                                <h5 class="block-title-all"><a href="">सबै हेनुर्होस</a></h5>
                            </div>
                            <div class="card position_relative">
                                <div class="card_mask"></div>
                                <img
                                    src="http://www.{{getSetting('site-title')??'LexNepal '}}.com/wp-content/uploads/2018/11/Nepalese_Constituent_Assembly_Building-400x250.jpg"
                                    alt="">
                                <div class="card-body">
                                    <h4 class="card-text news_title">कति गाह्रो सजिलो न्यायिक समितिको कामकारबाही</h4>
                                </div>
                            </div>
                            <br>
                            <ul>
                                <li class="pb-3">
                                    <a href="">
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="news_img">
                                                    <img src="  http://www.{{getSetting('site-title')??'LexNepal '}}.com/wp-content/uploads/2018/12/nepal-law-campus-library.jpg"
                                                         alt="">
                                                </div>
                                            </div>
                                            <div class="col-9">
                                                <h5 class="news_title">
                                                    आपराधिक घटनामा बालक नै बढी संलग्न
                                                </h5>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="pb-3">
                                    <a href="">
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="news_img">
                                                    <img src="  http://www.{{getSetting('site-title')??'LexNepal '}}.com/wp-content/uploads/2018/12/nepal-law-campus-library.jpg"
                                                         alt="">
                                                </div>
                                            </div>
                                            <div class="col-9">
                                                <h5 class="news_title">
                                                    न्यायालयमा विदेशी हस्तक्षेप प्रधानन्यायालय बनाउँदा देखि
                                                    नै
                                                </h5>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="pb-3">
                                    <a href="">
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="news_img">
                                                    <img src="  http://www.{{getSetting('site-title')??'LexNepal '}}.com/wp-content/uploads/2018/12/nepal-law-campus-library.jpg"
                                                         alt="">
                                                </div>
                                            </div>
                                            <div class="col-9">
                                                <h5 class="news_title">
                                                    आपराधिक घटनामा बालक नै बढी संलग्न
                                                </h5>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="pb-3">
                                    <a href="">
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="news_img">
                                                    <img src="  http://www.{{getSetting('site-title')??'LexNepal '}}.com/wp-content/uploads/2018/12/nepal-law-campus-library.jpg"
                                                         alt="">
                                                </div>
                                            </div>
                                            <div class="col-9">
                                                <h5 class="news_title">
                                                    आपराधिक घटनामा बालक नै बढी संलग्न
                                                </h5>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- ल फर्म -->
                    <div class="row">
                        <div class="news_block">
                            <div class="block-header">
                                <h3 class="block-title"> ल फर्म</h3>
                                <h5 class="block-title-all"><a href="">सबै हेनुर्होस</a></h5>
                            </div>
                            <div class="card position_relative">
                                <div class="card_mask"></div>
                                <img
                                    src="http://www.{{getSetting('site-title')??'LexNepal '}}.com/wp-content/uploads/2018/11/Nepalese_Constituent_Assembly_Building-400x250.jpg"
                                    alt="">
                                <div class="card-body">
                                    <h4 class="card-text news_title">कति गाह्रो सजिलो न्यायिक समितिको कामकारबाही</h4>
                                </div>
                            </div>
                            <br>
                            <ul>
                                <li class="pb-3">
                                    <a href="">
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="news_img">
                                                    <img src="  http://www.{{getSetting('site-title')??'LexNepal '}}.com/wp-content/uploads/2018/12/nepal-law-campus-library.jpg"
                                                         alt="">
                                                </div>
                                            </div>
                                            <div class="col-9">
                                                <h5 class="news_title">
                                                    आपराधिक घटनामा बालक नै बढी संलग्न
                                                </h5>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="pb-3">
                                    <a href="">
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="news_img">
                                                    <img src="  http://www.{{getSetting('site-title')??'LexNepal '}}.com/wp-content/uploads/2018/12/nepal-law-campus-library.jpg"
                                                         alt="">
                                                </div>
                                            </div>
                                            <div class="col-9">
                                                <h5 class="news_title">
                                                    न्यायालयमा विदेशी हस्तक्षेप प्रधानन्यायालय बनाउँदा देखि
                                                    नै
                                                </h5>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="pb-3">
                                    <a href="">
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="news_img">
                                                    <img src="  http://www.{{getSetting('site-title')??'LexNepal '}}.com/wp-content/uploads/2018/12/nepal-law-campus-library.jpg"
                                                         alt="">
                                                </div>
                                            </div>
                                            <div class="col-9">
                                                <h5 class="news_title">
                                                    आपराधिक घटनामा बालक नै बढी संलग्न
                                                </h5>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="pb-3">
                                    <a href="">
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="news_img">
                                                    <img src="  http://www.{{getSetting('site-title')??'LexNepal '}}.com/wp-content/uploads/2018/12/nepal-law-campus-library.jpg"
                                                         alt="">
                                                </div>
                                            </div>
                                            <div class="col-9">
                                                <h5 class="news_title">
                                                    आपराधिक घटनामा बालक नै बढी संलग्न
                                                </h5>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- संस्मरण -->
    <section class="sasmaran py-5 block-dark" style="">
        <div class="container">
            <div class="block-header b-r">
                <h3 class="block-title text-center">संस्मरण</h3>

            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <img src="http://www.{{getSetting('site-title')??'LexNepal '}}.com/wp-content/uploads/2018/11/Untitled-1-1-430x332.png" alt=""
                             class="card-img-top">
                        <div class="card-body">
                            <h4 class="card-text news_title text-center">
                                एल.एल.बि. भर्नामा त्रि.वि.ले
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="http://www.{{getSetting('site-title')??'LexNepal '}}.com/wp-content/uploads/2018/11/krishna-2-430x332.png" alt=""
                             class="card-img-top">
                        <div class="card-body">
                            <h4 class="card-text news_title text-center">
                                एल.एल.बि. भर्नामा त्रि.वि.ले
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img
                            src="http://www.{{getSetting('site-title')??'LexNepal '}}.com/wp-content/uploads/2019/01/foreign-influence-in-Nepali-Judiciary-430x332.jpg"
                            alt="" class="card-img-top">
                        <div class="card-body">
                            <h4 class="card-text news_title text-center">
                                एल.एल.बि. भर्नामा त्रि.वि.ले
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img
                            src="http://www.{{getSetting('site-title')??'LexNepal '}}.com/wp-content/uploads/2019/01/foreign-influence-in-Nepali-Judiciary-430x332.jpg"
                            alt="" class="card-img-top">
                        <div class="card-body">
                            <h4 class="card-text news_title text-center">
                                एल.एल.बि. भर्नामा त्रि.वि.ले
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="ads py-3">
        <div class="container">
            <img width="100%" src="https://jagaranpost.com/wp-content/uploads/2020/12/ads.gif" alt="">
        </div>
    </section>
    <!-- कानुन कलेज -->

    <section class="py-5" style="background: #F3F1F1;">
        <div class="container">
            <div class="block-header b-r">
                <h3 class="block-title text-center">कानुन कलेज</h3>

            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <img src="http://www.{{getSetting('site-title')??'LexNepal '}}.com/wp-content/uploads/2019/05/nepal-law-campus-400x250.jpg" alt=""
                             class="card-img-top">
                        <div class="card-body">
                            <h4 class="card-text news_title">
                                एल.एल.बि. भर्नामा त्रि.वि.ले अदालतको आदेश नमान्दा उपकुलपति लगाएत विरुद्ध अवहेलना मुद्या दर्ता
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="http://www.{{getSetting('site-title')??'LexNepal '}}.com/wp-content/uploads/2019/05/nepal-law-campus-400x250.jpg" alt=""
                             class="card-img-top">
                        <div class="card-body">
                            <h4 class="card-text news_title">
                                एल.एल.बि. भर्नामा त्रि.वि.ले अदालतको आदेश नमान्दा उपकुलपति लगाएत विरुद्ध अवहेलना मुद्या दर्ता
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="http://www.{{getSetting('site-title')??'LexNepal '}}.com/wp-content/uploads/2019/05/nepal-law-campus-400x250.jpg" alt=""
                             class="card-img-top">
                        <div class="card-body">
                            <h4 class="card-text news_title">
                                एल.एल.बि. भर्नामा त्रि.वि.ले अदालतको आदेश नमान्दा उपकुलपति लगाएत विरुद्ध अवहेलना मुद्या दर्ता
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="http://www.{{getSetting('site-title')??'LexNepal '}}.com/wp-content/uploads/2019/05/nepal-law-campus-400x250.jpg" alt=""
                             class="card-img-top">
                        <div class="card-body">
                            <h4 class="card-text news_title">
                                एल.एल.बि. भर्नामा त्रि.वि.ले अदालतको आदेश नमान्दा उपकुलपति लगाएत विरुद्ध अवहेलना मुद्या दर्ता
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ads py-3">
        <div class="container">
            <img width="100%" src="https://jagaranpost.com/wp-content/uploads/2020/12/ads.gif" alt="">
        </div>
    </section>

    <section class="okil-profile py-5">
        <div class="container">
            <div class="news-block">
                <div class="block-header b-r">
                    <h3 class="block-title text-center">वकिल प्रोफाइल</h3>

                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="card" style="position: relative;">
                            <img src="http://www.{{getSetting('site-title')??'LexNepal '}}.com/wp-content/uploads/2018/11/IMG_1855-380x172.jpg" class="card-img-top"
                                 alt="">
                            <div class="play-icon">
                                <i class="fas fa-play-circle"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card" style="position: relative;">
                            <img src="http://www.{{getSetting('site-title')??'LexNepal '}}.com/wp-content/uploads/2018/11/IMG_1855-380x172.jpg" class="card-img-top"
                                 alt="">
                            <div class="play-icon">
                                <i class="fas fa-play-circle"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card" style="position: relative;">
                            <img src="http://www.{{getSetting('site-title')??'LexNepal '}}.com/wp-content/uploads/2018/11/IMG_1855-380x172.jpg" class="card-img-top"
                                 alt="">
                            <div class="play-icon">
                                <i class="fas fa-play-circle"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card" style="position: relative;">
                            <img src="http://www.{{getSetting('site-title')??'LexNepal '}}.com/wp-content/uploads/2018/11/IMG_1855-380x172.jpg" class="card-img-top"
                                 alt="">
                            <div class="play-icon">
                                <i class="fas fa-play-circle"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- वकिल जान्नुहोस् -->
    <section class=" pustak py-5" style="background: #F3F1F1;">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="news-block">
                        <div class="block-header b-r">
                            <h3 class="block-title text-center">कानुन पुस्तक</h3>

                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-image">
                                        <img src="http://www.{{getSetting('site-title')??'LexNepal '}}.com/wp-content/uploads/2018/10/nyaya-sushila-karki-350x450.jpg" alt=""
                                             class="card-img-top">
                                    </div>
                                    <div class="image-dec">
                                        गोपाल शर्माको ‘संक्षिप्त अन्तरराष्ट्रिय कानुन’
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-image">
                                        <img
                                            src="http://www.{{getSetting('site-title')??'LexNepal '}}.com/wp-content/uploads/2018/10/Prakash-Osti-Aitihasik-abhilekhharu-book-cover-350x450.jpg"
                                            alt="" class="card-img-top">
                                    </div>
                                    <div class="image-dec">
                                        गोपाल शर्माको ‘संक्षिप्त अन्तरराष्ट्रिय कानुन’
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-image">
                                        <img
                                            src="http://www.{{getSetting('site-title')??'LexNepal '}}.com/wp-content/uploads/2018/10/Yubraj-Sangraula-Jurisprudence-nepali-book-cover-350x450.jpg"
                                            alt="" class="card-img-top">
                                    </div>
                                    <div class="image-dec">
                                        गोपाल शर्माको ‘संक्षिप्त अन्तरराष्ट्रिय कानुन’
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 wokil " style="background: #F0F8FF;">
                    <div class="news-block">
                        <div class="block-header b-r">
                            <h3 class="block-title text-center">वकिल जान्नुहोस्</h3>
                            <h5 class="block-title-all"><a href="">सबै हेनुर्होस</a></h5>
                        </div>

                        <ul>
                            <li class="mb-3">
                                <a href="">
                                    <div class="card">
                                        <div class="image ">
                                            <img src="http://www.{{getSetting('site-title')??'LexNepal '}}.com/wp-content/uploads/2019/05/nepal-law-campus-400x250.jpg" alt=""
                                                 class="card-img-top">
                                        </div>
                                        <div class="card-body">
                                            <h4 class="card-text news_title text-start">
                                                अंग्रेजी भाषामा बनाउनुपर्ने डकुमेण्ट गैँडाकोट नगरपालिकामा निशुल्क हुने
                                            </h4>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="mb-3">
                                <a href="">
                                    <div class="card">
                                        <div class="image ">
                                            <img src="http://www.{{getSetting('site-title')??'LexNepal '}}.com/wp-content/uploads/2019/05/nepal-law-campus-400x250.jpg" alt=""
                                                 class="card-img-top">
                                        </div>
                                        <div class="card-body">
                                            <h4 class="card-text news_title text-start">
                                                अंग्रेजी भाषामा बनाउनुपर्ने डकुमेण्ट गैँडाकोट नगरपालिकामा निशुल्क हुने
                                            </h4>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="mb-3">
                                <a href="">
                                    <div class="card">
                                        <div class="image ">
                                            <img src="http://www.{{getSetting('site-title')??'LexNepal '}}.com/wp-content/uploads/2019/05/nepal-law-campus-400x250.jpg" alt=""
                                                 class="card-img-top">
                                        </div>
                                        <div class="card-body">
                                            <h4 class="card-text news_title text-start">
                                                अंग्रेजी भाषामा बनाउनुपर्ने डकुमेण्ट गैँडाकोट नगरपालिकामा निशुल्क हुने
                                            </h4>
                                        </div>
                                    </div>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>

        </div>
    </section>

@endsection
