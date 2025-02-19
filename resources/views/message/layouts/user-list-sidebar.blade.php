<div class="wsus__user_list">
    <div class="wsus__user_list_header">
        <h3>
            <span><img src="{{ asset('assets/images/chat_list_icon.png') }}" alt="Chat" class="img-fluid"></span>
            MESSAGES
        </h3>
        <span class="setting" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="fas fa-user-cog"></i>
        </span>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <form action="#">

                            <div class="file">
                                <img src="{{ asset('assets/images/upload_img.jpg') }}" alt="Upload" class="img-fluid">
                                <label for="select_file"><i class="fal fa-camera-alt"></i></label>
                                <input id="select_file" type="file" hidden>
                            </div>
                            <p>Edit information</p>
                            <input type="text" placeholder="Name">
                            <input type="email" placeholder="Email">
                            <input type="text" placeholder="Phone">
                            <p>Change password</p>
                            <div class="row">
                                <div class="col-xl-6">
                                    <input type="password" placeholder="Old Password">
                                </div>
                                <div class="col-xl-6">
                                    <input type="password" placeholder="New Password">
                                </div>
                                <div class="col-xl-12">
                                    <input type="password" placeholder="Confirm Password">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary cancel" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary save">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <form action="#" class="wsus__user_list_search">
        <input class="input" type="text" placeholder="Search">
        <div class="user_search_result">
            <div class="wsus__user_list_area_height">
                <div class="wsus__user_list_item">
                    <div class="img">
                        <img src="{{ asset('assets/images/author_img_1.jpg') }}" alt="User" class="img-fluid">
                        <span class="active"></span>
                    </div>
                    <div class="text">
                        <h5>Jubaydul islam</h5>
                        <p><span>You</span> Hi, What"s your name</p>
                    </div>
                    <span class="time">10m ago</span>
                </div>
                <div class="wsus__user_list_item">
                    <div class="img">
                        <img src="{{ asset('assets/images/author_img_2.jpg') }}" alt="User" class="img-fluid">
                        <span class="inactive"></span>
                    </div>
                    <div class="text">
                        <h5>Hasan Masud</h5>
                        <p><span>You</span> Hello, How are you?</p>
                    </div>
                    <span class="time">2h ago</span>
                </div>
                <div class="wsus__user_list_item">
                    <div class="img">
                        <img src="{{ asset('assets/images/author_img_3.jpg') }}" alt="User" class="img-fluid">
                        <span class="active"></span>
                    </div>
                    <div class="text">
                        <h5>Mamunur Rashid</h5>
                        <p><span>You</span> Hi. .</p>
                    </div>
                    <span class="time">46m ago</span>
                </div>
                <div class="wsus__user_list_item">
                    <div class="img">
                        <img src="{{ asset('assets/images/author_img_4.jpg') }}" alt="User" class="img-fluid">
                        <span class="inactive"></span>
                    </div>
                    <div class="text">
                        <h5>Palash munna</h5>
                        <p><span>You</span> Hello. . .</p>
                    </div>
                    <span class="time">2h ago</span>
                </div>
                <div class="wsus__user_list_item">
                    <div class="img">
                        <img src="{{ asset('assets/images/author_img_5.jpg') }}" alt="User" class="img-fluid">
                        <span class="active"></span>
                    </div>
                    <div class="text">
                        <h5>Imrul Kayes</h5>
                        <p><span>You</span> I'm Imrul Kayes</p>
                    </div>
                    <span class="time">46m ago</span>
                </div>
                <div class="wsus__user_list_item">
                    <div class="img">
                        <img src="{{ asset('assets/images/author_img_6.jpg') }}" alt="User" class="img-fluid">
                        <span class="inactive"></span>
                    </div>
                    <div class="text">
                        <h5>Sumon Jahan</h5>
                        <p><span>You</span> My name is Sumin Jahan</p>
                    </div>
                    <span class="time">2h ago</span>
                </div>
                <div class="wsus__user_list_item">
                    <div class="img">
                        <img src="{{ asset('assets/images/author_img_1.jpg') }}" alt="User" class="img-fluid">
                        <span class="active"></span>
                    </div>
                    <div class="text">
                        <h5>Jubaydul islam</h5>
                        <p><span>You</span> Hi, What"s your name</p>
                    </div>
                    <span class="time">10m ago</span>
                </div>
                <div class="wsus__user_list_item">
                    <div class="img">
                        <img src="{{ asset('assets/images/author_img_2.jpg') }}" alt="User" class="img-fluid">
                        <span class="inactive"></span>
                    </div>
                    <div class="text">
                        <h5>Hasan Masud</h5>
                        <p><span>You</span> Hello, How are you?</p>
                    </div>
                    <span class="time">2h ago</span>
                </div>
            </div>
        </div>
    </form>

    <div class="wsus__favourite_user">
        <div class="top">favourites</div>
        <div class="row favourite_user_slider">
            <div class="col-xl-3">
                <a href="#" class="wsus__favourite_item">
                    <div class="img">
                        <img src="{{ asset('assets/images/author_img_1.jpg') }}" alt="User" class="img-fluid">
                        <span class="inactive"></span>
                    </div>
                    <p>mr hasin</p>
                </a>
            </div>
            <div class="col-xl-3">
                <a href="#" class="wsus__favourite_item">
                    <div class="img">
                        <img src="{{ asset('assets/images/author_img_2.jpg') }}" alt="User" class="img-fluid">
                        <span class="active"></span>
                    </div>
                    <p>md Hassan</p>
                </a>
            </div>
            <div class="col-xl-3">
                <a href="#" class="wsus__favourite_item">
                    <div class="img">
                        <img src="{{ asset('assets/images/author_img_3.jpg') }}" alt="User" class="img-fluid">
                        <span class="active"></span>
                    </div>
                    <p>humayun</p>
                </a>
            </div>
            <div class="col-xl-3">
                <a href="#" class="wsus__favourite_item">
                    <div class="img">
                        <img src="{{ asset('assets/images/author_img_4.jpg') }}" alt="User" class="img-fluid">
                        <span class="inactive"></span>
                    </div>
                    <p>mr hasin</p>
                </a>
            </div>
            <div class="col-xl-3">
                <a href="#" class="wsus__favourite_item">
                    <div class="img">
                        <img src="{{ asset('assets/images/author_img_5.jpg') }}" alt="User" class="img-fluid">
                        <span class="active"></span>
                    </div>
                    <p>jahid mia</p>
                </a>
            </div>
            <div class="col-xl-3">
                <a href="#" class="wsus__favourite_item">
                    <div class="img">
                        <img src="{{ asset('assets/images/author_img_6.jpg') }}" alt="User" class="img-fluid">
                        <span class="active"></span>
                    </div>
                    <p>mr hasin</p>
                </a>
            </div>
            <div class="col-xl-3">
                <a href="#" class="wsus__favourite_item">
                    <div class="img">
                        <img src="{{ asset('assets/images/author_img_1.jpg') }}" alt="User" class="img-fluid">
                        <span class="inactive"></span>
                    </div>
                    <p>mr hasin</p>
                </a>
            </div>
            <div class="col-xl-3">
                <a href="#" class="wsus__favourite_item">
                    <div class="img">
                        <img src="{{ asset('assets/images/author_img_2.jpg') }}" alt="User" class="img-fluid">
                        <span class="inactive"></span>
                    </div>
                    <p>md Hassan</p>
                </a>
            </div>
            <div class="col-xl-3">
                <a href="#" class="wsus__favourite_item">
                    <div class="img">
                        <img src="{{ asset('assets/images/author_img_3.jpg') }}" alt="User" class="img-fluid">
                        <span class="active"></span>
                    </div>
                    <p>humayun</p>
                </a>
            </div>
        </div>
    </div>

    <div class="wsus__save_message">
        <div class="top">your space</div>
        <div class="wsus__save_message_center">
            <div class="icon">
                <i class="far fa-bookmark"></i>
            </div>
            <div class="text">
                <h3>Saved Messages</h3>
                <p>Save messages secretly</p>
            </div>
            <span>you</span>
        </div>
    </div>

    <div class="wsus__user_list_area">
        <div class="top">All Messages</div>
        <div class="wsus__user_list_area_height">
            <div class="wsus__user_list_item">
                <div class="img">
                    <img src="{{ asset('assets/images/author_img_1.jpg') }}" alt="User" class="img-fluid">
                    <span class="active"></span>
                </div>
                <div class="text">
                    <h5>Jubaydul islam</h5>
                    <p><span>You</span> Hi, What"s your name</p>
                </div>
                <span class="time">10m ago</span>
            </div>
            <div class="wsus__user_list_item">
                <div class="img">
                    <img src="{{ asset('assets/images/author_img_2.jpg') }}" alt="User" class="img-fluid">
                    <span class="inactive"></span>
                </div>
                <div class="text">
                    <h5>Hasan Masud</h5>
                    <p><span>You</span> Hello, How are you?</p>
                </div>
                <span class="time">2h ago</span>
            </div>
            <div class="wsus__user_list_item">
                <div class="img">
                    <img src="{{ asset('assets/images/author_img_3.jpg') }}" alt="User" class="img-fluid">
                    <span class="active"></span>
                </div>
                <div class="text">
                    <h5>Mamunur Rashid</h5>
                    <p><span>You</span> Hi. .</p>
                </div>
                <span class="time">46m ago</span>
            </div>
            <div class="wsus__user_list_item">
                <div class="img">
                    <img src="{{ asset('assets/images/author_img_4.jpg') }}" alt="User" class="img-fluid">
                    <span class="inactive"></span>
                </div>
                <div class="text">
                    <h5>Palash munna</h5>
                    <p><span>You</span> Hello. . .</p>
                </div>
                <span class="time">2h ago</span>
            </div>
            <div class="wsus__user_list_item">
                <div class="img">
                    <img src="{{ asset('assets/images/author_img_5.jpg') }}" alt="User" class="img-fluid">
                    <span class="active"></span>
                </div>
                <div class="text">
                    <h5>Imrul Kayes</h5>
                    <p><span>You</span> I'm Imrul Kayes</p>
                </div>
                <span class="time">46m ago</span>
            </div>
            <div class="wsus__user_list_item">
                <div class="img">
                    <img src="{{ asset('assets/images/author_img_6.jpg') }}" alt="User" class="img-fluid">
                    <span class="inactive"></span>
                </div>
                <div class="text">
                    <h5>Sumon Jahan</h5>
                    <p><span>You</span> My name is Sumin Jahan</p>
                </div>
                <span class="time">2h ago</span>
            </div>
            <div class="wsus__user_list_item">
                <div class="img">
                    <img src="{{ asset('assets/images/author_img_1.jpg') }}" alt="User" class="img-fluid">
                    <span class="active"></span>
                </div>
                <div class="text">
                    <h5>Jubaydul islam</h5>
                    <p><span>You</span> Hi, What"s your name</p>
                </div>
                <span class="time">10m ago</span>
            </div>
            <div class="wsus__user_list_item">
                <div class="img">
                    <img src="{{ asset('assets/images/author_img_2.jpg') }}" alt="User" class="img-fluid">
                    <span class="inactive"></span>
                </div>
                <div class="text">
                    <h5>Hasan Masud</h5>
                    <p><span>You</span> Hello, How are you?</p>
                </div>
                <span class="time">2h ago</span>
            </div>
        </div>

        <!-- <div class="wsus__user_list_liading">
            <div class="spinner-border text-light" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div> -->

    </div>
</div>
