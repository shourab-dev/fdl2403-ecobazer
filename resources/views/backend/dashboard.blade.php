<!DOCTYPE html>

<html lang="en" class="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Rubick admin is super flexible, powerful, clean & modern responsive bootstrap admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Rubick Admin Template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="LEFT4CODE">
    <title>Dashboard - Rubick - Bootstrap HTML Admin Template</title>
    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="{{ asset('backend/dist/css/app.css') }}" />
    <!-- END: CSS Assets-->
</head>
<!-- END: Head -->

<body class="main">
   
    <div class="d-flex">
        <!-- BEGIN: Side Menu -->
        <nav class="side-nav">
            <a href="index.html"  class="intro-x d-flex align-items-center ps-5 pt-4">
                <img style="filter: grayscale(100%) invert(100%) brightness(200%)" alt="Rubick Tailwind HTML Admin Template" class=""
                    src="{{ asset('frontend/img/Logo .png')}}">
                
            </a>
            <div class="side-nav__devider my-6"></div>
            <ul>
                <li>
                    <a href="javascript:;" class="side-menu side-menu--active side-menu--open">
                        <div class="side-menu__icon"> <i data-feather="home"></i> </div>
                        <div class="side-menu__title">
                            Dashboard
                            <div class="side-menu__sub-icon"> <i data-feather="chevron-down"></i> </div>
                        </div>
                    </a>
                    <ul class="side-menu__sub-open">
                        <li>
                            <a href="index.html" class="side-menu side-menu--active side-menu--open">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title"> Overview 1 </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-dashboard-overview-2.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title"> Overview 2 </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-dashboard-overview-3.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title"> Overview 3 </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="box"></i> </div>
                        <div class="side-menu__title">
                            Menu Layout
                            <div class="side-menu__sub-icon"> <i data-feather="chevron-down"></i> </div>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="index.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title"> Side Menu </div>
                            </a>
                        </li>
                        <li>
                            <a href="simple-menu-light-dashboard-overview-1.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title"> Simple Menu </div>
                            </a>
                        </li>
                        <li>
                            <a href="top-menu-light-dashboard-overview-1.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title"> Top Menu </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="side-menu-light-inbox.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="inbox"></i> </div>
                        <div class="side-menu__title"> Inbox </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-file-manager.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="hard-drive"></i> </div>
                        <div class="side-menu__title"> File Manager </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-point-of-sale.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="credit-card"></i> </div>
                        <div class="side-menu__title"> Point of Sale </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-chat.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="message-square"></i> </div>
                        <div class="side-menu__title"> Chat </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-post.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="file-text"></i> </div>
                        <div class="side-menu__title"> Post </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-calendar.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="calendar"></i> </div>
                        <div class="side-menu__title"> Calendar </div>
                    </a>
                </li>
                <li class="side-nav__devider my-6"></li>
                <li>
                    <a href="javascript:;.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="edit"></i> </div>
                        <div class="side-menu__title">
                            Crud
                            <div class="side-menu__sub-icon"> <i data-feather="chevron-down"></i> </div>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-light-crud-data-list.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title"> Data List </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-crud-form.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title"> Form </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="users"></i> </div>
                        <div class="side-menu__title">
                            Users
                            <div class="side-menu__sub-icon"> <i data-feather="chevron-down"></i> </div>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-light-users-layout-1.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title"> Layout 1 </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-users-layout-2.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title"> Layout 2 </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-users-layout-3.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title"> Layout 3 </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="trello"></i> </div>
                        <div class="side-menu__title">
                            Profile
                            <div class="side-menu__sub-icon"> <i data-feather="chevron-down"></i> </div>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-light-profile-overview-1.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title"> Overview 1 </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-profile-overview-2.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title"> Overview 2 </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-profile-overview-3.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title"> Overview 3 </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="layout"></i> </div>
                        <div class="side-menu__title">
                            Pages
                            <div class="side-menu__sub-icon"> <i data-feather="chevron-down"></i> </div>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="javascript:;.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title">
                                    Wizards
                                    <div class="side-menu__sub-icon"> <i data-feather="chevron-down"></i> </div>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="side-menu-light-wizard-layout-1.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="side-menu__title">Layout 1</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-wizard-layout-2.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="side-menu__title">Layout 2</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-wizard-layout-3.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="side-menu__title">Layout 3</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title">
                                    Blog
                                    <div class="side-menu__sub-icon"> <i data-feather="chevron-down"></i> </div>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="side-menu-light-blog-layout-1.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="side-menu__title">Layout 1</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-blog-layout-2.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="side-menu__title">Layout 2</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-blog-layout-3.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="side-menu__title">Layout 3</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title">
                                    Pricing
                                    <div class="side-menu__sub-icon"> <i data-feather="chevron-down"></i> </div>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="side-menu-light-pricing-layout-1.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="side-menu__title">Layout 1</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-pricing-layout-2.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="side-menu__title">Layout 2</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title">
                                    Invoice
                                    <div class="side-menu__sub-icon"> <i data-feather="chevron-down"></i> </div>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="side-menu-light-invoice-layout-1.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="side-menu__title">Layout 1</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-invoice-layout-2.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="side-menu__title">Layout 2</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title">
                                    FAQ
                                    <div class="side-menu__sub-icon"> <i data-feather="chevron-down"></i> </div>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="side-menu-light-faq-layout-1.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="side-menu__title">Layout 1</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-faq-layout-2.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="side-menu__title">Layout 2</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-faq-layout-3.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="side-menu__title">Layout 3</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="login-light-login.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title"> Login </div>
                            </a>
                        </li>
                        <li>
                            <a href="login-light-register.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title"> Register </div>
                            </a>
                        </li>
                        <li>
                            <a href="main-light-error-page.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title"> Error Page </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-update-profile.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title"> Update profile </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-change-password.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title"> Change Password </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="side-nav__devider my-6"></li>
                <li>
                    <a href="javascript:;.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="inbox"></i> </div>
                        <div class="side-menu__title">
                            Components
                            <div class="side-menu__sub-icon"> <i data-feather="chevron-down"></i> </div>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="javascript:;.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title">
                                    Table
                                    <div class="side-menu__sub-icon"> <i data-feather="chevron-down"></i> </div>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="side-menu-light-regular-table.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="side-menu__title">Regular Table</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-tabulator.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="side-menu__title">Tabulator</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title">
                                    Overlay
                                    <div class="side-menu__sub-icon"> <i data-feather="chevron-down"></i> </div>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="side-menu-light-modal.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="side-menu__title">Modal</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-slide-over.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="side-menu__title">Slide Over</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-notification.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="side-menu__title">Notification</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="side-menu-light-accordion.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title"> Accordion </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-button.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title"> Button </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-alert.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title"> Alert </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-progress-bar.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title"> Progress Bar </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-tooltip.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title"> Tooltip </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-dropdown.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title"> Dropdown </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-typography.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title"> Typography </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-icon.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title"> Icon </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-loading-icon.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title"> Loading Icon </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="sidebar"></i> </div>
                        <div class="side-menu__title">
                            Forms
                            <div class="side-menu__sub-icon"> <i data-feather="chevron-down"></i> </div>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-light-regular-form.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title"> Regular Form </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-datepicker.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title"> Datepicker </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-tom-select.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title"> Tom Select </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-file-upload.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title"> File Upload </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title">
                                    Wysiwyg Editor
                                    <div class="side-menu__sub-icon"> <i data-feather="chevron-down"></i> </div>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="side-menu-light-wysiwyg-editor-classic.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="side-menu__title">Classic</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-wysiwyg-editor-inline.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="side-menu__title">Inline</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-wysiwyg-editor-balloon.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="side-menu__title">Balloon</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-wysiwyg-editor-balloon-block.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="side-menu__title">Balloon Block</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-wysiwyg-editor-document.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="side-menu__title">Document</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="side-menu-light-validation.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title"> Validation </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="hard-drive"></i> </div>
                        <div class="side-menu__title">
                            Widgets
                            <div class="side-menu__sub-icon"> <i data-feather="chevron-down"></i> </div>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-light-chart.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title"> Chart </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-slider.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title"> Slider </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-image-zoom.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title"> Image Zoom </div>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- END: Side Menu -->
        <!-- BEGIN: Content -->
        <div class="content">
            <!-- BEGIN: Top Bar -->
            <div class="top-bar">
                <!-- BEGIN: Breadcrumb -->
                <div class="-intro-x breadcrumb me-auto d-none d-sm-flex"> <a href="index.html">Application</a> <i
                        data-feather="chevron-right" class="breadcrumb__icon"></i> <a href="index.html"
                        class="breadcrumb--active">Dashboard</a> </div>
                <!-- END: Breadcrumb -->
                <!-- BEGIN: Search -->
                <div class="intro-x position-relative me-3 me-sm-6">
                    <div class="search d-none d-sm-block">
                        <input type="text" class="search__input form-control border-transparent"
                            placeholder="Search...">
                        <i data-feather="search" class="search__icon dark-text-gray-300"></i>
                    </div>
                    <a class="notification d-sm-none" href="index.html"> <i data-feather="search"
                            class="notification__icon dark-text-gray-300"></i> </a>
                    <div class="search-result">
                        <div class="search-result__content">
                            <div class="search-result__content__title">Pages</div>
                            <div class="mb-5">
                                <a href="index.html" class="d-flex align-items-center">
                                    <div
                                        class="w-8 h-8 bg-theme-18 text-theme-9 d-flex align-items-center justify-content-center rounded-circle">
                                        <i class="w-4 h-4" data-feather="inbox"></i>
                                    </div>
                                    <div class="ms-3">Mail Settings</div>
                                </a>
                                <a href="index.html" class="d-flex align-items-center mt-2">
                                    <div
                                        class="w-8 h-8 bg-theme-17 text-theme-11 d-flex align-items-center justify-content-center rounded-circle">
                                        <i class="w-4 h-4" data-feather="users"></i>
                                    </div>
                                    <div class="ms-3">Users & Permissions</div>
                                </a>
                                <a href="index.html" class="d-flex align-items-center mt-2">
                                    <div
                                        class="w-8 h-8 bg-theme-14 text-theme-10 d-flex align-items-center justify-content-center rounded-circle">
                                        <i class="w-4 h-4" data-feather="credit-card"></i>
                                    </div>
                                    <div class="ms-3">Transactions Report</div>
                                </a>
                            </div>
                            <div class="search-result__content__title">Users</div>
                            <div class="mb-5">
                                <a href="index.html" class="d-flex align-items-center mt-2">
                                    <div class="w-8 h-8 image-fit">
                                        <img alt="Rubick Tailwind HTML Admin Template" class="rounded-circle"
                                            src="{{ asset('backend/dist/images/profile-14.jpg')}}">
                                    </div>
                                    <div class="ms-3">{{ auth()->user()->name }}</div>
                                    <div class="ms-auto w-48 truncate text-gray-600 fs-xs text-end">
                                        {{ auth()->user()->email }}</div>
                                </a>
                                <a href="index.html" class="d-flex align-items-center mt-2">
                                    <div class="w-8 h-8 image-fit">
                                        <img alt="Rubick Tailwind HTML Admin Template" class="rounded-circle"
                                            src="{{ asset('backend/dist/images/profile-3.jpg')}}">
                                    </div>
                                    <div class="ms-3">Angelina Jolie</div>
                                    <div class="ms-auto w-48 truncate text-gray-600 fs-xs text-end">
                                        angelinajolie@left4code.com</div>
                                </a>
                                <a href="index.html" class="d-flex align-items-center mt-2">
                                    <div class="w-8 h-8 image-fit">
                                        <img alt="Rubick Tailwind HTML Admin Template" class="rounded-circle"
                                            src="{{ asset('backend/dist/images/profile-5.jpg')}}">
                                    </div>
                                    <div class="ms-3">{{ auth()->user()->name }}</div>
                                    <div class="ms-auto w-48 truncate text-gray-600 fs-xs text-end">
                                        {{ auth()->user()->email }}</div>
                                </a>
                                <a href="index.html" class="d-flex align-items-center mt-2">
                                    <div class="w-8 h-8 image-fit">
                                        <img alt="Rubick Tailwind HTML Admin Template" class="rounded-circle"
                                            src="{{ asset('backend/dist/images/profile-1.jpg')}}">
                                    </div>
                                    <div class="ms-3">Bruce Willis</div>
                                    <div class="ms-auto w-48 truncate text-gray-600 fs-xs text-end">
                                        brucewillis@left4code.com</div>
                                </a>
                            </div>
                            <div class="search-result__content__title">Products</div>
                            <a href="index.html" class="d-flex align-items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="Rubick Tailwind HTML Admin Template" class="rounded-circle"
                                        src="{{ asset('backend/dist/images/preview-4.jpg')}}">
                                </div>
                                <div class="ms-3">Sony Master Series A9G</div>
                                <div class="ms-auto w-48 truncate text-gray-600 fs-xs text-end">Electronic</div>
                            </a>
                            <a href="index.html" class="d-flex align-items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="Rubick Tailwind HTML Admin Template" class="rounded-circle"
                                        src="{{ asset('backend/dist/images/preview-1.jpg')}}">
                                </div>
                                <div class="ms-3">Samsung Q90 QLED TV</div>
                                <div class="ms-auto w-48 truncate text-gray-600 fs-xs text-end">Electronic</div>
                            </a>
                            <a href="index.html" class="d-flex align-items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="Rubick Tailwind HTML Admin Template" class="rounded-circle"
                                        src="{{ asset('backend/dist/images/preview-11.jpg')}}">
                                </div>
                                <div class="ms-3">Samsung Q90 QLED TV</div>
                                <div class="ms-auto w-48 truncate text-gray-600 fs-xs text-end">Electronic</div>
                            </a>
                            <a href="index.html" class="d-flex align-items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="Rubick Tailwind HTML Admin Template" class="rounded-circle"
                                        src="{{ asset('backend/dist/images/preview-5.jpg')}}">
                                </div>
                                <div class="ms-3">Nike Tanjun</div>
                                <div class="ms-auto w-48 truncate text-gray-600 fs-xs text-end">Sport &amp; Outdoor
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- END: Search -->
                <!-- BEGIN: Notifications -->
                <div class="intro-x dropdown me-auto me-sm-6">
                    <div class="dropdown-toggle notification notification--bullet cursor-pointer" role="button"
                        aria-expanded="false" data-bs-toggle="dropdown"> <i data-feather="bell"
                            class="notification__icon dark-text-gray-300"></i> </div>
                    <div class="notification-content pt-2 dropdown-menu">
                        <div class="notification-content__box dropdown-content">
                            <div class="notification-content__title dark-text-gray-300">Notifications</div>
                            <div class="cursor-pointer position-relative d-flex align-items-center ">
                                <div class="w-12 h-12 flex-none image-fit me-1">
                                    <img alt="Rubick Bootstrap HTML Admin Template" class="rounded-pill"
                                        src="{{ asset('backend/dist/images/profile-14.jpg')}}">
                                    <div
                                        class="w-3 h-3 bg-theme-9 position-absolute end-0 bottom-0 rounded-pill border-2 border-white dark-border-dark-3">
                                    </div>
                                </div>
                                <div class="ms-2 overflow-hidden">
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:;" class="fw-medium truncate me-5 dark-text-gray-300">Robert
                                            De Niro</a>
                                        <div class="fs-xs text-gray-500 ms-auto text-nowrap">01:10 PM</div>
                                    </div>
                                    <div class="w-full truncate text-gray-600 mt-0.5">Lorem Ipsum is simply dummy text
                                        of the printing and typesetting industry. Lorem Ipsum has been the
                                        industry&#039;s standard dummy text ever since the 1500</div>
                                </div>
                            </div>
                            <div class="cursor-pointer position-relative d-flex align-items-center mt-5">
                                <div class="w-12 h-12 flex-none image-fit me-1">
                                    <img alt="Rubick Bootstrap HTML Admin Template" class="rounded-pill"
                                        src="{{ asset('backend/dist/images/profile-3.jpg')}}">
                                    <div
                                        class="w-3 h-3 bg-theme-9 position-absolute end-0 bottom-0 rounded-pill border-2 border-white dark-border-dark-3">
                                    </div>
                                </div>
                                <div class="ms-2 overflow-hidden">
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:;"
                                            class="fw-medium truncate me-5 dark-text-gray-300">Angelina Jolie</a>
                                        <div class="fs-xs text-gray-500 ms-auto text-nowrap">06:05 AM</div>
                                    </div>
                                    <div class="w-full truncate text-gray-600 mt-0.5">It is a long established fact that
                                        a reader will be distracted by the readable content of a page when looking at
                                        its layout. The point of using Lorem </div>
                                </div>
                            </div>
                            <div class="cursor-pointer position-relative d-flex align-items-center mt-5">
                                <div class="w-12 h-12 flex-none image-fit me-1">
                                    <img alt="Rubick Bootstrap HTML Admin Template" class="rounded-pill"
                                        src="{{ asset('backend/dist/images/profile-5.jpg')}}">
                                    <div
                                        class="w-3 h-3 bg-theme-9 position-absolute end-0 bottom-0 rounded-pill border-2 border-white dark-border-dark-3">
                                    </div>
                                </div>
                                <div class="ms-2 overflow-hidden">
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:;" class="fw-medium truncate me-5 dark-text-gray-300">Robert
                                            De Niro</a>
                                        <div class="fs-xs text-gray-500 ms-auto text-nowrap">05:09 AM</div>
                                    </div>
                                    <div class="w-full truncate text-gray-600 mt-0.5">It is a long established fact that
                                        a reader will be distracted by the readable content of a page when looking at
                                        its layout. The point of using Lorem </div>
                                </div>
                            </div>
                            <div class="cursor-pointer position-relative d-flex align-items-center mt-5">
                                <div class="w-12 h-12 flex-none image-fit me-1">
                                    <img alt="Rubick Bootstrap HTML Admin Template" class="rounded-pill"
                                        src="{{ asset('backend/dist/images/profile-1.jpg')}}">
                                    <div
                                        class="w-3 h-3 bg-theme-9 position-absolute end-0 bottom-0 rounded-pill border-2 border-white dark-border-dark-3">
                                    </div>
                                </div>
                                <div class="ms-2 overflow-hidden">
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:;" class="fw-medium truncate me-5 dark-text-gray-300">Bruce
                                            Willis</a>
                                        <div class="fs-xs text-gray-500 ms-auto text-nowrap">03:20 PM</div>
                                    </div>
                                    <div class="w-full truncate text-gray-600 mt-0.5">Lorem Ipsum is simply dummy text
                                        of the printing and typesetting industry. Lorem Ipsum has been the
                                        industry&#039;s standard dummy text ever since the 1500</div>
                                </div>
                            </div>
                            <div class="cursor-pointer position-relative d-flex align-items-center mt-5">
                                <div class="w-12 h-12 flex-none image-fit me-1">
                                    <img alt="Rubick Bootstrap HTML Admin Template" class="rounded-pill"
                                        src="{{ asset('backend/dist/images/profile-5.jpg')}}">
                                    <div
                                        class="w-3 h-3 bg-theme-9 position-absolute end-0 bottom-0 rounded-pill border-2 border-white dark-border-dark-3">
                                    </div>
                                </div>
                                <div class="ms-2 overflow-hidden">
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:;" class="fw-medium truncate me-5 dark-text-gray-300">Kevin
                                            Spacey</a>
                                        <div class="fs-xs text-gray-500 ms-auto text-nowrap">01:10 PM</div>
                                    </div>
                                    <div class="w-full truncate text-gray-600 mt-0.5">It is a long established fact that
                                        a reader will be distracted by the readable content of a page when looking at
                                        its layout. The point of using Lorem </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Notifications -->
                <!-- BEGIN: Account Menu -->
                <div class="intro-x dropdown w-8 h-8">
                    <div class="dropdown-toggle w-8 h-8 rounded-pill overflow-hidden shadow-lg image-fit zoom-in"
                        role="button" aria-expanded="false" data-bs-toggle="dropdown">
                        <img alt="Rubick Tailwind HTML Admin Template"
                            src="{{ getProfileImg(auth()->user()->name) }}">
                    </div>
                    <div class="dropdown-menu w-56">
                        <ul class="dropdown-content bg-theme-26 dark-bg-dark-6 text-white">
                            <li class="p-2">
                                <div class="fw-medium text-white">{{ auth()->user()->name }}</div>
                                <div class="fs-xs text-theme-28 mt-0.5 dark-text-gray-600">DevOps Engineer</div>
                            </li>
                            <li>
                                <hr class="dropdown-divider border-theme-27 dark-border-dark-3">
                            </li>
                            <li>
                                <a href="index.html"
                                    class="dropdown-item text-white bg-theme-1-hover dark-bg-dark-3-hover"> <i
                                        data-feather="user" class="w-4 h-4 me-2"></i> Profile </a>
                            </li>
                            <li>
                                <a href="index.html"
                                    class="dropdown-item text-white bg-theme-1-hover dark-bg-dark-3-hover"> <i
                                        data-feather="edit" class="w-4 h-4 me-2"></i> Add Account </a>
                            </li>
                            <li>
                                <a href="index.html"
                                    class="dropdown-item text-white bg-theme-1-hover dark-bg-dark-3-hover"> <i
                                        data-feather="lock" class="w-4 h-4 me-2"></i> Reset Password </a>
                            </li>
                            <li>
                                <a href="index.html"
                                    class="dropdown-item text-white bg-theme-1-hover dark-bg-dark-3-hover"> <i
                                        data-feather="help-circle" class="w-4 h-4 me-2"></i> Help </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider border-theme-27 dark-border-dark-3">
                            </li>
                            <li>
                                <a href="index.html"
                                    class="dropdown-item text-white bg-theme-1-hover dark-bg-dark-3-hover"> <i
                                        data-feather="toggle-right" class="w-4 h-4 me-2"></i> Logout </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- END: Account Menu -->
            </div>
            <!-- END: Top Bar -->
            <div class="grid columns-12 gap-6">
                <div class="g-col-12 g-col-xxl-9">
                    <div class="grid columns-12 gap-6">
                        <!-- BEGIN: General Report -->
                        <div class="g-col-12 mt-8">
                            <div class="intro-y d-flex align-items-center h-10">
                                <h2 class="fs-lg fw-medium truncate me-5">
                                    General Report
                                </h2>
                                <a href="index.html"
                                    class="ms-auto d-flex align-items-center text-theme-1 dark-text-theme-10"> <i
                                        data-feather="refresh-ccw" class="w-4 h-4 me-3"></i> Reload Data </a>
                            </div>
                            <div class="grid columns-12 gap-6 mt-5">
                                <div class="g-col-12 g-col-sm-6 g-col-xl-3 intro-y">
                                    <div class="report-box zoom-in">
                                        <div class="box p-5">
                                            <div class="d-flex">
                                                <i data-feather="shopping-cart"
                                                    class="report-box__icon text-theme-10"></i>
                                                <div class="ms-auto">
                                                    <div class="report-box__indicator bg-theme-9 tooltip cursor-pointer"
                                                        title="33% Higher than last month"> 33% <i
                                                            data-feather="chevron-up" class="w-4 h-4 ms-0.5"></i> </div>
                                                </div>
                                            </div>
                                            <div class="report-box__total fs-3xl fw-medium mt-6">4.710</div>
                                            <div class="fs-base text-gray-600 mt-1">Item Sales</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="g-col-12 g-col-sm-6 g-col-xl-3 intro-y">
                                    <div class="report-box zoom-in">
                                        <div class="box p-5">
                                            <div class="d-flex">
                                                <i data-feather="credit-card"
                                                    class="report-box__icon text-theme-11"></i>
                                                <div class="ms-auto">
                                                    <div class="report-box__indicator bg-theme-6 tooltip cursor-pointer"
                                                        title="2% Lower than last month"> 2% <i
                                                            data-feather="chevron-down" class="w-4 h-4 ms-0.5"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="report-box__total fs-3xl fw-medium mt-6">3.721</div>
                                            <div class="fs-base text-gray-600 mt-1">New Orders</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="g-col-12 g-col-sm-6 g-col-xl-3 intro-y">
                                    <div class="report-box zoom-in">
                                        <div class="box p-5">
                                            <div class="d-flex">
                                                <i data-feather="monitor" class="report-box__icon text-theme-12"></i>
                                                <div class="ms-auto">
                                                    <div class="report-box__indicator bg-theme-9 tooltip cursor-pointer"
                                                        title="12% Higher than last month"> 12% <i
                                                            data-feather="chevron-up" class="w-4 h-4 ms-0.5"></i> </div>
                                                </div>
                                            </div>
                                            <div class="report-box__total fs-3xl fw-medium mt-6">2.149</div>
                                            <div class="fs-base text-gray-600 mt-1">Total Products</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="g-col-12 g-col-sm-6 g-col-xl-3 intro-y">
                                    <div class="report-box zoom-in">
                                        <div class="box p-5">
                                            <div class="d-flex">
                                                <i data-feather="user" class="report-box__icon text-theme-9"></i>
                                                <div class="ms-auto">
                                                    <div class="report-box__indicator bg-theme-9 tooltip cursor-pointer"
                                                        title="22% Higher than last month"> 22% <i
                                                            data-feather="chevron-up" class="w-4 h-4 ms-0.5"></i> </div>
                                                </div>
                                            </div>
                                            <div class="report-box__total fs-3xl fw-medium mt-6">152.040</div>
                                            <div class="fs-base text-gray-600 mt-1">Unique Visitor</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: General Report -->
                        <!-- BEGIN: Sales Report -->
                        <div class="g-col-12 g-col-lg-6 mt-8">
                            <div class="intro-y d-block d-sm-flex align-items-center h-10">
                                <h2 class="fs-lg fw-medium truncate me-5">
                                    Sales Report
                                </h2>
                                <div class="ms-sm-auto mt-3 mt-sm-0 position-relative text-gray-700 dark-text-gray-300">
                                    <i data-feather="calendar"
                                        class="w-4 h-4 z-10 position-absolute my-auto top-0 bottom-0 ms-3 start-0"></i>
                                    <input type="text"
                                        class="datepicker form-control w-sm-56 box border-white dark-border-dark-3 ps-10">
                                </div>
                            </div>
                            <div class="intro-y box p-5 mt-12 mt-sm-5">
                                <div class="d-flex flex-column flex-xl-row align-items-xl-center">
                                    <div class="d-flex">
                                        <div>
                                            <div class="text-theme-19 dark-text-gray-300 fs-lg fs-xl-xl fw-medium">
                                                $15,000</div>
                                            <div class="mt-0.5 text-gray-600 dark-text-gray-600">This Month</div>
                                        </div>
                                        <div
                                            class="w-px h-12 border border-end border-dashed border-gray-300 dark-border-dark-5 mx-4 mx-xl-5">
                                        </div>
                                        <div>
                                            <div class="text-gray-600 dark-text-gray-600 fs-lg fs-xl-xl fw-medium">
                                                $10,000</div>
                                            <div class="mt-0.5 text-gray-600 dark-text-gray-600">Last Month</div>
                                        </div>
                                    </div>
                                    <div class="dropdown ms-xl-auto mt-5 mt-xl-0">
                                        <button class="dropdown-toggle btn btn-outline-secondary fw-normal"
                                            aria-expanded="false" data-bs-toggle="dropdown"> Filter by Category <i
                                                data-feather="chevron-down" class="w-4 h-4 ms-2"></i> </button>
                                        <div class="dropdown-menu w-40">
                                            <ul class="dropdown-content overflow-y-auto h-32">
                                                <li><a href="index.html" class="dropdown-item">PC & Laptop</a></li>
                                                <li><a href="index.html" class="dropdown-item">Smartphone</a></li>
                                                <li><a href="index.html" class="dropdown-item">Electronic</a></li>
                                                <li><a href="index.html" class="dropdown-item">Photography</a></li>
                                                <li><a href="index.html" class="dropdown-item">Sport</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="report-chart">
                                    <canvas id="report-line-chart" height="169" class="mt-6"></canvas>
                                </div>
                            </div>
                        </div>
                        <!-- END: Sales Report -->
                        <!-- BEGIN: Weekly Top Seller -->
                        <div class="g-col-12 g-col-sm-6 g-col-lg-3 mt-8">
                            <div class="intro-y d-flex align-items-center h-10">
                                <h2 class="fs-lg fw-medium truncate me-5">
                                    Weekly Top Seller
                                </h2>
                                <a href="index.html" class="ms-auto text-theme-1 dark-text-theme-10 truncate">Show
                                    More</a>
                            </div>
                            <div class="intro-y box p-5 mt-5">
                                <canvas class="mt-3" id="report-pie-chart" height="300"></canvas>
                                <div class="mt-8">
                                    <div class="d-flex align-items-center">
                                        <div class="w-2 h-2 bg-theme-11 rounded-circle me-3"></div>
                                        <span class="truncate">17 - 30 Years old</span>
                                        <div
                                            class="h-px flex-1 border border-start border-dashed border-gray-300 mx-3 d-xl-none">
                                        </div>
                                        <span class="fw-medium ms-xl-auto">62%</span>
                                    </div>
                                    <div class="d-flex align-items-center mt-4">
                                        <div class="w-2 h-2 bg-theme-1 rounded-circle me-3"></div>
                                        <span class="truncate">31 - 50 Years old</span>
                                        <div
                                            class="h-px flex-1 border border-start border-dashed border-gray-300 mx-3 d-xl-none">
                                        </div>
                                        <span class="fw-medium ms-xl-auto">33%</span>
                                    </div>
                                    <div class="d-flex align-items-center mt-4">
                                        <div class="w-2 h-2 bg-theme-12 rounded-circle me-3"></div>
                                        <span class="truncate">>= 50 Years old</span>
                                        <div
                                            class="h-px flex-1 border border-start border-dashed border-gray-300 mx-3 d-xl-none">
                                        </div>
                                        <span class="fw-medium ms-xl-auto">10%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: Weekly Top Seller -->
                        <!-- BEGIN: Sales Report -->
                        <div class="g-col-12 g-col-sm-6 g-col-lg-3 mt-8">
                            <div class="intro-y d-flex align-items-center h-10">
                                <h2 class="fs-lg fw-medium truncate me-5">
                                    Sales Report
                                </h2>
                                <a href="index.html" class="ms-auto text-theme-1 dark-text-theme-10 truncate">Show
                                    More</a>
                            </div>
                            <div class="intro-y box p-5 mt-5">
                                <canvas class="mt-3" id="report-donut-chart" height="300"></canvas>
                                <div class="mt-8">
                                    <div class="d-flex align-items-center">
                                        <div class="w-2 h-2 bg-theme-11 rounded-circle me-3"></div>
                                        <span class="truncate">17 - 30 Years old</span>
                                        <div
                                            class="h-px flex-1 border border-right border-dashed border-gray-300 mx-3 d-xl-none">
                                        </div>
                                        <span class="fw-medium ms-xl-auto">62%</span>
                                    </div>
                                    <div class="d-flex align-items-center mt-4">
                                        <div class="w-2 h-2 bg-theme-1 rounded-circle me-3"></div>
                                        <span class="truncate">31 - 50 Years old</span>
                                        <div
                                            class="h-px flex-1 border border-right border-dashed border-gray-300 mx-3 d-xl-none">
                                        </div>
                                        <span class="fw-medium ms-xl-auto">33%</span>
                                    </div>
                                    <div class="d-flex align-items-center mt-4">
                                        <div class="w-2 h-2 bg-theme-12 rounded-circle me-3"></div>
                                        <span class="truncate">>= 50 Years old</span>
                                        <div
                                            class="h-px flex-1 border border-right border-dashed border-gray-300 mx-3 d-xl-none">
                                        </div>
                                        <span class="fw-medium ms-xl-auto">10%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: Sales Report -->
                        <!-- BEGIN: Official Store -->
                        <div class="g-col-12 g-col-xl-8 mt-6">
                            <div class="intro-y d-block d-sm-flex align-items-center h-10">
                                <h2 class="fs-lg fw-medium truncate me-5">
                                    Official Store
                                </h2>
                                <div class="ms-sm-auto mt-3 mt-sm-0 position-relative text-gray-700 dark-text-gray-300">
                                    <i data-feather="map-pin"
                                        class="w-4 h-4 z-10 position-absolute my-auto top-0 bottom-0 ms-3 start-0"></i>
                                    <input type="text"
                                        class="form-control w-sm-40 box border-white dark-border-dark-3 ps-10"
                                        placeholder="Filter by city">
                                </div>
                            </div>
                            <div class="intro-y box p-5 mt-12 mt-sm-5">
                                <div>250 Official stores in 21 countries, click the marker to see location details.
                                </div>
                                <div class="report-maps mt-5 bg-gray-200 rounded-3"
                                    data-center="-6.2425342, 106.8626478" data-sources="/dist/json/location.json"></div>
                            </div>
                        </div>
                        <!-- END: Official Store -->
                        <!-- BEGIN: Weekly Best Sellers -->
                        <div class="g-col-12 g-col-xl-4 mt-6">
                            <div class="intro-y d-flex align-items-center h-10">
                                <h2 class="fs-lg fw-medium truncate me-5">
                                    Weekly Best Sellers
                                </h2>
                            </div>
                            <div class="mt-5">
                                <div class="intro-y">
                                    <div class="box px-4 py-4 mb-3 d-flex align-items-center zoom-in">
                                        <div class="w-10 h-10 flex-none image-fit rounded-2 overflow-hidden">
                                            <img alt="Rubick Bootstrap HTML Admin Template"
                                                src="{{ asset('backend/dist/images/profile-8.jpg')}}">
                                        </div>
                                        <div class="ms-4 me-auto">
                                            <div class="fw-medium">Keanu Reeves</div>
                                            <div class="text-gray-600 fs-xs mt-0.5">16 July 2021</div>
                                        </div>
                                        <div
                                            class="py-1 px-2 rounded-pill fs-xs bg-theme-9 text-white cursor-pointer fw-medium">
                                            137 Sales</div>
                                    </div>
                                </div>
                                <div class="intro-y">
                                    <div class="box px-4 py-4 mb-3 d-flex align-items-center zoom-in">
                                        <div class="w-10 h-10 flex-none image-fit rounded-2 overflow-hidden">
                                            <img alt="Rubick Bootstrap HTML Admin Template"
                                                src="{{ asset('backend/dist/images/profile-11.jpg')}}">
                                        </div>
                                        <div class="ms-4 me-auto">
                                            <div class="fw-medium">Denzel Washington</div>
                                            <div class="text-gray-600 fs-xs mt-0.5">15 January 2021</div>
                                        </div>
                                        <div
                                            class="py-1 px-2 rounded-pill fs-xs bg-theme-9 text-white cursor-pointer fw-medium">
                                            137 Sales</div>
                                    </div>
                                </div>
                                <div class="intro-y">
                                    <div class="box px-4 py-4 mb-3 d-flex align-items-center zoom-in">
                                        <div class="w-10 h-10 flex-none image-fit rounded-2 overflow-hidden">
                                            <img alt="Rubick Bootstrap HTML Admin Template"
                                                src="{{ asset('backend/dist/images/profile-7.jpg')}}">
                                        </div>
                                        <div class="ms-4 me-auto">
                                            <div class="fw-medium">Morgan Freeman</div>
                                            <div class="text-gray-600 fs-xs mt-0.5">7 July 2022</div>
                                        </div>
                                        <div
                                            class="py-1 px-2 rounded-pill fs-xs bg-theme-9 text-white cursor-pointer fw-medium">
                                            137 Sales</div>
                                    </div>
                                </div>
                                <div class="intro-y">
                                    <div class="box px-4 py-4 mb-3 d-flex align-items-center zoom-in">
                                        <div class="w-10 h-10 flex-none image-fit rounded-2 overflow-hidden">
                                            <img alt="Rubick Bootstrap HTML Admin Template"
                                                src="{{ asset('backend/dist/images/profile-4.jpg')}}">
                                        </div>
                                        <div class="ms-4 me-auto">
                                            <div class="fw-medium">Tom Cruise</div>
                                            <div class="text-gray-600 fs-xs mt-0.5">19 September 2020</div>
                                        </div>
                                        <div
                                            class="py-1 px-2 rounded-pill fs-xs bg-theme-9 text-white cursor-pointer fw-medium">
                                            137 Sales</div>
                                    </div>
                                </div>
                                <a href="index.html"
                                    class="intro-y w-full d-block text-center rounded-2 py-4 border border-dotted border-theme-15 dark-border-dark-5 text-theme-16 dark-text-gray-600">View
                                    More</a>
                            </div>
                        </div>
                        <!-- END: Weekly Best Sellers -->
                        <!-- BEGIN: General Report -->
                        <div class="g-col-12 grid columns-12 gap-6 mt-8">
                            <div class="g-col-12 g-col-sm-6 g-col-xxl-3 intro-y">
                                <div class="box p-5 zoom-in">
                                    <div class="d-flex align-items-center">
                                        <div class="w-2/4 flex-none">
                                            <div class="fs-lg fw-medium truncate">Target Sales</div>
                                            <div class="text-gray-600 mt-1">300 Sales</div>
                                        </div>
                                        <div class="flex-none ms-auto position-relative">
                                            <canvas id="report-donut-chart-1" width="90" height="90"></canvas>
                                            <div
                                                class="fw-medium position-absolute w-full h-full d-flex align-items-center justify-content-center top-0 start-0">
                                                20%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="g-col-12 g-col-sm-6 g-col-xxl-3 intro-y">
                                <div class="box p-5 zoom-in">
                                    <div class="d-flex">
                                        <div class="fs-lg fw-medium truncate me-3">Social Media</div>
                                        <div
                                            class="py-1 px-2 d-flex align-items-center rounded-pill fs-xs bg-gray-200 dark-bg-dark-5 text-gray-600 dark-text-gray-300 cursor-pointer ms-auto truncate">
                                            320 Followers</div>
                                    </div>
                                    <div class="mt-4">
                                        <canvas class="simple-line-chart-1 ms-n1" height="60"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="g-col-12 g-col-sm-6 g-col-xxl-3 intro-y">
                                <div class="box p-5 zoom-in">
                                    <div class="d-flex align-items-center">
                                        <div class="w-2/4 flex-none">
                                            <div class="fs-lg fw-medium truncate">New Products</div>
                                            <div class="text-gray-600 mt-1">1450 Products</div>
                                        </div>
                                        <div class="flex-none ms-auto position-relative">
                                            <canvas id="report-donut-chart-2" width="90" height="90"></canvas>
                                            <div
                                                class="fw-medium position-absolute w-full h-full d-flex align-items-center justify-content-center top-0 start-0">
                                                45%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="g-col-12 g-col-sm-6 g-col-xxl-3 intro-y">
                                <div class="box p-5 zoom-in">
                                    <div class="d-flex">
                                        <div class="fs-lg fw-medium truncate me-3">Posted Ads</div>
                                        <div
                                            class="py-1 px-2 d-flex align-items-center rounded-pill fs-xs bg-gray-200 dark-bg-dark-5 text-gray-600 dark-text-gray-300 cursor-pointer ms-auto truncate">
                                            180 Campaign</div>
                                    </div>
                                    <div class="mt-4">
                                        <canvas class="simple-line-chart-1 ms-n1" height="60"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: General Report -->
                        <!-- BEGIN: Weekly Top Products -->
                        <div class="g-col-12 mt-6">
                            <div class="intro-y d-block d-sm-flex align-items-center h-10">
                                <h2 class="fs-lg fw-medium truncate me-5">
                                    Weekly Top Products
                                </h2>
                                <div class="d-flex align-items-center ms-sm-auto mt-3 mt-sm-0">
                                    <button class="btn box d-flex align-items-center text-gray-700 dark-text-gray-300">
                                        <i data-feather="file-text" class="d-none d-sm-block w-4 h-4 me-2"></i> Export
                                        to Excel </button>
                                    <button
                                        class="ms-3 btn box d-flex align-items-center text-gray-700 dark-text-gray-300">
                                        <i data-feather="file-text" class="d-none d-sm-block w-4 h-4 me-2"></i> Export
                                        to PDF </button>
                                </div>
                            </div>
                            <div class="intro-y overflow-auto overflow-lg-visible mt-8 mt-sm-0">
                                <table class="table table-report mt-sm-2">
                                    <thead>
                                        <tr>
                                            <th class="text-nowrap">IMAGES</th>
                                            <th class="text-nowrap">PRODUCT NAME</th>
                                            <th class="text-center text-nowrap">STOCK</th>
                                            <th class="text-center text-nowrap">STATUS</th>
                                            <th class="text-center text-nowrap">ACTIONS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="intro-x">
                                            <td class="w-40">
                                                <div class="d-flex">
                                                    <div class="w-10 h-10 image-fit zoom-in">
                                                        <img alt="Rubick Bootstrap HTML Admin Template"
                                                            class="tooltip rounded-circle"
                                                            src="{{ asset('backend/dist/images/preview-8.jpg')}}"
                                                            title="Uploaded at 16 July 2021">
                                                    </div>
                                                    <div class="w-10 h-10 image-fit zoom-in ms-n5">
                                                        <img alt="Rubick Bootstrap HTML Admin Template"
                                                            class="tooltip rounded-circle"
                                                            src="{{ asset('backend/dist/images/preview-3.jpg')}}"
                                                            title="Uploaded at 14 September 2021">
                                                    </div>
                                                    <div class="w-10 h-10 image-fit zoom-in ms-n5">
                                                        <img alt="Rubick Bootstrap HTML Admin Template"
                                                            class="tooltip rounded-circle"
                                                            src="{{ asset('backend/dist/images/preview-14.jpg')}}"
                                                            title="Uploaded at 7 August 2020">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="index.html" class="fw-medium text-nowrap">Sony Master Series
                                                    A9G</a>
                                                <div class="text-gray-600 fs-xs text-nowrap mt-0.5">Electronic</div>
                                            </td>
                                            <td class="text-center">111</td>
                                            <td class="w-40">
                                                <div
                                                    class="d-flex align-items-center justify-content-center text-theme-6">
                                                    <i data-feather="check-square" class="w-4 h-4 me-2"></i> Inactive
                                                </div>
                                            </td>
                                            <td class="table-report__action w-56">
                                                <div class="d-flex justify-content-center align-items-center">
                                                    <a class="d-flex align-items-center me-3" href="index.html"> <i
                                                            data-feather="check-square" class="w-4 h-4 me-1"></i> Edit
                                                    </a>
                                                    <a class="d-flex align-items-center text-theme-6" href="index.html">
                                                        <i data-feather="trash-2" class="w-4 h-4 me-1"></i> Delete </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="intro-x">
                                            <td class="w-40">
                                                <div class="d-flex">
                                                    <div class="w-10 h-10 image-fit zoom-in">
                                                        <img alt="Rubick Bootstrap HTML Admin Template"
                                                            class="tooltip rounded-circle"
                                                            src="{{ asset('backend/dist/images/preview-2.jpg')}}"
                                                            title="Uploaded at 15 January 2021">
                                                    </div>
                                                    <div class="w-10 h-10 image-fit zoom-in ms-n5">
                                                        <img alt="Rubick Bootstrap HTML Admin Template"
                                                            class="tooltip rounded-circle"
                                                            src="{{ asset('backend/dist/images/preview-5.jpg')}}"
                                                            title="Uploaded at 16 January 2021">
                                                    </div>
                                                    <div class="w-10 h-10 image-fit zoom-in ms-n5">
                                                        <img alt="Rubick Bootstrap HTML Admin Template"
                                                            class="tooltip rounded-circle"
                                                            src="{{ asset('backend/dist/images/preview-9.jpg')}}"
                                                            title="Uploaded at 22 July 2021">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="index.html" class="fw-medium text-nowrap">Dell XPS 13</a>
                                                <div class="text-gray-600 fs-xs text-nowrap mt-0.5">PC &amp; Laptop
                                                </div>
                                            </td>
                                            <td class="text-center">66</td>
                                            <td class="w-40">
                                                <div
                                                    class="d-flex align-items-center justify-content-center text-theme-6">
                                                    <i data-feather="check-square" class="w-4 h-4 me-2"></i> Inactive
                                                </div>
                                            </td>
                                            <td class="table-report__action w-56">
                                                <div class="d-flex justify-content-center align-items-center">
                                                    <a class="d-flex align-items-center me-3" href="index.html"> <i
                                                            data-feather="check-square" class="w-4 h-4 me-1"></i> Edit
                                                    </a>
                                                    <a class="d-flex align-items-center text-theme-6" href="index.html">
                                                        <i data-feather="trash-2" class="w-4 h-4 me-1"></i> Delete </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="intro-x">
                                            <td class="w-40">
                                                <div class="d-flex">
                                                    <div class="w-10 h-10 image-fit zoom-in">
                                                        <img alt="Rubick Bootstrap HTML Admin Template"
                                                            class="tooltip rounded-circle"
                                                            src="{{ asset('backend/dist/images/preview-13.jpg')}}"
                                                            title="Uploaded at 7 July 2022">
                                                    </div>
                                                    <div class="w-10 h-10 image-fit zoom-in ms-n5">
                                                        <img alt="Rubick Bootstrap HTML Admin Template"
                                                            class="tooltip rounded-circle"
                                                            src="{{ asset('backend/dist/images/preview-6.jpg')}}"
                                                            title="Uploaded at 7 December 2021">
                                                    </div>
                                                    <div class="w-10 h-10 image-fit zoom-in ms-n5">
                                                        <img alt="Rubick Bootstrap HTML Admin Template"
                                                            class="tooltip rounded-circle"
                                                            src="{{ asset('backend/dist/images/preview-1.jpg')}}"
                                                            title="Uploaded at 13 February 2021">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="index.html" class="fw-medium text-nowrap">Nikon Z6</a>
                                                <div class="text-gray-600 fs-xs text-nowrap mt-0.5">Photography</div>
                                            </td>
                                            <td class="text-center">95</td>
                                            <td class="w-40">
                                                <div
                                                    class="d-flex align-items-center justify-content-center text-theme-6">
                                                    <i data-feather="check-square" class="w-4 h-4 me-2"></i> Inactive
                                                </div>
                                            </td>
                                            <td class="table-report__action w-56">
                                                <div class="d-flex justify-content-center align-items-center">
                                                    <a class="d-flex align-items-center me-3" href="index.html"> <i
                                                            data-feather="check-square" class="w-4 h-4 me-1"></i> Edit
                                                    </a>
                                                    <a class="d-flex align-items-center text-theme-6" href="index.html">
                                                        <i data-feather="trash-2" class="w-4 h-4 me-1"></i> Delete </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="intro-x">
                                            <td class="w-40">
                                                <div class="d-flex">
                                                    <div class="w-10 h-10 image-fit zoom-in">
                                                        <img alt="Rubick Bootstrap HTML Admin Template"
                                                            class="tooltip rounded-circle"
                                                            src="{{ asset('backend/dist/images/preview-3.jpg')}}"
                                                            title="Uploaded at 19 September 2020">
                                                    </div>
                                                    <div class="w-10 h-10 image-fit zoom-in ms-n5">
                                                        <img alt="Rubick Bootstrap HTML Admin Template"
                                                            class="tooltip rounded-circle"
                                                            src="{{ asset('backend/dist/images/preview-3.jpg')}}"
                                                            title="Uploaded at 21 May 2021">
                                                    </div>
                                                    <div class="w-10 h-10 image-fit zoom-in ms-n5">
                                                        <img alt="Rubick Bootstrap HTML Admin Template"
                                                            class="tooltip rounded-circle"
                                                            src="{{ asset('backend/dist/images/preview-1.jpg')}}"
                                                            title="Uploaded at 30 December 2021">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="index.html" class="fw-medium text-nowrap">Nikon Z6</a>
                                                <div class="text-gray-600 fs-xs text-nowrap mt-0.5">Photography</div>
                                            </td>
                                            <td class="text-center">176</td>
                                            <td class="w-40">
                                                <div
                                                    class="d-flex align-items-center justify-content-center text-theme-9">
                                                    <i data-feather="check-square" class="w-4 h-4 me-2"></i> Active
                                                </div>
                                            </td>
                                            <td class="table-report__action w-56">
                                                <div class="d-flex justify-content-center align-items-center">
                                                    <a class="d-flex align-items-center me-3" href="index.html"> <i
                                                            data-feather="check-square" class="w-4 h-4 me-1"></i> Edit
                                                    </a>
                                                    <a class="d-flex align-items-center text-theme-6" href="index.html">
                                                        <i data-feather="trash-2" class="w-4 h-4 me-1"></i> Delete </a>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="intro-y d-flex flex-wrap flex-sm-row flex-sm-nowrap align-items-center mt-3">
                                <nav class="w-full w-sm-auto me-sm-auto">
                                    <ul class="pagination">
                                        <li class="page-item">
                                            <a class="page-link" href="index.html#"> <i class="w-4 h-4"
                                                    data-feather="chevrons-left"></i> </a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="index.html#"> <i class="w-4 h-4"
                                                    data-feather="chevron-left"></i> </a>
                                        </li>
                                        <li class="page-item"> <a class="page-link" href="index.html#">...</a> </li>
                                        <li class="page-item"> <a class="page-link" href="index.html#">1</a> </li>
                                        <li class="page-item active"> <a class="page-link" href="index.html#">2</a>
                                        </li>
                                        <li class="page-item"> <a class="page-link" href="index.html#">3</a> </li>
                                        <li class="page-item"> <a class="page-link" href="index.html#">...</a> </li>
                                        <li class="page-item">
                                            <a class="page-link" href="index.html#"> <i class="w-4 h-4"
                                                    data-feather="chevron-right"></i> </a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="index.html#"> <i class="w-4 h-4"
                                                    data-feather="chevrons-right"></i> </a>
                                        </li>
                                    </ul>
                                </nav>
                                <select class="w-20 form-select box mt-3 mt-sm-0">
                                    <option>10</option>
                                    <option>25</option>
                                    <option>35</option>
                                    <option>50</option>
                                </select>
                            </div>
                        </div>
                        <!-- END: Weekly Top Products -->
                    </div>
                </div>
                <div class="g-col-12 g-col-xxl-3">
                    <div class="border-start-xxl border-theme-5 dark-border-dark-3 mb-n10 pb-10">
                        <div class="ps-xxl-6 grid grid-cols-12 gap-6">
                            <!-- BEGIN: Transactions -->
                            <div class="g-col-12 g-col-md-6 g-col-xl-4 g-col-xxl-12 mt-3 mt-xxl-8">
                                <div class="intro-x d-flex align-items-center h-10">
                                    <h2 class="fs-lg fw-medium truncate me-5">
                                        Transactions
                                    </h2>
                                </div>
                                <div class="mt-5">
                                    <div class="intro-x">
                                        <div class="box px-5 py-3 mb-3 d-flex align-items-center zoom-in">
                                            <div class="w-10 h-10 flex-none image-fit rounded-circle overflow-hidden">
                                                <img alt="Rubick Bootstrap HTML Admin Template"
                                                    src="{{ asset('backend/dist/images/profile-8.jpg')}}">
                                            </div>
                                            <div class="ms-4 me-auto">
                                                <div class="fw-medium">Keanu Reeves</div>
                                                <div class="text-gray-600 fs-xs mt-0.5">16 July 2021</div>
                                            </div>
                                            <div class="text-theme-6">-$62</div>
                                        </div>
                                    </div>
                                    <div class="intro-x">
                                        <div class="box px-5 py-3 mb-3 d-flex align-items-center zoom-in">
                                            <div class="w-10 h-10 flex-none image-fit rounded-circle overflow-hidden">
                                                <img alt="Rubick Bootstrap HTML Admin Template"
                                                    src="{{ asset('backend/dist/images/profile-11.jpg')}}">
                                            </div>
                                            <div class="ms-4 me-auto">
                                                <div class="fw-medium">Denzel Washington</div>
                                                <div class="text-gray-600 fs-xs mt-0.5">15 January 2021</div>
                                            </div>
                                            <div class="text-theme-6">-$53</div>
                                        </div>
                                    </div>
                                    <div class="intro-x">
                                        <div class="box px-5 py-3 mb-3 d-flex align-items-center zoom-in">
                                            <div class="w-10 h-10 flex-none image-fit rounded-circle overflow-hidden">
                                                <img alt="Rubick Bootstrap HTML Admin Template"
                                                    src="{{ asset('backend/dist/images/profile-7.jpg')}}">
                                            </div>
                                            <div class="ms-4 me-auto">
                                                <div class="fw-medium">Morgan Freeman</div>
                                                <div class="text-gray-600 fs-xs mt-0.5">7 July 2022</div>
                                            </div>
                                            <div class="text-theme-6">-$42</div>
                                        </div>
                                    </div>
                                    <div class="intro-x">
                                        <div class="box px-5 py-3 mb-3 d-flex align-items-center zoom-in">
                                            <div class="w-10 h-10 flex-none image-fit rounded-circle overflow-hidden">
                                                <img alt="Rubick Bootstrap HTML Admin Template"
                                                    src="{{ asset('backend/dist/images/profile-4.jpg')}}">
                                            </div>
                                            <div class="ms-4 me-auto">
                                                <div class="fw-medium">Tom Cruise</div>
                                                <div class="text-gray-600 fs-xs mt-0.5">19 September 2020</div>
                                            </div>
                                            <div class="text-theme-9">+$34</div>
                                        </div>
                                    </div>
                                    <div class="intro-x">
                                        <div class="box px-5 py-3 mb-3 d-flex align-items-center zoom-in">
                                            <div class="w-10 h-10 flex-none image-fit rounded-circle overflow-hidden">
                                                <img alt="Rubick Bootstrap HTML Admin Template"
                                                    src="{{ asset('backend/dist/images/profile-15.jpg')}}">
                                            </div>
                                            <div class="ms-4 me-auto">
                                                <div class="fw-medium">Sylvester Stallone</div>
                                                <div class="text-gray-600 fs-xs mt-0.5">30 September 2020</div>
                                            </div>
                                            <div class="text-theme-6">-$126</div>
                                        </div>
                                    </div>
                                    <a href="index.html"
                                        class="intro-x w-full d-block text-center rounded-2 py-3 border border-dotted border-theme-15 dark-border-dark-5 text-theme-16 dark-text-gray-600">View
                                        More</a>
                                </div>
                            </div>
                            <!-- END: Transactions -->
                            <!-- BEGIN: Recent Activities -->
                            <div class="g-col-12 g-col-md-6 g-col-xl-4 g-col-xxl-12 mt-3">
                                <div class="intro-x d-flex align-items-center h-10">
                                    <h2 class="fs-lg fw-medium truncate me-5">
                                        Recent Activities
                                    </h2>
                                    <a href="index.html" class="ms-auto text-theme-1 dark-text-theme-10 truncate">Show
                                        More</a>
                                </div>
                                <div class="report-timeline mt-5 position-relative">
                                    <div class="intro-x position-relative d-flex align-items-center mb-3">
                                        <div class="report-timeline__image">
                                            <div class="w-10 h-10 flex-none image-fit rounded-circle overflow-hidden">
                                                <img alt="Rubick Bootstrap HTML Admin Template"
                                                    src="{{ asset('backend/dist/images/profile-14.jpg')}}">
                                            </div>
                                        </div>
                                        <div class="box px-5 py-3 ms-4 flex-1 zoom-in">
                                            <div class="d-flex align-items-center">
                                                <div class="fw-medium">Russell Crowe</div>
                                                <div class="fs-xs text-gray-500 ms-auto">07:00 PM</div>
                                            </div>
                                            <div class="text-gray-600 mt-1">Has joined the team</div>
                                        </div>
                                    </div>
                                    <div class="intro-x position-relative d-flex align-items-center mb-3">
                                        <div class="report-timeline__image">
                                            <div class="w-10 h-10 flex-none image-fit rounded-circle overflow-hidden">
                                                <img alt="Rubick Bootstrap HTML Admin Template"
                                                    src="{{ asset('backend/dist/images/profile-6.jpg')}}">
                                            </div>
                                        </div>
                                        <div class="box px-5 py-3 ms-4 flex-1 zoom-in">
                                            <div class="d-flex align-items-center">
                                                <div class="fw-medium">Kate Winslet</div>
                                                <div class="fs-xs text-gray-500 ms-auto">07:00 PM</div>
                                            </div>
                                            <div class="text-gray-600">
                                                <div class="mt-1">Added 3 new photos</div>
                                                <div class="d-flex mt-2">
                                                    <div class="tooltip w-8 h-8 image-fit me-1 zoom-in"
                                                        title="Sony Master Series A9G">
                                                        <img alt="Rubick Bootstrap HTML Admin Template"
                                                            class="rounded-2 border border-white dark-border-dark-3"
                                                            src="{{ asset('backend/dist/images/preview-2.jpg')}}">
                                                    </div>
                                                    <div class="tooltip w-8 h-8 image-fit me-1 zoom-in"
                                                        title="Dell XPS 13">
                                                        <img alt="Rubick Bootstrap HTML Admin Template"
                                                            class="rounded-2 border border-white dark-border-dark-3"
                                                            src="{{ asset('backend/dist/images/preview-10.jpg')}}">
                                                    </div>
                                                    <div class="tooltip w-8 h-8 image-fit me-1 zoom-in"
                                                        title="Nikon Z6">
                                                        <img alt="Rubick Bootstrap HTML Admin Template"
                                                            class="rounded-2 border border-white dark-border-dark-3"
                                                            src="{{ asset('backend/dist/images/preview-9.jpg')}}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="intro-x text-gray-500 fs-xs text-center my-4">12 November</div>
                                    <div class="intro-x position-relative d-flex align-items-center mb-3">
                                        <div class="report-timeline__image">
                                            <div class="w-10 h-10 flex-none image-fit rounded-circle overflow-hidden">
                                                <img alt="Rubick Bootstrap HTML Admin Template"
                                                    src="{{ asset('backend/dist/images/profile-15.jpg')}}">
                                            </div>
                                        </div>
                                        <div class="box px-5 py-3 ms-4 flex-1 zoom-in">
                                            <div class="d-flex align-items-center">
                                                <div class="fw-medium">Denzel Washington</div>
                                                <div class="fs-xs text-gray-500 ms-auto">07:00 PM</div>
                                            </div>
                                            <div class="text-gray-600 mt-1">Has changed <a
                                                    class="text-theme-1 dark-text-theme-10" href="index.html">Samsung
                                                    Q90 QLED TV</a> price and description</div>
                                        </div>
                                    </div>
                                    <div class="intro-x position-relative d-flex align-items-center mb-3">
                                        <div class="report-timeline__image">
                                            <div class="w-10 h-10 flex-none image-fit rounded-circle overflow-hidden">
                                                <img alt="Rubick Bootstrap HTML Admin Template"
                                                    src="{{ asset('backend/dist/images/profile-6.jpg')}}">
                                            </div>
                                        </div>
                                        <div class="box px-5 py-3 ms-4 flex-1 zoom-in">
                                            <div class="d-flex align-items-center">
                                                <div class="fw-medium">Tom Cruise</div>
                                                <div class="fs-xs text-gray-500 ms-auto">07:00 PM</div>
                                            </div>
                                            <div class="text-gray-600 mt-1">Has changed <a
                                                    class="text-theme-1 dark-text-theme-10" href="index.html">Nike
                                                    Tanjun</a> description</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Recent Activities -->
                            <!-- BEGIN: Important Notes -->
                            <div
                                class="g-col-12 g-col-md-6 g-col-xl-12 g-start-xl-1 g-row-start-xl-1 g-start-xxl-auto g-row-start-xxl-auto mt-3">
                                <div class="intro-x d-flex align-items-center h-10">
                                    <h2 class="fs-lg fw-medium truncate me-auto">
                                        Important Notes
                                    </h2>
                                    <button data-carousel="important-notes" data-target="prev"
                                        class="tiny-slider-navigator btn px-2 border-gray-400 dark-border-dark-3 text-gray-700 dark-text-gray-300 me-2">
                                        <i data-feather="chevron-left" class="w-4 h-4"></i> </button>
                                    <button data-carousel="important-notes" data-target="next"
                                        class="tiny-slider-navigator btn px-2 border-gray-400 dark-border-dark-3 text-gray-700 dark-text-gray-300 me-2">
                                        <i data-feather="chevron-right" class="w-4 h-4"></i> </button>
                                </div>
                                <div class="mt-5 intro-x">
                                    <div class="box zoom-in">
                                        <div class="tiny-slider" id="important-notes">
                                            <div class="p-5">
                                                <div class="fs-base fw-medium truncate">Lorem Ipsum is simply dummy text
                                                </div>
                                                <div class="text-gray-500 mt-1">20 Hours ago</div>
                                                <div class="text-gray-600 text-justify mt-1">Lorem Ipsum is simply dummy
                                                    text of the printing and typesetting industry. Lorem Ipsum has been
                                                    the industry's standard dummy text ever since the 1500s.</div>
                                                <div class="fw-medium d-flex mt-5">
                                                    <button type="button" class="btn btn-secondary py-1 px-2">View
                                                        Notes</button>
                                                    <button type="button"
                                                        class="btn btn-outline-secondary py-1 px-2 ms-auto">Dismiss</button>
                                                </div>
                                            </div>
                                            <div class="p-5">
                                                <div class="fs-base fw-medium truncate">Lorem Ipsum is simply dummy text
                                                </div>
                                                <div class="text-gray-500 mt-1">20 Hours ago</div>
                                                <div class="text-gray-600 text-justify mt-1">Lorem Ipsum is simply dummy
                                                    text of the printing and typesetting industry. Lorem Ipsum has been
                                                    the industry's standard dummy text ever since the 1500s.</div>
                                                <div class="fw-medium d-flex mt-5">
                                                    <button type="button" class="btn btn-secondary py-1 px-2">View
                                                        Notes</button>
                                                    <button type="button"
                                                        class="btn btn-outline-secondary py-1 px-2 ms-auto">Dismiss</button>
                                                </div>
                                            </div>
                                            <div class="p-5">
                                                <div class="fs-base fw-medium truncate">Lorem Ipsum is simply dummy text
                                                </div>
                                                <div class="text-gray-500 mt-1">20 Hours ago</div>
                                                <div class="text-gray-600 text-justify mt-1">Lorem Ipsum is simply dummy
                                                    text of the printing and typesetting industry. Lorem Ipsum has been
                                                    the industry's standard dummy text ever since the 1500s.</div>
                                                <div class="fw-medium d-flex mt-5">
                                                    <button type="button" class="btn btn-secondary py-1 px-2">View
                                                        Notes</button>
                                                    <button type="button"
                                                        class="btn btn-outline-secondary py-1 px-2 ms-auto">Dismiss</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Important Notes -->
                            <!-- BEGIN: Schedules -->
                            <div
                                class="g-col-12 g-col-md-6 g-col-xl-4 g-col-xxl-12 g-start-xl-1 g-row-start-xl-2 g-start-xxl-auto g-row-start-xxl-auto mt-3">
                                <div class="intro-x d-flex align-items-center h-10">
                                    <h2 class="fs-lg fw-medium truncate me-5">
                                        Schedules
                                    </h2>
                                    <a href="index.html"
                                        class="ms-auto text-theme-26 dark-text-gray-400 truncate d-flex align-items-center">
                                        <i data-feather="plus" class="w-4 h-4 me-1"></i> Add New Schedules </a>
                                </div>
                                <div class="mt-5">
                                    <div class="intro-x box">
                                        <div class="p-5">
                                            <div class="d-flex">
                                                <i data-feather="chevron-left" class="w-5 h-5 text-gray-600"></i>
                                                <div class="fw-medium fs-base mx-auto">April</div>
                                                <i data-feather="chevron-right" class="w-5 h-5 text-gray-600"></i>
                                            </div>
                                            <div class="grid columns-7 gap-4 mt-5 text-center">
                                                <div class="fw-medium">Su</div>
                                                <div class="fw-medium">Mo</div>
                                                <div class="fw-medium">Tu</div>
                                                <div class="fw-medium">We</div>
                                                <div class="fw-medium">Th</div>
                                                <div class="fw-medium">Fr</div>
                                                <div class="fw-medium">Sa</div>
                                                <div class="py-0.5 rounded position-relative text-gray-600">29</div>
                                                <div class="py-0.5 rounded position-relative text-gray-600">30</div>
                                                <div class="py-0.5 rounded position-relative text-gray-600">31</div>
                                                <div class="py-0.5 rounded position-relative">1</div>
                                                <div class="py-0.5 rounded position-relative">2</div>
                                                <div class="py-0.5 rounded position-relative">3</div>
                                                <div class="py-0.5 rounded position-relative">4</div>
                                                <div class="py-0.5 rounded position-relative">5</div>
                                                <div
                                                    class="py-0.5 bg-theme-18 dark-bg-theme-9 rounded position-relative">
                                                    6</div>
                                                <div class="py-0.5 rounded position-relative">7</div>
                                                <div
                                                    class="py-0.5 bg-theme-1 dark-bg-theme-1 text-white rounded position-relative">
                                                    8</div>
                                                <div class="py-0.5 rounded position-relative">9</div>
                                                <div class="py-0.5 rounded position-relative">10</div>
                                                <div class="py-0.5 rounded position-relative">11</div>
                                                <div class="py-0.5 rounded position-relative">12</div>
                                                <div class="py-0.5 rounded position-relative">13</div>
                                                <div class="py-0.5 rounded position-relative">14</div>
                                                <div class="py-0.5 rounded position-relative">15</div>
                                                <div class="py-0.5 rounded position-relative">16</div>
                                                <div class="py-0.5 rounded position-relative">17</div>
                                                <div class="py-0.5 rounded position-relative">18</div>
                                                <div class="py-0.5 rounded position-relative">19</div>
                                                <div class="py-0.5 rounded position-relative">20</div>
                                                <div class="py-0.5 rounded position-relative">21</div>
                                                <div class="py-0.5 rounded position-relative">22</div>
                                                <div
                                                    class="py-0.5 bg-theme-17 dark-bg-theme-11 rounded position-relative">
                                                    23</div>
                                                <div class="py-0.5 rounded position-relative">24</div>
                                                <div class="py-0.5 rounded position-relative">25</div>
                                                <div class="py-0.5 rounded position-relative">26</div>
                                                <div
                                                    class="py-0.5 bg-theme-14 dark-bg-theme-12 rounded position-relative">
                                                    27</div>
                                                <div class="py-0.5 rounded position-relative">28</div>
                                                <div class="py-0.5 rounded position-relative">29</div>
                                                <div class="py-0.5 rounded position-relative">30</div>
                                                <div class="py-0.5 rounded position-relative text-gray-600">1</div>
                                                <div class="py-0.5 rounded position-relative text-gray-600">2</div>
                                                <div class="py-0.5 rounded position-relative text-gray-600">3</div>
                                                <div class="py-0.5 rounded position-relative text-gray-600">4</div>
                                                <div class="py-0.5 rounded position-relative text-gray-600">5</div>
                                                <div class="py-0.5 rounded position-relative text-gray-600">6</div>
                                                <div class="py-0.5 rounded position-relative text-gray-600">7</div>
                                                <div class="py-0.5 rounded position-relative text-gray-600">8</div>
                                                <div class="py-0.5 rounded position-relative text-gray-600">9</div>
                                            </div>
                                        </div>
                                        <div class="border-top border-gray-200 dark-border-dark-5 p-5">
                                            <div class="d-flex align-items-center">
                                                <div class="w-2 h-2 bg-theme-11 rounded-circle me-3"></div>
                                                <span class="truncate">UI/UX Workshop</span>
                                                <div
                                                    class="h-px flex-1 border border-right border-dashed border-gray-300 mx-3 d-xl-none">
                                                </div>
                                                <span class="fw-medium ms-xl-auto">23th</span>
                                            </div>
                                            <div class="d-flex align-items-center mt-4">
                                                <div class="w-2 h-2 bg-theme-1 dark-bg-theme-10 rounded-circle me-3">
                                                </div>
                                                <span class="truncate">VueJs Frontend Development</span>
                                                <div
                                                    class="h-px flex-1 border border-right border-dashed border-gray-300 mx-3 d-xl-none">
                                                </div>
                                                <span class="fw-medium ms-xl-auto">10th</span>
                                            </div>
                                            <div class="d-flex align-items-center mt-4">
                                                <div class="w-2 h-2 bg-theme-12 rounded-circle me-3"></div>
                                                <span class="truncate">Laravel Rest API</span>
                                                <div
                                                    class="h-px flex-1 border border-right border-dashed border-gray-300 mx-3 d-xl-none">
                                                </div>
                                                <span class="fw-medium ms-xl-auto">31th</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Schedules -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Content -->
    </div>
    <!-- BEGIN: Dark Mode Switcher-->
    <div data-url="side-menu-dark-dashboard-overview-1.html"
        class="dark-mode-switcher cursor-pointer shadow-md position-fixed bottom-0 end-0 box dark-bg-dark-2 border rounded-pill w-40 h-12 d-flex align-items-center justify-content-center z-50 mb-10 me-10">
        <div class="me-4 text-gray-700 dark-text-gray-300">Dark Mode</div>
        <div class="dark-mode-switcher__toggle border"></div>
    </div>
    <!-- END: Dark Mode Switcher-->
    <!-- BEGIN: JS Assets-->
    <script
        src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBG7gNHAhDzgYmq4-EHvM4bqW1DNj2UCuk&libraries=places">
    </script>
    <script src="{{ asset('backend/dist/js/app.js') }}"></script>
    <!-- END: JS Assets-->
</body>

</html>