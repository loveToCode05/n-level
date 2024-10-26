<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom styles for category tree */
        .category-tree ul {
            list-style-type: none;
            padding-left: 20px;
        }

        .category-tree li {
            padding: 8px 0;
            position: relative;
        }

        .category-tree li::before {
            content: '';
            position: absolute;
            top: 0;
            left: -15px;
            border-left: 2px solid #ddd;
            border-bottom: 2px solid #ddd;
            height: 20px;
            width: 15px;
        }

        .category-tree li::after {
            content: '';
            position: absolute;
            top: 20px;
            left: -15px;
            border-left: 2px solid #ddd;
            height: 100%;
        }

        .category-tree li:last-child::after {
            display: none;
        }

        .category-tree a {
            text-decoration: none;
            color: #007bff;
            font-weight: 500;
        }

        .category-tree a:hover {
            color: #0056b3;
        }

        .category-badge {
            background-color: #6c757d;
            color: white;
            padding: 3px 8px;
            border-radius: 20px;
            font-size: 0.8rem;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center mb-4">Comments Tree</h2>

                <div class="category-tree">
                    {{-- <ul>
                        @foreach ($categories as $category)
                            <li>
                                <a href="#">{{ $category->name }}</a>
                                @if ($category->children->isNotEmpty())
                                    <ul>
                                        @include('category_tree',['categories'=>$category->children])
                                      
                                    </ul>
                                @endif
                            </li>
                        @endforeach
                    </ul> --}}

                 @foreach($comments as $category)
                 <ul>
                     
                    <li>
                        
                        <a href="#">{{$category->name}}</a>
                        @if($category->children->isNotEmpty())
                        <ul>
                            @include('category_tree',['categories'=>$category->children])
                        </ul>
                        @endif
                        
                      
                    </li>
           
            </ul>
                 @endforeach
                   
                    
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>