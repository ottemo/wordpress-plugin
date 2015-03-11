<script type="text/javascript">
function apply_filters(){
//    var cat =  document.getElementById('category-active');
//    var href = (cat) ? cat.getAttribute('href') : '?';
    price_min = document.getElementById('price-min').value
    price_max = document.getElementById('price-max').value
    
    var href = '?price='+price_min+'..'+price_max;
    
        document.getElementById('apply-filters').setAttribute('href', href)
    
}
</script>

<div class="filter-block">
    Filters:
    <br>
    Price: <input id="price-min"/> - <input id="price-max"/>
    <br><br>
    Weight: <input id="weight-min"/> - <input id="weight-max"/>
    
    <a id="apply-filters" href="#" onclick="apply_filters()">Apply Filters</a>
</div>