@extends('admin.layouts.main')


@section('content')

    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-md-6">
                <div class="page-header-title">
                    <div class="d-inline">
                        <h4>{{ $_title }}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-body">
        <form method="post" action="{{ CommonHelper::admin('settings') }}" enctype="multipart/form-data">
         @csrf

            <div class="card">
                <div class="card-header">
                    <h5>App Settings</h5>
                </div>
                <div class="card-block">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>App Name <span class="-req">*</span></label>
                                <input name="app_name" type="text" class="form-control" value="{{ CommonHelper::getsetting('app_name') }}" placeholder="App Name" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>In Maintenance {{ CommonHelper::getsetting('is_maintenance') }}<span class="-req">*</span></label>
                                <select class="form-control" name="is_maintenance" >
                                    <option value="yes" {{ CommonHelper::_selected(CommonHelper::getsetting('is_maintenance'),'yes') }}>Yes</option>
                                    <option value="no" {{ CommonHelper::_selected(CommonHelper::getsetting('is_maintenance'),'no') }}>No</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h5>Website CMS</h5>
                </div>
                <div class="card-block">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Email <span class="-req">*</span></label>
                                <input name="web_email" type="email" class="form-control" value="{{ CommonHelper::getsetting('web_email') }}" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Mobile 1 <span class="-req">*</span></label>
                                <input name="web_mobile1" type="text" class="form-control" value="{{ CommonHelper::getsetting('web_mobile1') }}" placeholder="Mobile 1" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Mobile 2 (optional)</label>
                                <input name="web_mobile2" type="text" class="form-control" value="{{ CommonHelper::getsetting('web_mobile2') }}" placeholder="Mobile 2">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Address <span class="-req">*</span></label>
                                <textarea name="web_address" type="text" class="form-control" value="" placeholder="Address" required>{{ CommonHelper::getsetting('web_address') }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Address 2<span class="-req">*</span></label>
                                <textarea name="web_address2" type="text" class="form-control" value="" placeholder="Address" required>{{ CommonHelper::getsetting('web_address2') }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Google map iframe url <span class="-req">*</span></label>
                                <input name="contact_map_url" type="text" class="form-control" value="{{ CommonHelper::getsetting('contact_map_url') }}" placeholder="Google map iframe url" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h5>Social Media</h5>
                </div>
                <div class="card-block">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>FB url (optional)</label>
                                <input name="social_media_fb" type="text" class="form-control" value="{{ CommonHelper::getsetting('social_media_fb') }}" placeholder="FB url">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Instagram url (optional)</label>
                                <input name="social_media_insta" type="text" class="form-control" value="{{ CommonHelper::getsetting('social_media_insta') }}" placeholder="Instagram url">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>X url (optional)</label>
                                <input name="social_media_x" type="text" class="form-control" value="{{ CommonHelper::getsetting('social_media_x') }}" placeholder="X url">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Youtube url (optional)</label>
                                <input name="social_media_youtube" type="text" class="form-control" value="{{ CommonHelper::getsetting('social_media_youtube') }}" placeholder="Youtube url">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Linked In url (optional)</label>
                                <input name="social_media_linkedin" type="text" class="form-control" value="{{ CommonHelper::getsetting('social_media_linkedin') }}" placeholder="Linked In url">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Skype url (optional)</label>
                                <input name="social_media_skype" type="text" class="form-control" value="{{ CommonHelper::getsetting('social_media_skype') }}" placeholder="Skype url">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="card">
                <div class="card-header">
                    <h5>Mail SMTP Details</h5>
                </div>
                <div class="card-block">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Mail send from email<span class="-req">*</span></label>
                                <input name="smtp_mail_send_from" type="text" class="form-control" value="{{ CommonHelper::getsetting('smtp_mail_send_from') }}" placeholder="Mail send from" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Mail send from name<span class="-req">*</span></label>
                                <input name="smtp_mail_send_from_name" type="text" class="form-control" value="{{ CommonHelper::getsetting('smtp_mail_send_from_name') }}" placeholder="Mail send from name" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Mail Host <span class="-req">*</span></label>
                                <input name="smtp_mail_host" type="text" class="form-control" value="{{ CommonHelper::getsetting('smtp_mail_host') }}" placeholder="Mail Host" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Mail User <span class="-req">*</span></label>
                                <input name="smtp_mail_user" type="text" class="form-control" value="{{ CommonHelper::getsetting('smtp_mail_user') }}" placeholder="Mail User" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Mail Password <span class="-req">*</span></label>
                                <input name="smtp_mail_password" type="text" class="form-control" value="{{ CommonHelper::getsetting('smtp_mail_password') }}" placeholder="Mail Password" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Mail Port <span class="-req">*</span></label>
                                <input name="smtp_mail_port" type="text" class="form-control" value="{{ CommonHelper::getsetting('smtp_mail_port') }}" placeholder="Mail Port" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Notification Emails <span class="-req">*</span></label>
                                <input name="mail_notification_email" type="text" class="form-control" value="{{ CommonHelper::getsetting('mail_notification_email') }}" placeholder="Notification Emails" required>
                                <p><b>Note:</b> Add comma saparated emails if want multiple emails.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-footer text-right">
                    <button class="btn btn-success">
                        <i class="fa fa-save"></i> Save
                    </button>
                </div>
            </div>
        </form>
    </div>

    <style type="text/css">
        .card-header{
            border-bottom: 1px solid #ccc !important;
            margin-bottom: 15px;
        }
        .card-header h5{
            margin-bottom: 0;
        }
    </style>
@stop
