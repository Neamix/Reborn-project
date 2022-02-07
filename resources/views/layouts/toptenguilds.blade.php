@isset($TopTenGuildsProvider)
    <div class="card mt-3">
        <div class="card-header">
            <div class="font-weight-light font-weight-bold p-2">{{ __('sidebar.topten-guilds.title') }}</div>
        </div>
        <div class="card-body">
            <table class="table table-hover table-striped mt-2">
                <thead>
                <tr>
                    <th>#</th>
                    <th>{{__('sidebar.topten-guilds.name')}}</th>
                    <th>{{__('sidebar.topten-guilds.points')}}</th>
                </tr>
                </thead>
                <tbody>
                @forelse($TopTenGuildsProvider as $count => $guild)
                    <tr>
                        <td>{{$count+1}}</td>
                        <td>{{$guild->Name}}</td>
                        <td>{{$guild->ItemPoints}}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">{{ __('sidebar.topten-guilds.empty') }}</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endisset
