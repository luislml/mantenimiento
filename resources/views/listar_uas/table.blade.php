<div class="table-responsive">
    <table class="table" id="listarUas-table">
        <thead>
            <tr>
                <th>Unidades</th>
        <th>Areas</th>
        <th>Sub Areas</th>
                
            </tr>
        </thead>
        <tbody>
    <ol>
        @foreach($unidad as $unidades)
        
            <li>unidad-------------------------{!! $unidades->nombre !!}</li>
                <ol list-style = "none">
                @foreach($unidades->areas as $area)
                
                    <li >Area-------------------{!! $area->nombre !!}</li>

                    <ul>
                    @foreach($area->sub_areas as $sub_area)

                        <li>Sub Area-----------{!! $sub_area->nombre !!}</li>

                    @endforeach
                    </ul>
                    
                
                @endforeach
                </ol>          
            
    
        @endforeach
    </ol>


       
        
        </tbody>
    </table>
</div>
