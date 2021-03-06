{{--
    Copyright 2015 ppy Pty. Ltd.

    This file is part of osu!web. osu!web is distributed with the hope of
    attracting more community contributions to the core ecosystem of osu!.

    osu!web is free software: you can redistribute it and/or modify
    it under the terms of the Affero GNU General Public License version 3
    as published by the Free Software Foundation.

    osu!web is distributed WITHOUT ANY WARRANTY; without even the implied
    warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
    See the GNU Affero General Public License for more details.

    You should have received a copy of the GNU Affero General Public License
    along with osu!web.  If not, see <http://www.gnu.org/licenses/>.
--}}
@extends('master', [
    'titleAppend' => trans('beatmaps.discussions.show.title', [
        'title' => $beatmapset->title,
        'mapper' => $beatmapset->user->username ?? '?',
    ]),
    'body_additional_classes' => 'osu-layout--body-ddd',
])

@section('content')
    <div class="js-react--beatmap-discussions"></div>
@endsection

@section ("script")
    @parent

    <script id="json-beatmapset-discussion" type="application/json">
        {!! json_encode($initialData) !!}
    </script>

    <script src="{{ elixir("js/react/beatmap-discussions.js") }}" data-turbolinks-track="reload"></script>
@endsection
