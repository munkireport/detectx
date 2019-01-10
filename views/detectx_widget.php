<div class="col-lg-4 col-md-6">

  <div class="panel panel-default" id="detectx-widget">

    <div class="panel-heading" data-container="body" title="DetectX status">

      <h3 class="panel-title"><i class="fa fa-times-circle-o"></i>
        <span data-i18n="detectx.widget.title"></span>
        <list-link data-url="/show/listing/detectx/detectx"></list-link>
      </h3>


    </div>
    
    <div class="panel-body text-center">
      
      <a tag="Clean" class="btn btn-success disabled">
        <span class="bigger-150"> 0 </span><br>
        <span></span>
      </a>

      <a tag="Issues" class="btn btn-warning disabled">
        <span class="bigger-150"> 0 </span><br>
        <span></span>
      </a>

      <a tag="Infected" class="btn btn-danger disabled">
        <span class="bigger-150"> 0 </span><br>
        <span></span>
      </a>

    </div>
    
  </div><!-- /panel -->

</div><!-- /col -->

<script>
$(document).on('appUpdate', function(e, lang) {

  $.getJSON( appUrl + '/module/detectx/get_stats', function( data ) {
    if(data.error){
      //alert(data.error);
      return;
    }
    
    $.each(['Clean', 'Issues', 'Infected'], function(index, type){
        $('#detectx-widget a[tag='+type+']')
          .attr('href', appUrl + '/show/listing/detectx/detectx/#' + type)
          .toggleClass('disabled', ! +data[type])
          .find('span.bigger-150')
              .text(+data[type])
          .nextAll().last()
              .text(i18n.t('detectx.widget.' + type.toLowerCase(), {count: +data[type]}))
    })
  });
});

</script>
