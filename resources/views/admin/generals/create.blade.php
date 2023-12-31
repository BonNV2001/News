<x-admin.layout>
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Generals</h1>
            <x-admin.breadcrumb :items="[
                ['label' => 'Generals'],
            ]"/>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-12">
                    <div class="row">

                        <!-- General Form Elements -->
                        <form method="POST" action="/admin/generals" enctype="multipart/form-data" id="generalsCreateForm">
                            @csrf

                            <x-admin.form.input name="contact_name" type="text" label="contact name" :value="old('contact_name')">
                                <x-admin.required-icon />
                            </x-admin.form.input>

                            <x-admin.form.input name="email" type="text" label="email" :value="old('email')">
                                <x-admin.required-icon />
                            </x-admin.form.input>

                            <x-admin.form.input name="phone" type="text" label="phone" :value="old('phone')">
                                <x-admin.required-icon />
                            </x-admin.form.input>

                            <x-admin.form.input name="address" type="text" label="address" :value="old('address')">
                                <x-admin.required-icon />
                            </x-admin.form.input>

                            <x-admin.form.textarea name="description" id="editor" label="description">
                                <x-admin.required-icon />
                                <x-slot name="content">{{ old('description') }}</x-slot>
                            </x-admin.form.textarea>

                            <x-admin.form.input name="logo" type="file" label="Favicon (32x32)" >
                                <x-admin.required-icon />
                            </x-admin.form.input>

                            <x-admin.form.input name="fb_link" type="text" label="FB link" :value="old('fb_link')"/>
                            <x-admin.form.input name="instagram_link" type="text" label="instagram link" :value="old('instagram_link')"/>
                            <x-admin.form.input name="twitter_link" type="text" label="twitter link" :value="old('twitter_link')"/>
                            <x-admin.form.input name="linkedin_link" type="text" label="linkedIn link" :value="old('linkedin_link')"/>
                            <x-admin.form.input name="youtube_link" type="text" label="youtube link" :value="old('youtube_link')"/>
                            <x-admin.form.input name="vimeo_link" type="text" label="vimeo link" :value="old('vimeo_link')"/>

                            <x-admin.form.button route="{{ route('dashboard') }}">Create</x-admin.form.button>

                        </form><!-- End General Form Elements -->
                    </div>
                </div><!-- End Left side columns -->
            </div>
        </section>
    </main><!-- End #main -->
</x-admin.layout>
