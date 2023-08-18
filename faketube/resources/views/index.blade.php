<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Channel</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    </head>
    <body>
        <div class="container mt-2">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>Channel</h2>
                    </div>
                    <div class="pull-right mb-2">
                        <a class="btn btn-success" href="{{ route('channels.create') }}"> Create Channel</a>
                    </div>
                </div>
            </div>
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Channel Name</th>
                    <th>Description</th>
                    <th>URL</th>
                    <th width="230px">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($channels as $channel)
                    <tr>
                        <td>{{$channel->ChannelID}}</td>
                        <td>{{$channel->ChannelName}}</td>
                        <td>{{$channel->Description}}</td>
                        <td>{{$channel->URL}}</td>
                        <td>

                            <a class="btn btn-primary" href="{{ route('channels.show', $channel->ChannelID)  }}">Detail</a>
                            <a class="btn btn-primary" href="{{ route('channels.edit', $channel->ChannelID) }}">Edit</a>
                            <a type="button" class="btn btn-danger text-light" data-bs-toggle="modal" data-bs-target="#{{$channel->ChannelID}}">Delete</a>

                            <form action="{{ route('channels.destroy',$channel->ChannelID) }}" method="post">
                                <div class="modal fade" id="{{$channel->ChannelID}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    @csrf
                                    @method('DELETE')
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Company</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure to delete channel with id: {{$channel->ChannelID}}?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        {{--    {!! $companies->links() !!}--}}
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    </body>
</html>
