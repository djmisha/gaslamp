!function(e){e(document).ready(function(){var t,i=function(t,i){this.element=t,this.custom_select_link=null,this.custom_dropdown=null,this.frontend_customizer=!!e("body").hasClass("et_frontend_customizer"),this.options=jQuery.extend({},this.defaults,i),this.create_dropdown()};function o(e,i){$range_input=e,$range=$range_input.parent().find('input[type="range"]'),value=parseFloat($range_input.val()),reset=parseFloat($range.attr("data-reset_value")),step=parseFloat($range_input.attr("step")),min=parseFloat($range_input.attr("min")),max=parseFloat($range_input.attr("max")),clearTimeout(t),t=setTimeout(function(){if(isNaN(value))return $range_input.val(reset),void $range.val(reset).trigger("change");step>=1&&value%1!=0&&(value=Math.round(value),$range_input.val(value),$range.val(value)),value>max&&($range_input.val(max),$range.val(max).trigger("change")),value<min&&($range_input.val(min),$range.val(min).trigger("change"))},i),$range.val(value).trigger("change")}void 0!==window.location.search&&-1!==window.location.search.search("et_customizer_option_set=module")?e("body").addClass("et_modules_customizer_option_set"):e("body").addClass("et_theme_customizer_option_set"),i.prototype={defaults:{apply_value_to:"body"},create_dropdown:function(){var t,i,o=this.element,n="";if(o.length&&(o.hide().addClass("et_select_image_main_select"),o.change(e.proxy(this.change_option,this)),o.find("option").each(function(){var t=e(this),i=e(this).is(":selected")?' class="et_select_image_active"':"",o=0===t.attr("value").indexOf("_")?t.attr("value"):"_"+t.attr("value");n+='<li class="et_si'+o+'_column" data-value="'+t.attr("value")+'"'+i+">"+t.text()+"</li>"}),o.after('<a href="#" class="et_select_image_custom_select"><span class="et_filter_text"></span></a><ul class="et_select_image_options '+this.esc_classname(o.attr("data-customize-setting-link"))+'">'+n+"</ul>")),this.custom_select_link=o.next(".et_select_image_custom_select"),this.custom_dropdown=this.custom_select_link.next(".et_select_image_options"),(t=o.find(":selected")).length){var s=0===t.attr("value").indexOf("_")?t.attr("value"):"_"+t.attr("value");this.custom_select_link.find(".et_filter_text").text(t.text()).addClass("et_si"+s+"_column"),i="none"==t.val()?this.custom_dropdown.find("li").eq(0):this.custom_dropdown.find('li[data-value="'+t.text()+'"]'),this.custom_select_link.find(".et_filter_text").addClass(i.attr("class")).attr("data-si-class",i.attr("class")),i.addClass("et_select_image_active")}this.custom_select_link.click(e.proxy(this.open_dropdown,this)),this.custom_dropdown.find("li").click(e.proxy(this.select_option,this))},open_dropdown:function(t){var i=e(t.target);return!this.custom_dropdown.hasClass("et_select_image_open")&&(this.custom_dropdown.show().addClass("et_select_image_open"),i.hide(),!1)},select_option:function(t){var i=e(t.target),o=i.attr("data-value"),n=this.custom_select_link.find(".et_filter_text"),s=this.element.find('option[value="'+o+'"]');return i.hasClass("et_select_image_active")?(this.close_dropdown(),!1):(i.siblings().removeClass("et_select_image_active"),n.removeClass(function(e,t){return(t.match(/\bet_si_\S+/g)||[]).join(" ")}),n.addClass(i.attr("class")).attr("data-si-class",i.attr("class")),i.addClass("et_select_image_active"),this.close_dropdown(),s.length?this.element.val(o).trigger("change"):this.element.val("none").trigger("change"),!1)},close_dropdown:function(){this.custom_select_link.find(".et_filter_text").show(),this.custom_dropdown.hide().removeClass("et_select_image_open")},change_option:function(){var e=this.element.find("option:selected").val(),t=this.custom_dropdown.find('li[data-value="'+e+'"]'),i=this.custom_select_link.find(".et_filter_text"),o=i.attr("data-si-class");this.custom_dropdown.find("li.et_select_image_active").data("value")!==e&&(this.custom_dropdown.find("li").removeClass("et_select_image_active"),i.removeClass(o).addClass(t.attr("class")).attr("data-si-class",t.attr("class")),t.addClass("et_select_image_active"))},esc_classname:function(e){return"et_si_"+e.replace(/[ +\/\[\]]/g,"_").toLowerCase()}},e.fn.et_select_image=function(e){return new i(this,e),this},e('select[data-customize-setting-link="et_divi[footer_columns]"]').et_select_image({apply_value_to:"body"}),e(".et_divi_reset_slider").click(function(){var t=e(this).closest("label").find("input"),i=(t.data("customize-setting-link"),t.data("reset_value"));t.val(i),t.change()}),e("#accordion-section-et_divi_mobile_tablet h3, #accordion-panel-et_divi_mobile h3").click(function(){var t=e("#customize-preview");t.removeClass("et_divi_phone et_divi_tablet"),t.addClass("et_divi_tablet")}),e("#accordion-section-et_divi_mobile_phone h3, #accordion-section-et_divi_mobile_menu h3").click(function(){var t=e("#customize-preview");t.removeClass("et_divi_phone et_divi_tablet"),t.addClass("et_divi_phone")}),e(".control-panel-back, .customize-panel-back").click(function(){e("#customize-preview").removeClass("et_divi_phone et_divi_tablet")}),e("input[type=range]").on("mousedown",function(){var t=e(this).parent().children(".et-pb-range-input");value=e(this).attr("value"),t.val(value),e(this).mousemove(function(){value=e(this).attr("value"),t.val(value)})}),e("input.et-pb-range-input").on("change keyup",function(){o(e(this),1e3)}).on("focusout",function(){o(e(this),0)}),e("input.et_font_style_checkbox[type=checkbox]").live("change",function(){var t=e(this),i=t.closest("span").siblings("input.et_font_styles"),o=t.val(),n=i.val(),s="false"!=n?n.split("|"):[],_=e.inArray(o,s),a="";1==t.prop("checked")?n.length?_<0&&(s.push(o),a=s.join("|")):a=o:0!==n.length&&(_>=0?(s.splice(_,1),a=s.join("|")):a=n),i.val(a).trigger("change")}),e("span.et_font_style").click(function(){var t=e(this).find("input");e(this).toggleClass("et_font_style_checked"),t.is(":checked")?t.prop("checked",!1):t.prop("checked",!0),t.change()});var n=e("#customize-control-et_divi-vertical_nav");function s(){$checkbox=e('#customize-control-et_divi-use_sidebar_width input[type="checkbox"]'),$sidebar_width_control=e("#customize-control-et_divi-sidebar_width"),$checkbox.is(":checked")?$sidebar_width_control.fadeIn():$sidebar_width_control.fadeOut()}$vertical_nav_input=n.find("input[type=checkbox]"),$nav_fullwidth_control=e("#customize-control-et_divi-nav_fullwidth"),$hide_navigation_until_scroll_control=e("#customize-control-et_divi-hide_nav"),$header_style_option=e("#customize-control-et_divi-header_style select"),$secondary_menu_options=e("#accordion-section-et_divi_header_secondary"),$slide_header_section=e("#accordion-section-et_divi_header_slide"),$show_top_bar_input=e("#customize-control-et_divi-slide_nav_show_top_bar input[type=checkbox]"),$top_bar_related_options=e("#customize-control-et_divi-slide_nav_bg_top, #customize-control-et_divi-slide_nav_top_color, #customize-control-et_divi-slide_nav_search, #customize-control-et_divi-slide_nav_search_bg"),$primary_header_options=e("#customize-control-et_divi-primary_nav_font_size, #customize-control-et_divi-primary_nav_font_spacing, #customize-control-et_divi-primary_nav_font, #customize-control-et_divi-primary_nav_font_style, #customize-control-et_divi-menu_link_active, #customize-control-et_divi-primary_nav_dropdown_bg, #customize-control-et_divi-primary_nav_dropdown_line_color, #customize-control-et_divi-primary_nav_dropdown_link_color, #customize-control-et_divi-primary_nav_dropdown_animation, #customize-control-et_divi-fixed_primary_nav_font_size, #customize-control-et_divi-fixed_secondary_nav_bg, #customize-control-et_divi-fixed_menu_link, #customize-control-et_divi-fixed_secondary_menu_link, #customize-control-et_divi-fixed_menu_link_active"),$slide_only_options=e("#customize-control-et_divi-slide_nav_width, #customize-control-et_divi-slide_nav_search, #customize-control-et_divi-slide_nav_search_bg, #customize-control-et_divi-slide_nav_font_size, #customize-control-et_divi-slide_nav_top_font_size"),$fullscreen_only_options=e("#customize-control-et_divi-fullscreen_nav_font_size, #customize-control-et_divi-fullscreen_nav_top_font_size"),$vertical_orientation=e("#customize-control-et_divi-vertical_nav_orientation"),$vertical_nav_input.is(":checked")?($nav_fullwidth_control.hide(),$hide_navigation_until_scroll_control.hide(),$vertical_orientation.show()):($nav_fullwidth_control.show(),$hide_navigation_until_scroll_control.show(),$vertical_orientation.hide()),"slide"===$header_style_option.val()||"fullscreen"===$header_style_option.val()?(n.hide(),$vertical_nav_input.attr("checked",!1),$vertical_nav_input.change(),$secondary_menu_options.addClass("et_hidden_section"),$primary_header_options.hide(),$slide_header_section.removeClass("et_hidden_section"),"slide"===$header_style_option.val()?($slide_only_options.removeClass("et_hidden_section"),$fullscreen_only_options.addClass("et_hidden_section")):($slide_only_options.addClass("et_hidden_section"),$fullscreen_only_options.removeClass("et_hidden_section"))):(n.show(),$secondary_menu_options.removeClass("et_hidden_section"),$primary_header_options.show(),$slide_header_section.addClass("et_hidden_section")),$show_top_bar_input.is(":checked")?$top_bar_related_options.show():$top_bar_related_options.hide(),e("#customize-theme-controls").on("change","#customize-control-et_divi-vertical_nav input[type=checkbox]",function(){$input=e(this),$input.is(":checked")?($nav_fullwidth_control.hide(),$hide_navigation_until_scroll_control.hide(),$vertical_orientation.show()):($nav_fullwidth_control.show(),$hide_navigation_until_scroll_control.show(),$vertical_orientation.hide())}),e("#customize-theme-controls").on("change","#customize-control-et_divi-header_style select",function(){$input=e(this),"slide"===$input.val()||"fullscreen"===$input.val()?(n.hide(),$vertical_nav_input.attr("checked",!1),$vertical_nav_input.change(),$secondary_menu_options.addClass("et_hidden_section"),$primary_header_options.hide(),$slide_header_section.removeClass("et_hidden_section"),"slide"===$header_style_option.val()?($slide_only_options.removeClass("et_hidden_section"),$fullscreen_only_options.addClass("et_hidden_section")):($slide_only_options.addClass("et_hidden_section"),$fullscreen_only_options.removeClass("et_hidden_section"))):(n.show(),$secondary_menu_options.removeClass("et_hidden_section"),$primary_header_options.show(),$slide_header_section.addClass("et_hidden_section"))}),e("#customize-theme-controls").on("change","#customize-control-et_divi-slide_nav_show_top_bar input[type=checkbox]",function(){$input=e(this),$input.is(":checked")?$top_bar_related_options.show():$top_bar_related_options.hide()}),s(),e("#customize-theme-controls").on("change","#customize-control-et_divi-use_sidebar_width input[type=checkbox]",function(){s()})});var t=wp.customize;t.ET_ColorAlphaControl=t.Control.extend({ready:function(){var e=this,i=e.container.find(".color-picker-hex");i.val(e.setting()).wpColorPicker({change:function(){e.setting.set(i.wpColorPicker("color"))},clear:function(){e.setting.set(!1)}}),e.setting.bind(function(e){i.val(e),i.wpColorPicker("color",e)}),"et_divi[footer_menu_text_color]"===this.id&&this.setting.bind("change",function(e){t("et_divi[footer_menu_active_link_color]").set(e),t.control("et_divi[footer_menu_active_link_color]").container.find(".color-picker-hex").data("data-default-color",e).wpColorPicker({defaultColor:e,color:e})})}}),e("body").on("click",".et_font_icon li",function(){var t,i=e(this);i.hasClass("active")||(e(".et_font_icon li").removeClass("et_active"),i.addClass("et_active"),(t=i.closest("label").find(".et_selected_icon")).val(i.data("icon")),t.change())}),t.controlConstructor.et_coloralpha=t.ET_ColorAlphaControl,e(window).load(function(){if(e("#accordion-section-et_divi_buttons").length){var t=e("#customize-control-et_divi-all_buttons_icon select"),i=t.val();o(i),t.change(function(){o(i=e(this).val())})}function o(t){e.each(["all_buttons_icon_color","all_buttons_icon_placement","all_buttons_icon_hover","all_buttons_selected_icon"],function(i,o){"yes"===t?e("#customize-control-et_divi-"+o).show():e("#customize-control-et_divi-"+o).hide()})}e(".et_font_icon").length&&e(".et_font_icon").each(function(){var t=e(this),i=t.closest("label").find(".et_selected_icon").val();t.find('li[data-icon="'+i+'"]').addClass("et_active")})})}(jQuery);