@extends('layouts.app')

@section('content')
    <section class="post">
        <div>
            <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <h1>Tell us more about this product</h1>
                <label for="prodname">Title</label>
                <input type="text" placeholder="" name="title" id="prodname">
                <label for="desc">Body</label>
                <input type="text" placeholder="" name="body" id="desc">
                <select-tags-component url="post"></select-tags-component>
                <div class="picss">
                    <div>
                        <label for="">Photo project</label>
                        <div class="svg">
                            <svg width="108" onclick="document.getElementById('image').click();" height="90" viewBox="0 0 108 90" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M98.2759 10H1.72414C0.772414 10 0 10.7774 0 11.7391V88.2609C0 89.2226 0.772414 90 1.72414 90H98.2759C99.2276 90 100 89.2226 100 88.2609V11.7391C100 10.7774 99.2276 10 98.2759 10ZM96.5517 86.5217H3.44828V13.4783H96.5517V86.5217Z" fill="black" fill-opacity="0.2"/>
                                <path d="M27.5862 48.5009C32.881 48.5009 37.1879 44.1565 37.1879 38.8174C37.1879 33.4748 32.881 29.1304 27.5862 29.1304C22.2914 29.1304 17.9845 33.4748 17.9845 38.8157C17.9845 44.1565 22.2914 48.5009 27.5862 48.5009ZM27.5862 32.6087C30.9793 32.6087 33.7397 35.3948 33.7397 38.8157C33.7397 42.2365 30.9793 45.0226 27.5862 45.0226C24.1931 45.0226 21.4328 42.2383 21.4328 38.8174C21.4328 35.3965 24.1931 32.6087 27.5862 32.6087Z" fill="black" fill-opacity="0.2"/>
                                <path d="M12.069 79.5652C12.4724 79.5652 12.8793 79.4226 13.2069 79.1322L41.3328 54.1548L59.0948 72.0696C59.769 72.7496 60.8586 72.7496 61.5328 72.0696C62.2069 71.3896 62.2069 70.2904 61.5328 69.6104L53.2448 61.2504L69.0741 43.7652L88.4897 61.7183C89.1914 62.367 90.2828 62.3183 90.9259 61.6104C91.569 60.9026 91.5224 59.8017 90.819 59.153L70.1293 40.0226C69.7914 39.7113 69.3414 39.5565 68.8879 39.567C68.431 39.5878 68 39.7913 67.6914 40.1322L50.8052 58.7878L42.6276 50.5391C41.9828 49.8904 40.9517 49.8574 40.269 50.4626L10.9293 76.52C10.2138 77.1548 10.1448 78.2539 10.7741 78.9756C11.1155 79.367 11.5914 79.5652 12.069 79.5652Z" fill="black" fill-opacity="0.2"/>
                                <circle cx="98" cy="10" r="10" fill="#CCCCCC"/>
                                <path d="M102.107 9.10714H99.0714C98.9728 9.10714 98.8929 9.02719 98.8929 8.92857V5.89286C98.8929 5.39978 98.4931 5 98 5C97.5069 5 97.1071 5.39978 97.1071 5.89286V8.92857C97.1071 9.02719 97.0272 9.10714 96.9286 9.10714H93.8929C93.3998 9.10714 93 9.50692 93 10C93 10.4931 93.3998 10.8929 93.8929 10.8929H96.9286C97.0272 10.8929 97.1071 10.9728 97.1071 11.0714V14.1071C97.1071 14.6002 97.5069 15 98 15C98.4931 15 98.8929 14.6002 98.8929 14.1071V11.0714C98.8929 10.9728 98.9728 10.8929 99.0714 10.8929H102.107C102.6 10.8929 103 10.4931 103 10C103 9.50692 102.6 9.10714 102.107 9.10714Z" fill="white"/>
                            </svg>
                            <h5>724x543<br> png | jpg | Max 5MB</h5>
                            <input name="image" id="image" style="display: none;" type="file">
                        </div>
                    </div>
                    <button>Update</button>
                </div>
            </form>
        </div>
    </section>
@endsection
