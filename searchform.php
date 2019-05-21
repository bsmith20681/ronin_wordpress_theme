<form role="search" action="<?php echo home_url('/'); ?>" method="get">
  <div class="input-group">
      <input type="search" class="form-control" placeholder="Search Posts" value="<?php echo get_search_query() ?>"  name="s" title="Search"/>
      <span class="input-group-btn">
          <button class="btn btn-default" type="submit" id="searchsubmit" value="Search" ><i class="lnr lnr-magnifier"></i></button>
      </span>
  </div>
</form>
