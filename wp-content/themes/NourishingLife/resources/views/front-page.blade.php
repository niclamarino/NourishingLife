@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  <section class="homepage-hero min-h-screen">
    <div class="outer-container flex">
      <div class="bg-white p-5">
        Welcome to the NLHC.  We are experts in helping to restore the body’s natural power to self-heal.  If you are feeling tapped out, then our work is to help you reclaim that vitality.  If stress, toxins, or infections have overtaken your body’s innate healing capacity, our work is to guide and support your journey to release those disease-causing burdens, and re-build what has been depleted, blocked, or damaged.
      </div>
    </div>
  </section>

  <section class="homepage-artwork">
    <div class="container section-padding">
      <div class="flex flex-col lg:flex-row lg:-mx-10 items-center">
        <div class="lg:px-10 lg:w-1/2">
          <img class="mx-auto w-full rounded-image" src="<?php echo get_site_url(); ?>/wp-content/themes/NourishingLife/resources/assets/images/specialized.jpg" alt="{{ get_bloginfo('name', 'display') }}">
        </div>
        <div class="lg:px-10 lg:w-1/2">
            <h2>Specialized</h2>
            <p>We specialize in Lyme disease, auto-immune illness, and other chronic inflammatory and degenerative conditions.</p>
            <a class="btn" href="#">Read more</a>
        </div>
      </div>
    </div>
  </section>

  <div class="outer-container">
    @include('partials.testimonials')
    @include('partials.newsletter-subcription')
  </div>

  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif

  @while (have_posts()) @php the_post() @endphp
    @include('partials.content-'.get_post_type())
  @endwhile

  {!! get_the_posts_navigation() !!}
@endsection
