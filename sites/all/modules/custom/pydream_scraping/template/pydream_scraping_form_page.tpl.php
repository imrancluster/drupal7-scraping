<div id="scraping-main-wrapper">

    <div id="scraping-form">

        <form id="scrap-form" action="scraping-save" method="post">

            <div class="form-item">
                <label for="scrap-subject">Subject <span class="form-required" title="This field is required.">*</span></label>
                <input required="required" class="form-text form-number required" type="text" id="scrap-subject" name="scrap_subject" value="<?php echo $subject = isset($items['scrap_data']['subject']) ? $items['scrap_data']['subject'] : ""; ?>" size="60" maxlength="128"/>
            </div>

            <div class="form-item">
                <label for="scrap-url">Scrap Url <span class="form-required" title="This field is required.">*</span></label>
                <input required="required" class="form-text form-number required" type="text" id="scrap-url" name="scrap_url" value="<?php echo $url = isset($items['scrap_data']['url']) ? $items['scrap_data']['url'] : ""; ?>" size="60" maxlength="128"/>
            </div>

            <div class="form-item">
                <label for="detail-link-field-map">Detail Link Field Map <span class="form-required" title="This field is required.">*</span></label>
                <input required="required" class="form-text form-number required" type="text" id="detail-link-field-map" name="detail_link_field_map" value="<?php echo $field_map = isset($items['scrap_data']['field_map']) ? $items['scrap_data']['field_map'] : ""; ?>" size="60" maxlength="128"/>
            </div>


            <fieldset class="form-wrapper">

                <legend>
                    <span class="fieldset-legend">Content Type Fields</span>
                </legend>

                <div class="fieldset-wrapper">

                    <div class="form-item">
                        <label for="scrap-language">Language <span class="form-required" title="This field is required.">*</span></label>
                        <input type="radio" id="scrap-language" name="scrap_language" value="bangla" <?php echo $bangla = isset($items['scrap_data']['language']) && $items['scrap_data']['language']=="bangla" ? "checked" : ""; ?> /> Bangla
                        <input type="radio" id="scrap-language" name="scrap_language" value="english" <?php echo $english = isset($items['scrap_data']['language']) && $items['scrap_data']['language']=="english" ? "checked" : ""; ?> /> English
                    </div>

                    <div class="form-item">
                        <label for="scrap-company">Company</label>
                        <select class="form-select" id="scrap-company" name="scrap_company">
                            <option value="0">- None -</option>
                            <option value="Ittefaq" <?php echo $company = isset($items['scrap_data']['company']) && $items['scrap_data']['company']=="Ittefaq" ? "selected" : ""; ?>>Ittefaq</option>
                            <option value="Prothom Alo" <?php echo $company = isset($items['scrap_data']['company']) && $items['scrap_data']['company']=="Prothom Alo" ? "selected" : ""; ?>>Prothom Alo</option>
                        </select>
                    </div>

                    <div class="form-item">
                        <label for="scrap-category">Category</label>
                        <select class="form-select" id="scrap-category" name="scrap_category">
                            <option value="0">- None -</option>
                            <option value="Economy" <?php echo $category = isset($items['scrap_data']['category']) && $items['scrap_data']['category']=="Economy" ? "selected" : ""; ?>>Economy</option>
                            <option value="Technology" <?php echo $category = isset($items['scrap_data']['category']) && $items['scrap_data']['category']=="Technology" ? "selected" : ""; ?>>Technology</option>
                        </select>
                    </div>

                    <div class="form-item">
                        <label for="scrap-content-type">Content Type</label>
                        <select class="form-select" id="scrap-content-type" name="scrap_content_type">
                            <option value="0">- None -</option>
                            <option value="Type1" <?php echo $content_type = isset($items['scrap_data']['content_type']) && $items['scrap_data']['content_type']=="Type1" ? "selected" : ""; ?>>Type1</option>
                            <option value="Type2" <?php echo $content_type = isset($items['scrap_data']['content_type']) && $items['scrap_data']['content_type']=="Type2" ? "selected" : ""; ?>>Type2</option>
                        </select>
                    </div>

                    <div class="form-item">
                        <label for="scrap-filter">Filter</label>
                        <select class="form-select" id="scrap-filter" name="scrap_filter">
                            <option value="0">- None -</option>
                            <option value="Tag1" <?php echo $filter = isset($items['scrap_data']['filter']) && $items['scrap_data']['filter']=="Tag1" ? "selected" : ""; ?>>Tag1</option>
                            <option value="Tag2" <?php echo $filter = isset($items['scrap_data']['filter']) && $items['scrap_data']['filter']=="Tag2" ? "selected" : ""; ?>>Tag12</option>
                        </select>
                    </div>

                    <div class="form-item">
                        <label for="scrap-title">Title <span class="form-required" title="This field is required.">*</span></label>
                        <input required="required" class="form-text form-number required" type="text" id="scrap-title" name="scrap_title" value="<?php echo $title = isset($items['scrap_data']['title']) ? $items['scrap_data']['title'] : ""; ?>" size="60" maxlength="128"/>
                    </div>

                    <div class="form-item">
                        <label for="scrap-image-source">Image Source </label>
                        <input class="form-text" type="text" id="scrap-image-source" name="scrap_image_source" value="<?php echo $image_src = isset($items['scrap_data']['image_src']) ? $items['scrap_data']['image_src'] : ""; ?>" size="60" />
                    </div>

                    <div class="form-item">
                        <label for="scrap-source">Source </label>
                        <input class="form-text" type="text" id="scrap-source" name="scrap_source" value="<?php echo $src = isset($items['scrap_data']['src']) ? $items['scrap_data']['src'] : ""; ?>" size="60" />
                    </div>

                    <div class="form-item">
                        <label for="scrap-field1">Field One </label>
                        <textarea name="scrap_field1" id="scrap-field1" cols="46" rows="2">
                            <?php echo $field1 = isset($items['scrap_data']['field1']) ? $items['scrap_data']['field1'] : ""; ?>
                        </textarea>
                    </div>

                    <div class="form-item">
                        <label for="scrap-field2">Field Two </label>
                        <textarea name="scrap_field2" id="scrap-field2" cols="46" rows="2">
                            <?php echo $field2 = isset($items['scrap_data']['field2']) ? $items['scrap_data']['field2'] : ""; ?>
                        </textarea>
                    </div>

                    <div class="form-item">
                        <label for="scrap-field3">Field Three </label>
                        <textarea name="scrap_field3" id="scrap-field3" cols="46" rows="2">
                            <?php echo $field3 = isset($items['scrap_data']['field3']) ? $items['scrap_data']['field3'] : ""; ?>
                        </textarea>
                    </div>

                    <div class="form-item">
                        <label for="scrap-field4">Field Four </label>
                        <textarea name="scrap_field4" id="scrap-field4" cols="46" rows="2">
                            <?php echo $field4 = isset($items['scrap_data']['field4']) ? $items['scrap_data']['field4'] : ""; ?>
                        </textarea>
                    </div>

                    <div class="form-item">
                        <label for="scrap-field5">Field Five </label>
                        <textarea name="scrap_field5" id="scrap-field5" cols="46" rows="2">
                            <?php echo $field5 = isset($items['scrap_data']['field5']) ? $items['scrap_data']['field5'] : ""; ?>
                        </textarea>
                    </div>

                    <div class="form-item">
                        <label for="scrap-body">Body </label>
                        <textarea name="scrap_body" id="scrap-body" cols="80" rows="5">
                            <?php echo $body = isset($items['scrap_data']['body']) ? $items['scrap_data']['body'] : ""; ?>
                        </textarea>
                    </div>

                </div>

            </fieldset>





            <fieldset class="form-wrapper">

                <legend>
                    <span class="fieldset-legend">Scrap Configuration</span>
                </legend>

                <div class="fieldset-wrapper">

                    <div class="form-item">
                        <label for="scrap-schedule">Scrap Schedule <span class="form-required" title="This field is required.">*</span></label>
                        <input required="required" type="text" id="scrap-schedule" name="scrap_schedule" value="<?php echo $schedule = isset($items['scrap_data']['schedule']) ? $items['scrap_data']['schedule'] : ""; ?>" step="any" class="form-text form-number required">
                        <div class="description">time in minute</div>
                    </div>
                    <div class="form-item">
                        <label for="scrap-item-limit">Scrap Item Limit <span class="form-required" title="This field is required.">*</span></label>
                        <input required="required" type="text" id="scrap-item-limit" name="scrap_item_limit" value="<?php echo $item_limit = isset($items['scrap_data']['item_limit']) ? $items['scrap_data']['item_limit'] : ""; ?>" step="any" class="form-text form-number required">
                        <div class="description">How many number of item scrap at a time?</div>
                    </div>

                    <div class="form-item">
                        <label for="scrap-flag">Flag</label>
                        <input type="checkbox" id="scrap-flag" name="scrap_flag" <?php echo $flag = isset($items['scrap_data']['flag']) && $items['scrap_data']['flag']==1 ? "checked" : ""; ?> class="form-checkbox">
                        <div class="description">Yes/No Flag</div>
                    </div>

                </div>

            </fieldset>



            <div class="form-actions">
                <input class="button-primary form-submit" type="submit" name="submit" value="Submit">
            </div>

        </form>


    </div>

</div>