<form role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url('/'); ?>">
<div class="input-group">
 <input type="text" placeholder="Pretraga" 
 class="input-sm form-control" name="s" id="search" value="<?php the_search_query(); ?>">
 <span class="input-group-btn">
  </span> 
 <button class="btn btn-sm btn-primary custom-search-button"><i class="fa fa-search" aria-hidden="true"></i></button>
 </div>
</form>