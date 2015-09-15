<div id="scraping-main-wrapper">

    <div id="scraping-form">

        <form id="scrap-form" action="scraping-save" method="post">

            <div class="form-item">
                <label for="scrap-subject">Subject <span class="form-required" title="This field is required.">*</span></label>
                <input required="required" class="form-text form-number required" type="text" id="scrap-subject" name="scrap_subject" size="60" maxlength="128"/>
            </div>

            <div class="form-item">
                <label for="scrap-url">Scrap Url <span class="form-required" title="This field is required.">*</span></label>
                <input required="required" class="form-text form-number required" type="text" id="scrap-url" name="scrap_url" size="60" maxlength="128"/>
            </div>

            <div class="form-item">
                <label for="detail-link-field-map">Detail Link Field Map <span class="form-required" title="This field is required.">*</span></label>
                <input required="required" class="form-text form-number required" type="text" id="detail-link-field-map" name="detail_link_field_map" size="60" maxlength="128"/>
            </div>


            <fieldset class="form-wrapper">

                <legend>
                    <span class="fieldset-legend">Content Type Fields</span>
                </legend>

                <div class="fieldset-wrapper">

                    <div class="form-item">
                        <label for="scrap-language">Language <span class="form-required" title="This field is required.">*</span></label>
                        <input type="radio" id="scrap-language" name="scrap_language" value="bangla"/> Bangla
                        <input type="radio" id="scrap-language" name="scrap_language" value="english"/> English
                    </div>

                    <div class="form-item">
                        <label for="scrap-company">Company</label>
                        <select class="form-select" id="scrap-company" name="scrap_company">
                            <option value="" selected="selected">- None -</option>
                            <option value="Ittefaq">Ittefaq</option>
                            <option value="Prothom Alo">Prothom Alo</option>
                        </select>
                    </div>

                    <div class="form-item">
                        <label for="scrap-category">Category</label>
                        <select class="form-select" id="scrap-category" name="scrap_category">
                            <option value="" selected="selected">- None -</option>
                            <option value="Economy">Economy</option>
                            <option value="Technology">Technology</option>
                        </select>
                    </div>

                    <div class="form-item">
                        <label for="scrap-content-type">Content Type</label>
                        <select class="form-select" id="scrap-content-type" name="scrap_content_type">
                            <option value="" selected="selected">- None -</option>
                            <option value="Type1">Type1</option>
                            <option value="Type2">Type2</option>
                        </select>
                    </div>

                    <div class="form-item">
                        <label for="scrap-filter">Content Type</label>
                        <select class="form-select" id="scrap-filter" name="scrap_filter">
                            <option value="" selected="selected">- None -</option>
                            <option value="Tag1">Tag1</option>
                            <option value="Tag2">Tag12</option>
                        </select>
                    </div>

                    <div class="form-item">
                        <label for="scrap-title">Title <span class="form-required" title="This field is required.">*</span></label>
                        <input required="required" class="form-text form-number required" type="text" id="scrap-title" name="scrap_title" size="60" maxlength="128"/>
                    </div>

                    <div class="form-item">
                        <label for="scrap-image-source">Image Source </label>
                        <input class="form-text" type="text" id="scrap-image-source" name="scrap_image_source" size="60" />
                    </div>

                    <div class="form-item">
                        <label for="scrap-source">Source </label>
                        <input class="form-text" type="text" id="scrap-source" name="scrap_source" size="60" />
                    </div>

                    <div class="form-item">
                        <label for="scrap-field1">Field One </label>
                        <textarea name="scrap_field1" id="scrap-field1" cols="46" rows="2"></textarea>
                    </div>

                    <div class="form-item">
                        <label for="scrap-field2">Field Two </label>
                        <textarea name="scrap_field2" id="scrap-field2" cols="46" rows="2"></textarea>
                    </div>

                    <div class="form-item">
                        <label for="scrap-field3">Field Three </label>
                        <textarea name="scrap_field3" id="scrap-field3" cols="46" rows="2"></textarea>
                    </div>

                    <div class="form-item">
                        <label for="scrap-field4">Field Four </label>
                        <textarea name="scrap_field4" id="scrap-field4" cols="46" rows="2"></textarea>
                    </div>

                    <div class="form-item">
                        <label for="scrap-field5">Field Five </label>
                        <textarea name="scrap_field5" id="scrap-field5" cols="46" rows="2"></textarea>
                    </div>

                    <div class="form-item">
                        <label for="scrap-body">Body </label>
                        <textarea name="scrap_body" id="scrap-body" cols="80" rows="5"></textarea>
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
                        <input required="required" type="text" id="scrap-schedule" name="scrap_schedule" step="any" class="form-text form-number required">
                        <div class="description">time in minute</div>
                    </div>
                    <div class="form-item">
                        <label for="scrap-item-limit">Scrap Item Limit <span class="form-required" title="This field is required.">*</span></label>
                        <input required="required" type="text" id="scrap-item-limit" name="scrap_item_limit" step="any" class="form-text form-number required">
                        <div class="description">How many number of item scrap at a time?</div>
                    </div>

                </div>

            </fieldset>



            <div class="form-actions">
                <input class="button-primary form-submit" type="submit" name="submit" value="Submit">
            </div>

        </form>


    </div>

</div>