<div class="box-body">
    @include('common.errors')
    @if($is_admin)
    <div class="form-group">
        {!! Form::label('user_id', 'Сотрудник') !!}
        {!! Form::select('user_id', $staff, $client->user_id, ['class' => 'form-control select2', 'id' => 'user_id', 'placeholder' => 'Выберите сотрудника']) !!}
    </div>
    @endif
    <div class="form-group">
        {!! Form::label('name', 'Название компании *') !!}
        {!! Form::text('name', $client->name, ['id' => 'name', 'class' => 'form-control', 'placeholder' => 'Введите название компании', 'require' => 'require']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('phone_work', 'Телефон (рабочий) *') !!}
        {!! Form::text('phone_work', $client->phone_work, ['class' => 'form-control phone', 'id' => 'phone_work', 'placeholder' => 'Введите рабочий телефон', 'require' => 'require']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('phone_mobile', 'Телефон (мобильный)') !!}
        {!! Form::text('phone_mobile', $client->phone_mobile, ['class' => 'form-control phone', 'id' => 'phone_mobile', 'placeholder' => 'Введите мобильный телефон']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('phone_other', 'Дополнительный телефон') !!}
        {!! Form::text('phone_other', $client->phone_other, ['class' => 'form-control', 'id' => 'phone_other', 'placeholder' => 'Введите дополнительный телефон']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('phone_other2', 'Дополнительный телефон 2') !!}
        {!! Form::text('phone_other2', $client->phone_other2, ['class' => 'form-control', 'id' => 'phone_other2', 'placeholder' => 'Введите дополнительный телефон 2']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('address', 'Адрес') !!}
        {!! Form::text('address', $client->address, ['class' => 'form-control', 'id' => 'address', 'placeholder' => 'Введите адрес']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('fio', 'Контактное лицо *') !!}
        {!! Form::text('fio', $client->fio, ['class' => 'form-control', 'id' => 'fio', 'placeholder' => 'Введите контактное лицо', 'require' => 'require']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('job', 'Должность *') !!}
        {!! Form::text('job', $client->job, ['class' => 'form-control', 'id' => 'job', 'placeholder' => 'Введите должность', 'require' => 'require']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('birthday', 'День рождения') !!}
        {!! Form::text('birthday', $client->birthday !== null ? $client->birthday->format('d.m.Y') : '', ['class' => 'form-control datepicker', 'id' => 'birthday', 'placeholder' => 'Введите день рождения']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('email', 'E-mail *') !!}
        {!! Form::email('email', $client->email, ['class' => 'form-control', 'id' => 'email', 'placeholder' => 'Введите e-mail', 'require' => 'require']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('events', 'Проводимые мероприятия') !!}
        {!! Form::textarea('events', $client->events, ['class' => 'form-control', 'id' => 'events', 'placeholder' => 'Введите проводимые мероприятия']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('site', 'Адрес сайта') !!}
        {!! Form::text('site', $client->site, ['class' => 'form-control', 'id' => 'site', 'placeholder' => 'Введите адрес сайта']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('description', 'Краткое описание') !!}
        {!! Form::textarea('description', $client->description, ['class' => 'form-control', 'id' => 'description', 'placeholder' => 'Введите краткое описание']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('hobby', 'Хобби') !!}
        {!! Form::textarea('hobby', $client->hobby, ['class' => 'form-control', 'id' => 'hobby', 'placeholder' => 'Введите хобби']) !!}
    </div>
</div>

<div class="box-footer">
    {!! Form::submit('Сохранить', ['class' => 'btn btn-primary']) !!}
</div>