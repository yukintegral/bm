import React, { useEffect, useState } from 'react'
import { Helmet } from 'react-helmet'
import { useLocation } from 'react-router-dom'
import queryString from 'query-string'
import { Link } from 'react-router-dom'
import axios from 'axios'

const Search = () => {
  const location = useLocation()
  const [posts, setPosts] = useState([])

  const pathName = `posts${location.search}`
  const fetchURL = `http://localhost:3001/${pathName}`

  useEffect(() => {
    axios.get(fetchURL).then(response => {
      console.log(response.data)
      setPosts(response.data)
    })
  }, [fetchURL])

  return (
    <>
      <Helmet>
        <title>Search</title>
      </Helmet>
      <div>検索結果が表示されるページです。</div>
      <div>　</div>
      <div>クエリはこちら: {location.search}</div>
      <div>ワードだけ取り出すと: {queryString.parse(location.search).q}</div>
      <div>
        これをAPIに渡して検索結果をゲットします。複数条件あるときはどうしたらいいのかは考えられていません
      </div>
      <div>　</div>
      <div>
        <button>並び替え</button>
        <button>カテゴリを絞る</button>
      </div>
      <div>　</div>
      <div>検索結果</div>
      {posts.map(post => (
        <div key={post.id}>
          <Link to={`/posts/${post.id}`}>
            <img src={post.images[0]} alt={post.post_name} width='200' />
            <p>{post.post_name}</p>
            <p>￥{post.price.toLocaleString()}</p>
          </Link>
        </div>
      ))}
    </>
  )
}

export default Search
