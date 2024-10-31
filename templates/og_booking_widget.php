<?php
/**
 * Oganro Booking Widget Generation Page
 */

$widget_width = (int)isset($data['general']['widget_width']) ? $data['general']['widget_width'] : 100;

if ($widget_width <= 50) {
    $ip_class = "col-lg-6 col-md-6 col-sm-12 col-xs-12";
    $submit_button = "col-lg-12 col-md-12 col-sm-12 col-xs-12";
} else {
    $ip_class = "col-lg-4 col-md-4 col-sm-12 col-xs-12";
    $submit_button = "fw-btn col-lg-4 col-md-4 col-sm-12 col-xs-12";
}

?>

<div class="widget-box">
    <div class="row">
        <div class="col-sm-12">
            <?php if ($data['general']['status']): ?>
                <div class="tab-pane active" id="widget">
                    <form target="_top" action="<?= $data['general']['bkn_engine']; ?>"
                          data-toggle="validator" accept-charset="utf-8" method="GET">

                        <div id="search_box_main_wrap">
                            <?php if($data['widget']['widget_title'] != ''): ?>
                                <div class="row">
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <h4 class="wi-title"><?= $data['widget']['widget_title']; ?></h4>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <div class="row">
                                <div class="<?= $ip_class ?>">
                                    <div class="form-group">

                                        <?php if($data['widget']['ht_checkin_title'] != ''): ?>
                                        <label><?= $data['widget']['ht_checkin_title']; ?></label>
                                        <?php endif; ?>

                                        <div class="input-group date">

                                            <input id="check_in_date" name="checkin_date" type="text"
                                                   class="form-control dp-input" required readonly/>
                                            <span class="input-group-addon dp-icon">
                                                <i class="fa fa-calendar fa-2" aria-hidden="true"></i>
                                            </span>

                                        </div>
                                    </div>
                                </div>
                                <div class="<?= $ip_class ?>">
                                    <div class="form-group">
                                        <?php if($data['widget']['ht_checkout_title'] != ''): ?>
                                            <label><?= $data['widget']['ht_checkout_title']; ?></label>
                                        <?php endif; ?>
                                        <div class="input-group date to_date">
                                            <input id="check_out_date" name="checkout_date" type="text"
                                                   class="form-control dp-input" required readonly/>
                                            <span class="input-group-addon dp-icon">
                                                <i class="fa fa-calendar fa-2" aria-hidden="true"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="<?= $submit_button ?>">
                                    <div class="form-group">
                                        <button class="btn pull-right widget-btn btn-submit" type="submit">
                                            <?= ($data['widget']['ht_btn_title'] != '') ? $data['widget']['ht_btn_title'] : 'Search' ?>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<style type="text/css">
    .widget-box {
        width: <?= $data['general']['widget_width']; ?>%;
        background-color: <?= $data['general']['wid_bg_color']; ?>;
        border: <?= $data['general']['widget_border']; ?>px solid <?= $data['general']['widget_border_color']; ?>;
        border-radius: <?= $data['general']['widget_border_radius']; ?>px;
    <?php if($data['general']['widget_align'] == 'center'): ?> margin: 0% auto;
    <?php endif; ?><?php if($data['general']['widget_align'] == 'left'): ?> float: left;
    <?php endif; ?><?php if($data['general']['widget_align'] == 'right'): ?> float: right;
    <?php endif; ?> padding: 2%;
    }

    .dp-icon {
        color: <?= $data['general']['btn_font_color']; ?> !important;
    }

    .widget-box .form-group > label,
    .widget-box .wi-title{
        color: <?= $data['general']['btn_font_color']; ?>;
        text-align: <?= ($widget_width <= 50) ? 'center' : 'left' ?>;
    }

    .widget-box .form-control,
    .widget-box .dropdown > button {
        background-color: <?= $data['general']['widget_inpt_bg_color']; ?> !important;
        color: <?= $data['general']['widget_inpt_fnt_color']; ?> !important;
        border-radius: <?= $data['general']['widget_inpt_border_radius']; ?>px !important;
        border: 1px solid;
    }

    .widget-box .btn {
        border-radius: <?= $data['general']['widget_btn_border_radius']; ?>px !important;
    }

    .widget-box .nav-pills > li:first-child > a {
        border-top-left-radius: <?= $data['general']['widget_border_radius']; ?>px;
    }

    .widget-box .nav-pills > li.active > a {
        border-top-left-radius: <?= $data['general']['widget_border_radius']; ?>px;
        border-top-right-radius: <?= $data['general']['widget_border_radius']; ?>px;
        border: <?= $data['general']['widget_border']; ?>px solid <?= $data['general']['widget_border_color']; ?>;
        border-bottom: 0px none;
        opacity: 1 !important;
    }

    .widget-box .nav-pills > li > a {
        background-color: <?= $data['general']['wid_bg_color']; ?>;
        border-top-left-radius: <?= $data['general']['widget_border_radius']; ?>px !important;
        border-top-right-radius: <?= $data['general']['widget_border_radius']; ?>px !important;
    }

    .tab-content .active {
        border: <?= $data['general']['widget_border']; ?>px solid <?= $data['general']['widget_border_color']; ?>;
    }

    .widget-box .btn-submit,
    .widget-box .btn-submit:hover,
    .widget-box .btn-submit:focus {
        background-color: <?= $data['general']['btn_bg_color']; ?>;
        color: <?= $data['general']['btn_font_color']; ?>;
        border-radius: <?= $data['general']['widget_btn_border_radius']; ?>px !important;
    }

    .widget-box .btn-submit:hover,
    .widget-box .btn-submit:focus {
        box-shadow: 0px 0px 5px -1px <?= $data['general']['btn_bg_color']; ?>;
    }

    #passengerDrpdwnUl > li > input {
        background-color: <?= $data['general']['btn_bg_color']; ?>;
        color: <?= $data['general']['btn_font_color']; ?>;
    }

    .datepicker.dropdown-menu {
        background-color: <?= $data['general']['widget_clndr_bg_color']; ?> !important;
        color: <?= $data['general']['widget_clndr_fnt_color']; ?> !important;
    }

    .datepicker table tr td.day.focused, .datepicker table tr td.day:hover,
    .datepicker .datepicker-switch:hover, .datepicker .next:hover, .datepicker .prev:hover, .datepicker tfoot tr th:hover {
        background-color: <?= $data['general']['btn_bg_color']; ?> !important;
    }

    .widget-box .btn-submit, .widget-box .btn-submit:focus, .widget-box .btn-submit:active {
        background-color: <?= $data['general']['btn_bg_color']; ?>;
        color: <?= $data['general']['btn_font_color']; ?>;
    <?php if($data['general']['widget_border'] != ''): ?> border: 1px solid <?= $data['general']['widget_border_color']; ?> !important;
    <?php endif; ?>
    }

    /** CUSTOM STYLES */
    <?= $data['general']['custom_styles']; ?>
</style>

