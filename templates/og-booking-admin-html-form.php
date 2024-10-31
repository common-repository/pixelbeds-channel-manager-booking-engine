<div class="wrap">
    <h1>Oganro Booking Widget</h1>
    <p class="text-muted">These settings customise your embedded availability search widget. Paste the shortcode into
        the page where you want to embed your search widget.</p>
    <table class="table table-bordered">
        <tbody>
        <tr>
            <th>Description</th>
            <th>Shortcode</th>
        </tr>
        <tr>
            <td width="50%">embedded search widget</td>
            <td>[og_booking_widget]</td>
        </tr>
        </tbody>
    </table>
    <hr>
    <?php if ($message != ''): ?>

        <div class="row">
            <div class="col-md-12">
                <p class="bg-success success-message"> <?= $message ?> </p>
            </div>
        </div>

    <?php endif; ?>

    <form method="POST"
          action="<?= admin_url('admin.php?page=og_booking_admin_page', ''); ?>">
        <input type="hidden" name="form-data" value="1">

        <table class="table table-bordered">
            <tbody>
            <tr>
                <td colspan="2">
                    <h4>Widget Configuration</h4>
                </td>
            </tr>
            <tr>
                <td width="50%">
                    <div class="form-group col-md-12">
                        <label for="bkn_engine">Booking Engine URL</label>
                        <input type="text" class="form-control" id="bkn_engine"
                               name="general[bkn_engine]" placeholder="Booking Engine URL" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="status">Status</label>
                        <select name="general[status]" id="" class="form-control">
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>

                    </div>
                </td>
                <td class="va-center">
                    <p class="text-note">
                        Use http://hoteldemo.oganro.org/availability/result for demo purpose.
                    </p>
                </td>
            </tr>




            </tbody>
        </table>

        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-pills">
                    <li class="active">
                        <a href="#wi-styles" data-toggle="tab">Widget Styles</a>
                    </li>
                    <li>
                        <a href="#wi-naming" data-toggle="tab">Widget Label Naming</a>
                    </li>
                    <li>
                        <a href="#prpty-setup" data-toggle="tab">Property Setup</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-12">
                <div class="tab-content">
                    <div class="tab-pane active" id="wi-styles">
                        <!-- WIDGET STYLES -->
                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <td colspan="2">
                                    <h4>Widget Styling</h4>
                                </td>
                            </tr>
                            <tr>
                                <td width="50%">
                                    <div class="form-group col-md-6">
                                        <label for="bg-color">Background Color</label>
                                        <input type="text" class="form-control color" id="bg-color"
                                               name="general[wid_bg_color]">
                                    </div>
                                    <p class="text-note">
                                        This is the background color of the widget
                                    </p>
                                </td>
                                <td>
                                    <div class="form-group col-md-6">
                                        <label for="wid-font-color">Widget Font Color</label>
                                        <input type="text" class="form-control color-hex" id="wid-font-color"
                                               name="general[wid_font_color]">
                                    </div>
                                    <p class="text-note">
                                        This is the font color of the widget
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="50%">
                                    <div class="form-group col-md-6">
                                        <label for="widget-width">Widget Width</label>
                                        <select name="general[widget_width]" id="widget-width" class="form-control">
                                            <option value="50">50%</option>
                                            <option value="100" selected>100%</option>
                                        </select>
                                    </div>
                                    <p class="text-note">This is the width of the widget, use 100% for full width view.</p>
                                </td>
                                <td>
                                    <div class="form-group col-md-6">
                                        <label for="widget-align">Widget Alignment</label>
                                        <select name="general[widget_align]" id="widget-align"
                                                class="form-control">
                                            <option value="left">Left</option>
                                            <option value="center">Center</option>
                                            <option value="right">Right</option>
                                        </select>
                                    </div>
                                    <p class="text-note">This is the widget alignment. This will work only if the widget with is
                                        50%.</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="50%">
                                    <div class="form-group col-md-6">
                                        <label for="widget-border">Widget Border Size (px)</label>
                                        <input type="number" class="form-control" id="widget-border"
                                               name="general[widget_border]" min="0"
                                               placeholder="0">
                                    </div>
                                    <p class="text-note">This is border width of the widget, keep it 0 (zero) to remove the border.</p>
                                </td>
                                <td>
                                    <div class="form-group col-md-6">
                                        <label for="widget-border-color">Widget Border Color</label>
                                        <input type="text" class="form-control color-hex"
                                               id="widget-border-color"
                                               name="general[widget_border_color]">
                                    </div>
                                    <p class="text-note">This is border color of the widget, this will be visible only if border size is
                                        greater than 0.</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="50%">
                                    <div class="form-group col-md-6">
                                        <label for="widget-border-radius">Widget Border Radius (px)</label>
                                        <input type="number" class="form-control" id="widget-border-radius"
                                               name="general[widget_border_radius]" min="0" placeholder="0">
                                    </div>
                                    <p class="text-note">This is the widget border radius, by increasing this value you can make the
                                        widget edges rounded.</p>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <h4>Widget Buttons Styling</h4>
                                </td>
                            </tr>
                            <tr>
                                <td width="50%">
                                    <div class="form-group col-md-6">
                                        <label for="btn-bg-color">Button Background Color</label>
                                        <input type="text" class="form-control color" id="btn-bg-color" name="general[btn_bg_color]">
                                    </div>
                                    <p class="text-note">This is to change the background color of buttons inside the widget.</p>
                                </td>
                                <td>
                                    <div class="form-group col-md-6">
                                        <label for="btn-font-color">Button Font Color</label>
                                        <input type="text" class="form-control color-hex" id="btn-font-color"
                                               name="general[btn_font_color]">
                                    </div>
                                    <p class="text-note">This is to change the font color of buttons inside the widget.</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="50%">
                                    <div class="form-group col-md-6">
                                        <label for="widget_btn_border_radius">Widget Button Border Radius</label>
                                        <input type="number" class="form-control" id="widget_btn_border_radius"
                                               name="general[widget_btn_border_radius]" min="0" placeholder="0">
                                    </div>
                                    <p class="text-note">This is to make the button edges rounded.</p>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <h4>Widget Input Field Styling</h4>
                                </td>
                            </tr>
                            <tr>
                                <td width="50%">
                                    <div class="form-group col-md-6">
                                        <label for="widget_inpt_bg_color">Inputs Background Color</label>

                                        <input type="text" class="form-control color" id="widget_inpt_bg_color"
                                               name="general[widget_inpt_bg_color]">
                                    </div>
                                    <p class="text-note">This is to change the background color of input fields inside the widget.</p>
                                </td>
                                <td>
                                    <div class="form-group col-md-6">
                                        <label for="widget_inpt_fnt_color">Inputs Font Color</label>
                                        <input type="text" class="form-control color-hex"
                                               id="widget_inpt_fnt_color" name="general[widget_inpt_fnt_color]">
                                    </div>
                                    <p class="text-note">This is to change the font color of input fields inside the widget.</p>
                                </td>

                            </tr>
                            <tr>
                                <td width="50%">
                                    <div class="form-group col-md-6">
                                        <label for="widget_inpt_border_radius">Widget Input Border Radius (px)</label>

                                        <input type="number" class="form-control" id="widget_inpt_border_radius"
                                               name="general[widget_inpt_border_radius]" min="0"
                                               placeholder="0">
                                    </div>
                                    <p class="text-note">This is to make the input field edges rounded.</p>
                                </td>

                                <td></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <h4>Widget Calender Styling</h4>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group col-md-6">
                                        <label for="widget_clndr_bg_color">Calendar Background Color</label>
                                        <input type="text" class="form-control color" id="widget_clndr_bg_color"
                                               name="general[widget_clndr_bg_color]">
                                    </div>
                                    <p class="text-note">This is to change the background color of the calender inside the widget.</p>
                                </td>
                                <td>
                                    <div class="form-group col-md-6">
                                        <label for="widget_clndr_fnt_color">Calendar Font Color</label>
                                        <input type="text" class="form-control color-hex" id="widget_clndr_fnt_color"
                                               name="general[widget_clndr_fnt_color]">
                                    </div>
                                    <p class="text-note">This is to change the font color of the calender inside the widget.</p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <h4>Custom Styling (CSS)</h4>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div class="form-group col-md-12">
                    <textarea name="general[custom_styles]" id="custom_styles"
                              cols="30" rows="10" class="form-control"></textarea>
                                    </div>
                                    <p class="text-note">Write your custom styles here...</p>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <!-- WIDGET STYLES -->
                    </div>
                    <div class="tab-pane" id="wi-naming">
                        <!-- WIDGET LABEL NAMING -->
                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <td colspan="2">
                                    <h4>Widget Label Naming</h4>
                                </td>
                            </tr>
                            <tr>
                                <td width="50%">
                                    <div class="form-group col-md-12">
                                        <label for="widget-title">Widget Title</label>
                                        <input type="text" class="form-control" id="widget-title" name="widget[widget_title]">
                                    </div>
                                    <p class="text-note">This is the Widget Title, keep it empty to remove the title.</p>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group col-md-6">
                                        <label for="ht-checkin-title">Check-in Title</label>

                                        <input type="text" class="form-control" id="ht-checkin-title"
                                               name="widget[ht_checkin_title]">
                                    </div>
                                    <p class="text-note">This is the Check-in Date Title, keep it empty to remove the title.</p>
                                </td>
                                <td>
                                    <div class="form-group col-md-6">
                                        <label for="ht-checkout-title">Check-out Title</label>
                                        <input type="text" class="form-control" id="ht-checkout-title" name="widget[ht_checkout_title]">
                                    </div>
                                    <p class="text-note">This is the Check-out Date Title, keep it empty to remove the title.</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="50%">
                                    <div class="form-group col-md-6">
                                        <label for="ht-button-title">Search button Title</label>
                                        <input type="text" class="form-control" id="ht-button-title" name="widget[ht_btn_title]">
                                    </div>
                                    <p class="text-note">This is the Search Button Title, Default value is <em>Search</em>.</p>
                                </td>
                                <td></td>
                            </tr>
                            </tbody>
                        </table>
                        <!-- WIDGET LABEL NAMING -->
                    </div>
                    <div class="tab-pane" id="prpty-setup">
                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <td colspan="2">
                                    <h4>Oganro Property Management System</h4>
                                    <hr>
                                    <p>
                                        Use below details to login into our demo Property Management System.
                                    </p>
                                    <p>
                                        <strong>PMS URL :</strong> <a href="http://hoteldemo.oganro.org/login" target="_blank">http://hoteldemo.oganro.org/login</a>
                                    </p>
                                    <p>
                                        <strong>Email Address :</strong> admin@oganro.com
                                    </p>
                                    <p>
                                        <strong>Password :</strong> admin123
                                    </p>

                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <table class="table table-bordered">
            <tbody>
            <tr>
                <td colspan="2">
                    <button class="btn btn-primary pull-right" type="submit">Save</button>
                </td>
            </tr>
            </tbody>
        </table>
    </form>


</div>

<script type="text/javascript">
    var booking_form_data = <?= json_encode($data); ?>;
</script>