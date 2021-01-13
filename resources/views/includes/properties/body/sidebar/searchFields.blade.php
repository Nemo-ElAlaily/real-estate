<!-- Search Fields -->
<div class="main-search-field">
    <h5 class="title">Filter</h5>
    <form method="GET">
        <div class="at-col-default-mar mb-3">
            <select>
                <option value="0" selected>Location</option>
                <option value="1">New York</option>
                <option value="2">Los Angeles</option>
                <option value="3">Chicago</option>
                <option value="4">Philadelphia</option>
                <option value="5">San Francisco</option>
            </select>
        </div>
        <div class="at-col-default-mar mb-3">
            <select class="div-toggle" data-target=".my-info-1">
                <option value="0" data-show=".acitveon" selected>Property Status</option>
                <option value="1" data-show=".sale">For Sale</option>
                <option value="2" data-show=".rent">For Rent</option>
                <option value="3" data-show=".rent">Sold</option>
            </select>
        </div>
        <div class="at-col-default-mar mb-3">
            <div class="at-col-default-mar">
                <select>
                    <option value="0" selected>Property Type</option>
                    <option value="1">Family House</option>
                    <option value="2">Apartment</option>
                    <option value="3">Condo</option>
                </select>
            </div>
        </div>
        <div class="at-col-default-mar mb-3">
            <select>
                <option value="0" selected>Beds</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
        </div>
        <div class="at-col-default-mar mb-3">
            <select>
                <option value="0" selected>Baths</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
        </div>
        <div class="col-lg-12 no-pds">
            <div class="at-col-default-mar">
                <input class="at-input" type="text" name="min-area" placeholder="Squre Fit Min">
            </div>
        </div>
        <div class="col-lg-12 no-pds my-4">
            <div class="at-col-default-mar">
                <input class="at-input" type="text" name="max-area" placeholder="Squre Fit Max">
            </div>
        </div>
    </form>
</div>
<!-- Price Fields -->
<div class="main-search-field-2">
    <div class="range-slider">
        <input type="text" disabled class="slider_amount m-t-lg-30 m-t-xs-0 m-t-sm-10">
        <div class="slider-range"></div>
    </div>
</div>

<div class="col-lg-12 no-pds">
    <div class="at-col-default-mar">
        <button class="btn btn-default hvr-bounce-to-right" type="submit">Search</button>
    </div>
</div>