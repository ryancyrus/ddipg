@extends('app')

@section('content')

<table class="responsive-table">
	
	
	<caption style="text-align:center"><h3 class="header">Result</h3></caption>

	<caption style="text-align:center"><h3>{{ Auth::user()->identif}}</h3></caption>

	
	<thead>
		
		<th>
			Subject 01
		</th>
		<th>
			Subject 02
		</th>
		<th>
			Subject 03
		</th>
		<th>
			Subject 04
		</th>
		<th>
			Subject 05
		</th>
		<th>
			Subject 06
		</th>
		<th>
			Subject 07
		</th>
		<th>
			Subject 08
		</th>
		<th>
			Subject 09
		</th>
		<th>
			Subject 10
		</th>
		<th>
			Subject 11
		</th>
		<th>
			SGPA
		</th>
		<th>
			CGPA
		</th>
		
	</thead>
	
	
	<tbody>
		@foreach($results as $result)
		<tr>
			<td>
				{{$result->subject_1}}
			</td>
			<td>
				{{$result->subject_2}}
			</td>
			<td>
				{{$result->subject_3}}
			</td>
			<td>
				{{$result->subject_4}}
			</td>
			<td>
				{{$result->subject_5}}
			</td>
			<td>
				{{$result->subject_6}}
			</td>
			<td>
				{{$result->subject_7}}
			</td>
			<td>
				{{$result->subject_8}}
			</td>
			<td>
				{{$result->subject_9}}
			</td>
			<td>
				{{$result->subject_10}}
			</td>
			<td>
				{{$result->subject_11}}
			</td>
			<td>
				{{$result->sgpa}}
			</td>
			<td>
				{{$result->cgpa}}
			</td>


		</tr>
		@endforeach	
		
	</tbody> 
	
	
	
	
</table>





@stop