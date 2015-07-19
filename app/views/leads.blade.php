@extends('layouts.master')

@section('main')

<div class="leads-view"></div>

@endsection

@section('js')
<script type="text/template" id="leadsTemplate">
<table>
	<tr>
		<td>ID</td>
		<td>Name</td>
		<td>Phone</td>
		<td>Email</td>
		<td>Address</td>
		<td>City</td>
		<td>State</td>
		<td>Zip</td>
		<td>Status</td>
		<td>Note</td>
	</tr>
</table>
</script>

<script type="text/javascript">

var LD {
	ViewActions:function(){
	$(".leads-view").html($("#leadsTemplate");
}
}





</script>
@stop
