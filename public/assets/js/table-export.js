var TableExport = function() {
	"use strict";
	//function to initiate HTML Table Export
	var runTableExportTools = function() {
		$(".export-pdf").on("click", function(e) {
			e.preventDefault();
			var exportTable = $(this).data("table");
			var ignoreColumn = $(this).data("ignorecolumn");
			$(exportTable).tableExport({
				type: 'pdf',
				pdfFontSize: 10,
				escape: 'false'
			});
		});
		$(".export-excel").on("click", function(e) {
			e.preventDefault();
			var exportTable = $(this).data("table");
			$(exportTable).tableExport({
				type: 'excel',
				escape: 'false'
			});
		});
		$(".export-doc").on("click", function(e) {
			e.preventDefault();
			var exportTable = $(this).data("table");
			var ignoreColumn = $(this).data("ignorecolumn");
			$(exportTable).tableExport({
				type: 'doc',
				escape: 'false',
				ignoreColumn: '['+ignoreColumn+']'
			});
		});
		$(".export-csv").on("click", function(e) {
			e.preventDefault();
			var exportTable = $(this).data("table");
			var ignoreColumn = $(this).data("ignorecolumn");
			$(exportTable).tableExport({
				type: 'csv',
				escape: 'false',
				ignoreColumn: '['+ignoreColumn+']'
			});
		});
		$(".export-txt").on("click", function(e) {
			e.preventDefault();
			var exportTable = $(this).data("table");
			var ignoreColumn = $(this).data("ignorecolumn");
			$(exportTable).tableExport({
				type: 'txt',
				escape: 'false',
				ignoreColumn: '['+ignoreColumn+']'
			});
		});
	};
	
	//function to initiate DataTable
	//DataTable is a highly flexible tool, based upon the foundations of progressive enhancement,
	//which will add advanced interaction controls to any HTML table
	//For more information, please visit https://datatables.net/
	var runDataTable_example2 = function() {

		var oTable = $('#sample-table-2').dataTable({
			"aoColumnDefs" : [{
				"aTargets" : [0]
			}],
			"oLanguage" : {
				"sLengthMenu" : "Hiển thị _MENU_ (hàng)",
				"sSearch" : "",
				"oPaginate" : {
					"sPrevious" : "",
					"sNext" : ""
				}
			},
			"aaSorting" : [[1, 'asc']],
			"aLengthMenu" : [[15, 20, 25, 50, 100, -1], [15, 20, 25, 50, 100, "All"] // change per page values here
			],
			// set the initial value
			"iDisplayLength" : 20,
		});
		$('#sample-table-2_wrapper .dataTables_filter input').addClass("form-control input-sm").attr("placeholder", "Tìm kiếm nhanh...");
		// modify table search input
		$('#sample-table-2_wrapper .dataTables_length select').addClass("m-wrap small");
		// modify table per page dropdown
		$('#sample-table-2_wrapper .dataTables_length select').select2();
		// initialzie select2 dropdown
		$('#sample-table-2_column_toggler input[type="checkbox"]').change(function() {
			/* Get the DataTables object again - this is not a recreation, just a get of the object */
			var iCol = parseInt($(this).attr("data-column"));
			var bVis = oTable.fnSettings().aoColumns[iCol].bVisible;
			oTable.fnSetColumnVis(iCol, ( bVis ? false : true));
		});
	};
	return {
		//main function to initiate template pages
		init : function() {
			runTableExportTools();
			runDataTable_example2();
		}
	};
}();
