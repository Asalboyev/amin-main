@foreach($categories as $category)
    <a href="{{ route('catalog_products', $category->id) }}" class="category-item">
        <div class="category-item__ico">
            @php($category['icon'] = json_decode($category->icon))
            <img src="{{ Voyager::image( $category['icon'][0]->download_link) }}" alt="ico">
        </div>
        <div class="category-item__name">
            <p>{{  $category['name_'.\App::getLocale()]  }}</p>
            <svg width="228" height="118" viewBox="0 0 228 118" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M214.735 54.3934C214.842 53.7143 214.928 53.0352 214.971 52.3348C215.832 39.5801 206.064 28.5656 193.133 27.7167C189.346 27.462 185.732 28.1411 182.461 29.4994C176.136 18.018 164.195 9.88971 150.016 8.95592C145.691 8.68003 141.474 9.08325 137.472 10.1019C133.557 4.45674 127.145 0.573006 119.701 0.084887C110.858 -0.488122 102.811 3.84128 98.3572 10.7386C94.549 9.23181 90.4395 8.25557 86.1149 7.97968C70.1073 6.91855 55.6704 15.3227 48.4197 28.3533C47.1503 28.0562 45.8378 27.8228 44.5038 27.7379C31.573 26.889 20.4065 36.524 19.5458 49.2788C19.5243 49.491 19.5458 49.7032 19.5458 49.9367C9.06778 51.6769 0.784299 60.2933 0.0527708 71.1805C-0.80785 83.9352 8.9602 94.9498 21.891 95.7987C24.645 95.9897 27.2914 95.6713 29.7872 94.971C32.7133 103.63 40.6741 110.124 50.4852 110.761C57.4347 111.227 63.8463 108.638 68.4506 104.182C75.142 111.418 84.5873 116.236 95.2805 116.936C105.565 117.615 115.204 114.39 122.691 108.553C126.263 111.312 130.695 113.074 135.558 113.392C143.346 113.902 150.468 110.591 155.115 105.115C158.945 106.749 163.14 107.768 167.551 108.065C178.933 108.808 189.475 104.5 196.92 97.0932C198.835 97.7511 200.857 98.1756 202.966 98.3242C215.897 99.173 227.063 89.538 227.924 76.7832C228.569 67.0633 223.061 58.3833 214.735 54.3934Z" fill="currentColor"/>
            </svg>
        </div>
    </a>
@endforeach
