import React, { useEffect, useState } from 'react'
import { Link } from 'react-router-dom'
import { Helmet } from 'react-helmet'
import axios from 'axios'

const Top = () => {
  const [posts, setPosts] = useState([])

  const fetchURL = 'http://localhost:3001/posts'

  useEffect(() => {
    axios.get(fetchURL).then(response => {
      setPosts(response.data)
    })
  }, [fetchURL])

  return (
    <>
      <Helmet>
        <title>Top</title>
      </Helmet>
      <div>Topページです</div>
      <div>　</div>
      <div>商品一覧</div>
      <div>　</div>
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

export default Top
