
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="{{ asset('Backend/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('Backend/js/main.js') }}"></script>

    <script src="{{ asset('Backend/js/text-editor.js') }}"></script>
    <!-- <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script> -->

    <script>
        // $(document).ready(function () {
        //     $("#all-articles-table").DataTable({
        //         aLengthMenu: [
        //             [5, 10, 25, -1],
        //             [5, 10, 25, "All"],
        //         ],
        //         iDisplayLength: 5,
        //     });

        // });

        // $(function () {
        //     $(".myDataTable").each(function () {
        //         var nmtTable = $(this);
        //         var nmtHeadRow = nmtTable.find("thead tr");
        //         nmtTable.find("tbody tr").each(function () {
        //             var curRow = $(this);
        //             for (var i = 0; i < curRow.find("td").length; i++) {
        //                 var rowSelector = "td:eq(" + i + ")";
        //                 var headSelector = "th:eq(" + i + ")";
        //                 curRow
        //                     .find(rowSelector)
        //                     .attr("data-title", nmtHeadRow.find(headSelector).text());
        //             }
        //         });
        //     });
        // });



        // $('.wizard-dropdowns ul li').hover(function(){
        //     $(this).addClass("selected", 3000);
        // }, function(){
        //     $(this).removeClass("selected", 3000);
        // });


        $('.wizard-dropdowns ul li').on('mouseenter', function() {
            $(this).addClass("selected");
        });
        $('.wizard-dropdowns ul li').on('mouseleave', function() {
            $(this).removeClass("selected");

        });




        const options = {
            modules: {
                toolbar: [[{ font: [] }, { size: [] }], ['bold', 'italic', 'underline', 'strike'], [{ color: [] }, { background: [] }], [{ script: 'super' }, { script: 'sub' }], [{ header: '1' }, { header: '2' }, 'blockquote', 'code-block'], [{ list: 'ordered' }, { list: 'bullet' }, { indent: '-1' }, { indent: '+1' }], ['direction', { align: [] }], ['link', 'image', 'video', 'formula'], ['clean']],
            },
            theme: 'snow',
        };
        const editor = new Quill('#editor', options);
        const editor2 = new Quill('#editor2', options);
        const editor3 = new Quill('#editor3', options);
        const editor4 = new Quill('#editor4', options);
        const editor5 = new Quill('#editor5', options);
        const editor6 = new Quill('#editor6', options);

        const editor7 = new Quill('#editor-comment', options);
        const editor8 = new Quill('#editor-addArticle', options);
        const editor9 = new Quill('#editor-addArticle-21', options);
        const editor10 = new Quill('#is-editer-1', options);
        const editor11 = new Quill('#is-editer-2', options);
        const editor12 = new Quill('#is-editer-3', options);
        const editor13 = new Quill('#is-editer-4', options);
        const editor14 = new Quill('#is-editer-5', options);
        const editor15 = new Quill('#is-editer-6', options);
        const editor16 = new Quill('#is-editer-7', options);
        const editor17 = new Quill('#is-editer-8', options);
        const editor18 = new Quill('#is-editer-9', options);
        const editor19 = new Quill('#is-editer-10', options);
        const editor20 = new Quill('#is-editer-11', options);
        const editor21 = new Quill('#is-editer-12', options);
        const editor22 = new Quill('#is-editer-13', options);
        const editor23 = new Quill('#is-editer-14', options);
        const editor24 = new Quill('#is-editer-15', options);
        const editor25 = new Quill('#is-editer-16', options);

        const editor231 = new Quill('#is-editer-141', options);
        const editor241 = new Quill('#is-editer-151', options);
        const editor251 = new Quill('#is-editer-161', options);

        const editor351 = new Quill('#is-editer-251', options);

        const editor233 = new Quill('#is-editer-314', options);
        const editor243 = new Quill('#is-editer-315', options);
        const editor253 = new Quill('#is-editer-316', options);

        const editor2331 = new Quill('#is-editer-414', options);
        const editor2431 = new Quill('#is-editer-415', options);
        const editor2531 = new Quill('#is-editer-416', options);
        const editor2631 = new Quill('#is-editer-417', options);

        const editor400 = new Quill('#is-editer-400', options);
        const editor401 = new Quill('#is-editer-401', options);

    </script>
