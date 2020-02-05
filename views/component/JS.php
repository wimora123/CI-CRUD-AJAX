    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/jquery3.3.1.js"></script>

    <!-- <script src="<?php echo base_url()?>plugin/tinymce/tinymce.min.js"></script>
    <script>tinymce.init({forced_root_block : "", selector:'textarea#descCharacter'});</script>
 -->
    <script type="text/javascript">
      $(document).ready(function()
      {
        var showMore = 4;
        // Loading Page
        $(".preloader").fadeOut(400);

        $('.imgHeader1').animate(
        {
          'left':'50px'
        },1000)

        $('.bellSymbol').mouseover(function()
        {
          $('.bellSymbol').css(
          {
            'color':'red',
            'transition': '2s',
            'background-color': 'darkblue',
            'padding': '5px',
            'text-shadow': '0 0 20px gold, 0 0 20px gold, 0 0 20px gold, 0 0 15px gold, 0 0 20px azure',
            'border-radius': '50%'
          })
        })

        $('.badgeNotif').mouseover(function()
        {
          $('.badgeNotif').css(
          {
            'color':'magenta',
            'transition': '1.2s',
            'background-color':'azure',
            'font-size': '25px',
          })
        })

        $('.h1HomeIntro').click(function()
        {
          $(this).toggleClass('h1HomeIntroBG');
          $(this).css(
          {
            'transition':'1s'
          })

        })

        $('.badgeNotif').mouseleave(function()
        {
          $('.badgeNotif').css(
          {
            'color':'',
            'transition': '1.2s',
            'background-color':'',
            'padding': '',
            'font-size':'',
          })
        })

        $('.navbar-default .navbar-nav>li>a.liNav, .dropdown-menu>li>a.liDrop, .bellSymbol').mouseleave(function()
        {
          $('.navbar-default .navbar-nav>li>a.liNav, .dropdown-menu>li>a.liDrop, .bellSymbol').css(
          {
            'background-color':'',
            'padding':'',
            'text-shadow':'',
            'color':'',
            'border-radius':'',
            'border-bottom':'',
            'transition':'1000ms'
          })
        })

        $('.imgHeader2').mouseleave(function()
        {
          $('.imgHeader2').css(
          {
            'width':'',
            'transition':'2000ms'
          })
        })




        $('.imgHeader1').click(function()
        {
            setInterval(function(){
              $('.imgHeader1').animate(
              {
                'left':'0px',
                'width':'+=100px'
              },500)
          },500)
        })

        $('.liNav').click(function()
        {
           $('.ulNavDropdown').slideToggle(1000);
           $(this).addClass('activeNav')
        })

        $( ".area1" ).eq(3).css({
          "background-color": "darkgreen",
          "cursor":"pointer",
          "opacity":'0.4'
        });

        $(".area1").eq(0).css(
        {
          'cursor':'pointer',
          'positon':'relative',
  
        })

        $(".area1").eq(1).css(
        {
          'cursor':'pointer',
          'background-color':'DarkMagenta',
          'positon':'relative',
  
        })

        $(".area1").eq(2).css(
        {
          'cursor':'pointer',
          'background-color':'GoldenRod ',
          'positon':'relative',
          'overflow':'hidden',
        })

        $(".h2Area3").css(
        {
          'color':'Cyan',
          'font-weight':'bold',
          'position':'absolute',
          'transform': 'translate(25%, -250%)',
          'z-index':'5'
        })

        $(".h2Area3").animate(
        {
          'top':'100px',
        },1000)

        setInterval(function()
        {
          $(".contentAboutTitle h1").animate(
          {
            'top':'90px',
            'left': '50%',
          },800)
        },0)
        $(".area1").eq(0).append('<center><h2 style="color:lightblue; font-weight:bold;">Toggle</h2></center>');
        $(".area1").eq(0).after('<div class="alert alert-success areaAlert"><h3 align="center"> This is area 1</h3> </div> ');

        $(".area1").eq(1).append('<center><h2 style="color:#dabcf6; font-weight:bold;">Double Click Fade in fade out function</h2></center>');
        $(".area1").eq(1).after('<div class="alert alert-success areaAlert1"><h3 align="center"> This is area 2</h3> </div> ');

        $(".area1").eq(2).after('<img src = "<?php echo base_url('assets/img/seki.jpg') ?>" class = "img-responsive imgArea3">');

        $(".area1").eq(3).append('<center><h2 style="color:#b3ffb3; font-weight:bold;">Back to normal</h2></center>');


        $(".imgArea3").css({
          'display':'none',
          'width':'100%',
          'height':'220px'
        })

        $(".areaAlert").css({
          'display':'none',
          'positon':'relative',
          'border':'0'
        })


        $(".areaAlert1").css({
          'display':'none',
          'positon':'relative',
          'border':'0'
        })

        $(".areaAlert1 h3").css({
          'color':'GreenYellow',
        })

        $(".area1").eq(1).dblclick(function()
        { 
          $('.areaAlert1').fadeIn(1000,function()
            {
              $('.areaAlert1').css(
              {
                'background-color':'black',
              })
            });
    

          setTimeout(function()
          {
            $('.areaAlert1').fadeOut(2000);

          },5000)

        })

        $( ".area1" ).eq(0).click(function() 
        {
 
        $( ".areaAlert" ).toggle(2000);
          
        });


        $(".area1").eq(2).mouseover(function()
        { 
          $('.imgArea3').fadeIn(1000);
    

          setTimeout(function()
          {
            $('.imgArea3').fadeOut(1500);

          },4000)

        })

        $(".area1").eq(3).click(function()
        { 
          setTimeout(function()
          {
           $(".area1").eq(3).fadeTo(2000, 1.0,function()
           {
            alert('Color back to normal');
           })
          },1000)

        })

         $('.titleWarning, .descWarning, .titleWarningUpdate, .descWarningUpdate').css(
          {
            'background-color': 'azure',
            'color':'red',
            'font-weight':'bold',
            'padding':'5px',
            'display':'none'
          })

         $('.titleSuccess, .descSuccess .titleSuccessUpdate, .descSuccessUpdate').css(
          {
            'background-color': 'black',
            'color':'blue',
            'font-weight':'bold',
            'padding':'5px',
          })

        // $('.btnInsert').click(function(e)
        // {
        //   e.preventDefault();
        //   var title = $('#title').val();
        //   var description = $('#descCharacter').val();

        //   if(title == "")
        //   {
        //     $('#title').fadeIn(2000);
        //     $('#title').text('Title must be filled');
        //   }

        //   else
        //   {
        //     $('#title').fadeIn(2000);
        //     $('#title').text('Title filled');
        //     $('#title').removeClass('.titleWarning');
        //     $('#title').addClass('.titleFilled');
        //     $('#title').text(title);
        //   }

        //   if(description == "")
        //   {
        //     $('#description').fadeIn(2000);
        //     $('#description').text('Description must be filled');
        //   }

        //   else
        //   {
        //     $('#description').fadeIn(2000);
        //     $('#description').text('Description filled');
        //     $('#description').removeClass('.descriptionWarning');
        //     $('#description').addClass('.descriptionFilled');
        //     $('#description').text(description);
        //   }

        //   return false;

        // })

        // Panggil ambilData();

        var app =
        {
        showErrorTitle:function(message)
        {
          $('.titleWarning').html(message).fadeIn(1000);
 
          setTimeout(function()
            {
            $('.titleWarning').fadeOut(1000);
            },5000)
        }, 

        showErrorDesc:function(message)
        {
          $('.descWarning').html(message).fadeIn(1000);

          setTimeout(function()
          {
          $('.descWarning').fadeOut(1000);
          },5000)
        }, 

        showErrorTitleUpdt: function(message)
        {
          $('.titleWarningUpdate').html(message).fadeIn(1000);
          setTimeout(function()
          {
            $('.titleWarningUpdate').fadeOut(1000);
          },5000)
        }, 

        showErrorDescUpdt:function(message)
        {
           $('.descWarningUpdate').html(message).fadeIn(1000);
          setTimeout(function()
          {
            $('.descWarningUpdate').fadeOut(1000);
          },5000)
        },

        showSuccess:function(message)
        {
           $('#pesan').html(message).fadeIn(1000);
            setTimeout(function()
            {
              $('#pesan').fadeOut(1000);
            },5000)
        },showSuccessUpdate:function(message)
        {
           $('#pesan').html(message).fadeIn("fast");
            setTimeout(function()
            {
              $('#pesan').fadeOut(1000);
            },5000)
        },show:function()
        {
          $.ajax(
          {
            type:'POST',
            url:'<?php echo site_url('Character/select_data') ?>',
            dataType: 'JSON',
            success:function(data)
            {
              // console.log(data);
              var baris ="";

              for(var i = 0; i < data.length; i++)
              {
                if(data.length>0)
                {
                   baris += '<tr>\
                  <td><p style="font-weight: bold; font-family: arial; color:DarkOrchid;" align="center">'+(i+1)+'</p></td>\
                  <td><p style="font-weight: bold; font-family: arial; color:DarkOrchid;">'+data[i].title_anime+'</p></td>\
                   <td><p style="font-weight: bold; font-family: arial; color:DarkOrchid;">'+data[i].desc_anime+'</p></td>\
                   <td><button type="button" class="btn btn-info goUpdate" dataID="'+data[i].id_anime+'" dataTitle="'+data[i].title_anime+'?>" dataDesc="'+data[i].desc_anime+'" data-toggle="modal" data-target="#myModalUpdate">Update</button></td>\
                   <td><button type="button" class="btn btn-warning btnDelete" dataDel="'+data[i].id_anime+'">Delete</button></td>\
                </tr>'

                  $('.tbodyCharacter').html(baris);
                  $('.tbodyCharacter').append('\
                    <tr>\
                    <td colspan = "5"><center><button type="button" class="btn btn-info btnShowMore">Show More</button></center></td>\
                    </tr>')
                }

                else
                {
                  $('.tbodyCharacter').append('\
                    <tr>\
                    <td colspan = "5"><center><button type="button" class="btn btn-info btnShowMore">No More</button></center></td>\
                    </tr>')
                }
              }

            }
          })
          }, showMore:function(e)
            {  
            e.preventDefault();
             var lastTr = $(".tbodyCharacter tr").attr("data");
              showMore = showMore + 4;
            $.ajax({
            url:'<?php echo site_url('Character/show_more') ?>',
            method:'POST',
            dataType:'html',
            data:
            {
             showMoreData: showMore
            },

            success :function(response)
            {
              console.log(response);
                if(showMore !="")
                {
                  $(".tbodyCharacter").html(response);
                 
                }
                if(showMore>=lastTr) 
                {
                  $(".btnShowMore").html('Data sudah tidak ada');
                 $('.btnShowMore').css({
                  'text-align':'center',
                  'background-color':'red',
                  'color': 'gold'
                 })
                }
            }
          })

          },
        showCount:function()
          {
            $.ajax(
            {
              type:'POST',
              url:'<?php echo site_url('Character/count_anime') ?>',
              dataType: 'JSON',
              success:function(data)
              {
                $('#countAnime').html(data);
              }
            })
          }, insert: function(e)
          {
            e.preventDefault();

            var idAnime = $("[name=idAnime]").val();
            var title = $("[name=title]").val();
            var description = $("#descCharacter").val();
            console.log(description);

            var errorTitle = null;
            var errorDesc = null;

            if(title == "")
            {
              errorTitle = "Title tidak boleh kosong";
            }
            else if(description == "")
            {
              errorDesc = "Description tidak boleh kosong";
            }

            if(errorTitle)
            {
              app.showErrorTitle(errorTitle);
              return false;
            }

            if(errorDesc)
            {
              app.showErrorDesc(errorDesc);
              return false;
            }

            
                $.ajax(
                {
                 url:'<?php echo site_url('Character/add_post'); ?>',
                 url2:'<?php echo site_url('Character/count_anime') ?>',
                 type:'POST',
                 data: 
                 {
                   IDAnime: idAnime, titleAnime:title, descAnime:description 
                 },
                 dataType: 'json',
                 success:function(hasil)
                 {
                  console.log(hasil);
                  
                    // Bersihkan input type
                    var idAnime = $("[name='idAnime']").val('');
                    var title = $("[name='title']").val('');
                    var description = $("#descCharacter").val('');
                    app.show();
                    app.showSuccess('Data berhasil diinput');
                    var count = $('#countAnime').html();
                    $('#countAnime').html(parseFloat(count) + 1);
                

                  // $('#title').fadeIn(2000);
                  // $('#title').text('Title filled');
                  // $('#title').removeClass('.titleWarning');
                  // $('#title').addClass('.titleFilled');
                  // $('#title').text(hasil.pesan);

                  // $('#descCharacter').fadeIn(2000);
                  // $('#descCharacter').text('Description filled');
                  // $('#descCharacter').removeClass('.descriptionWarning');
                  // $('#descCharacter').addClass('.descriptionFilled');
                  // $('#descCharacter').text(hasil.pesan);
           
                 }
                  
                })

          },delete:function(e)
          {
            e.preventDefault();
            
            var pesanDel = confirm("Are you sure you want to delete?");
            var id = $(this).attr('dataDel');
            console.log(id);

            if(pesanDel == true)
            {
               $.ajax(
                {
                 url:'<?php echo site_url('Character/delete_post'); ?>',
                 type:'POST',
                 data:
                 {
                  idDel:id
                 },
                 dataType: 'json',
                 success:function(data)
                 {
                  app.showSuccess('Data berhasil dihapus');
                  app.show();
                   var count = $('#countAnime').html();
                  $('#countAnime').html(parseFloat(count) - 1);
                  // $('#title').fadeIn(2000);
                  // $('#title').text('Title filled');
                  // $('#title').removeClass('.titleWarning');
                  // $('#title').addClass('.titleFilled');
                  // $('#title').text(hasil.pesan);

                  // $('#descCharacter').fadeIn(2000);
                  // $('#descCharacter').text('Description filled');
                  // $('#descCharacter').removeClass('.descriptionWarning');
                  // $('#descCharacter').addClass('.descriptionFilled');
                  // $('#descCharacter').text(hasil.pesan);
           
                 }
                  
                })
            }
          }, showUpdate:function(e)
          {
            e.preventDefault();

            var id = $(this).attr('dataID');
            var title = $(this).attr('dataTitle');
            var description = $(this).attr('dataDesc');

            $.ajax(
            {
              url:'<?php echo site_url('Character/ambilID') ?>',
              type:'POST',
              dataType:'json',
              data:
              {
                idAnime: id
              },success:function(hasil)
              {
                console.log(hasil);

               $("#idAnimeUpdate").val(hasil.id_anime);
               $('#titleUpdate').val(hasil.title_anime);
               $('#descCharacterUpdate').val(hasil.desc_anime);

              }
            })

          },update:function(e)
          {
            e.preventDefault();

            var id = $('#idAnimeUpdate').val();
            var title = $('#titleUpdate').val(); 
            var desc = $('#descCharacterUpdate').val();

            var errorTitle = null;
            var errorDesc = null;

            if(title == "")
            {
              errorTitle = "Title tidak boleh kosong";
            }
            else if(desc == "")
            {
              errorDesc = "Description tidak boleh kosong";
            }

            if(errorTitle)
            {
              app.showErrorTitleUpdt(errorTitle);
              return false;
            }

            if(errorDesc)
            {
              app.showErrorDescUpdt(errorDesc);
              return false;
            }

            $.ajax(
            {
              url:'<?php echo site_url('Character/update_post') ?>',
              type:'POST',
              dataType:'json',
              data:
              {
                  idUpdate:id, titleUpdate:title, descUpdate:desc
              },
              success:function(hasil)
              {
                  console.log(hasil);
                    // Bersihkan input type
                    $('#myModalUpdate').hide();
                    $("#idAnimeUpdate").val('');
                    $('#titleUpdate').val('');
                    $('#descCharacterUpdate').val('');
                    
                    location.reload();
                    app.show();
                    app.showSuccessUpdate('Data berhasil diupdate');
          
              }
            })
          }

        }
    
        // Karena berada di dalam modal
        app.show();
        app.showCount();
        $(document).on('click','#actionInsert', app.insert);
        $(document).on('click', '.btnDelete', app.delete);
        $(document).on('click', '.goUpdate', app.showUpdate);
        $(document).on('click', '.btnUpdate', app.update);
        $(document).on('click', '.btnShowMore', app.showMore);
       
      })
    </script>

