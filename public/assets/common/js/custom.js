$(document).ready(function() {
    if($.fn.dataTable){
        $.extend( true, $.fn.dataTable.defaults, {
            dom: "<'row'<'col-sm-12 col-md-6'B><'col-sm-12 col-md-6'f>><'row'<'col-sm-12'tr>><'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
            searching: false,
            iDisplayLength: 50,
            lengthChange: true,
            processing: true,
            serverSide: true,
        } );
    }


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(".select2").select2();

});

function ConfirmDialog(title, message, handler){
    $(`<div id="myModal" class="modal confirm-modal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body text-center" style="padding:20px;">
                        <h1>${title}</h1>
                        <p>${message}</p>
                        <div class="row">
                            <div class="col-6">
                                <button type="button" class="cancelbtn">Cancel</button>
                            </div>
                            <div class="col-6">
                                <button type="button" class="deletebtn">Yes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>`).appendTo('body');

    //Trigger the modal
    $("#myModal").modal({
       backdrop: 'static',
       keyboard: false
    });

    $(".deletebtn").click(function () {
          handler(true);
          $("#myModal").modal("hide");
    });

    //Pass false to callback function
    $(".cancelbtn").click(function () {
        handler(false);
        $("#myModal").modal("hide");
    });

    //Remove the modal once it is closed.
    $("#myModal").on('hidden.bs.modal', function () {
        $("#myModal").remove();
    });

  }


function showError(message){
    alert('error','Error',message);
}

function showSuccess(message){
    alert('success','Success',message);
}

function alert(type,title,message){
    $('#app-alert').removeClass().addClass('toast');
    if(type == 'success'){
        $('#app-alert').addClass('bg-success');
        $('#app-alert .toast-header .mr-auto').html('<i class="far fa-check-circle"></i> Success')
    }
    else{
        $('#app-alert').addClass('bg-danger');
        $('#app-alert .toast-header .mr-auto').html('<i class="fas fa-exclamation-triangle"></i> Error')
    }
     $('#app-alert .toast-body div').html(message);
     $("#app-alert").toast('show');
}
function createDropDownTemplate(id,optionA,data)
{
//   $(".select2").select2('destroy');
  let template=`<option value="">${optionA}</option>`;
  if(data!='')
  {
      for(var i in data)
      {
          template+=`<option  value="${data[i].id}">${data[i].name}</option>`;
      }

  }
  $(id).html(template);
//   $(".select2").select2();
}
function formatCurrency(amount)
{
    return  '€ '+amount.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,');
}

function formatMoney(amount)
{
    return  amount.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,');
}
