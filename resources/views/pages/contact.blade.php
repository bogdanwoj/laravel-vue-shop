@extends('layouts.frontend')
@section('styles')

@endsection

@section('content')
    <Contact/>

@endsection
<script>
    import Contact from "../../js/components/Contact";
    export default {
        components: {Contact}
    }
</script>
