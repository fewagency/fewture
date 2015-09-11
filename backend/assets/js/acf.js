/**
 * Some stuff to improve the experience when using Advanced Custom Fields
 */

jQuery(document).ready(function() {

  /**
   * Ask for confirmation before deleting module
   */
  jQuery('body').on('click', '.acf-fc-remove', function(e) {

    if(!confirm('Are you sure you want to delete this?')) {

      e.preventDefault();
      return false;

    }

  });

  /**
   * Add name of module to the modules bar.
   * This will look for a field with a placeholder of "Module name" and then move the value of that field
   * to the drag/drop-bar of the field.
   */
  jQuery('.layout').each(function(index, elm) {

    var $layoutElm = jQuery(elm);
    var $nameElm = jQuery('[placeholder="Module name"]', $layoutElm);

    if($nameElm.length == 1 && $nameElm.val() !== '') {

      var $layoutHandleElm = $layoutElm.find('.acf-fc-layout-handle:first');
      var nr = jQuery('.fc-layout-order', $layoutHandleElm).text();
      jQuery('.fc-layout-order', $layoutHandleElm).remove();

      $layoutHandleElm.html('<span class="fc-layout-order">' + nr + '</span> ' + ' <b>' + $nameElm.val() + '</b> — ' + $layoutHandleElm.text().substring(4));

    }

  });

  /**
   * Add links to close and open all modules in a meta box..
   */
  jQuery('.acf-postbox').each(function(index, elm) {

    var $postboxElm = jQuery(elm);

    jQuery('.acf-field-flexible-content .acf-label:first label', $postboxElm).each(function(index, elm) {

      var $labelElm = jQuery(elm);

      $labelElm.append(' | <a href="#" class="few-acf-close-all-modules" style="font-weight: normal">Close all</a>  | <a href="#" class="few-acf-open-all-modules" style="font-weight: normal">Open all</a>')

    });

  });

  jQuery('.few-acf-open-all-modules').on('click', function(event) {

    event.preventDefault();

    var $clickedElm = jQuery(this);
    var $postboxElm = $clickedElm.parents('.acf-postbox:first');
    var $layoutElms = jQuery('.layout', $postboxElm);
    var $tableElements = jQuery('.acf-table.row-layout', $postboxElm);

    $layoutElms.attr('data-toggle', 'open');
    $tableElements.css('display', 'table');

  });

  jQuery('.few-acf-close-all-modules').on('click', function(event) {

    event.preventDefault();

    var $clickedElm = jQuery(this);
    var $postboxElm = $clickedElm.parents('.acf-postbox:first');
    var $layoutElms = jQuery('.layout', $postboxElm);
    var $tableElements = jQuery('.acf-table.row-layout', $postboxElm);

    $layoutElms.attr('data-toggle', 'closed');
    $tableElements.css('display', 'none');

  });

});

