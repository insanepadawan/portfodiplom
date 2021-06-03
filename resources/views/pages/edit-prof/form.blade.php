<div class="form-group {{ $errors->has('surname') ? 'has-error' : ''}}">
    <label for="surname" class="control-label">{{ 'Фамилия' }}</label>
    <textarea class="form-control" rows="2" name="surname" type="textarea" id="title_ru" >{{ isset($faqs->title_ru) ? $faqs->title_ru : ''}}</textarea>
    {!! $errors->first('surname', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('city') ? 'has-error' : ''}}">
    <label for="city" class="control-label">{{ 'Кала' }}</label>
    <textarea class="form-control" rows="2" name="city" type="textarea" id="title_ru" >{{ isset($faqs->title_ru) ? $faqs->title_ru : ''}}</textarea>
    {!! $errors->first('city', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('phone') ? 'has-error' : ''}}">
    <label for="phone" class="control-label">{{ 'Телефон' }}</label>
    <input class="form-control" id="phone" type="text" rel="phone" name="phone" value="{{ isset($faqs->phone) ? $faqs->phone : '' }}">
    {!! $errors->first('phone', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('characteristic') ? 'has-error' : ''}}">
    <label for="characteristic" class="control-label">{{ 'Мінездеме' }}</label>
    <textarea class="form-control" rows="5" rel="editor" name="characteristic" type="textarea" id="characteristic" >{{ isset($faqs->characteristic) ? $faqs->characteristic : ''}}</textarea>
    {!! $errors->first('characteristic', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('bday') ? 'has-error' : ''}}">
    <label for="bday" class="control-label">{{ 'Туган кун' }}</label>
    <input class="form-control" id="bday" type="text" autocomplete="off" rel="daterange" name="bday" value="{{ isset($faqs->bday) ? $faqs->bday : '' }}">
    {!! $errors->first('bday', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('website') ? 'has-error' : ''}}">
    <label for="website" class="control-label">{{ 'Website' }}</label>
    <input class="form-control" id="website" type="text" name="website" value="{{ isset($faqs->website) ? $faqs->website : '' }}">
    {!! $errors->first('website', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('portfolio') ? 'has-error' : ''}}">
    <label for="portfolio" class="control-label">{{ 'Портфолио аты' }}</label>
    <input class="form-control" id="portfolio" type="text" name="portfolio" value="{{ isset($faqs->portfolio) ? $faqs->portfolio : '' }}">
    {!! $errors->first('portfolio', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('portfolio_link') ? 'has-error' : ''}}">
    <label for="portfolio_link" class="control-label">{{ 'Портфолио ссылкасы' }}</label>
    <input class="form-control" id="portfolio_link" type="text" name="portfolio_link" value="{{ isset($faqs->portfolio_link) ? $faqs->portfolio_link : '' }}">
    {!! $errors->first('portfolio_link', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('portfolio_image') ? 'has-error' : ''}}">
    <label for="blah-file" class="control-label">{{ 'Портфолио суретi' }}</label>
    <input style="opacity: 0; position:absolute; top: 0; left: 0" id="blah-file" name="portfolio_image" type="file" accept="image/jpeg,image/png,image/jpg">
    <img style="max-width: 100%; cursor: pointer; object-fit: contain; max-height: 15rem" id="blah" src=" {{ isset($workers->portfolio_image) ? url('i/photos/'.$workers->portfolio_image) : url('/i/default.png') }}" alt="your image">
    {!! $errors->first('portfolio_image', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Обновить' : 'Создать' }}">
</div>
