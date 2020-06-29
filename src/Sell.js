import React, { useCallback, useState } from 'react'
import { Helmet } from 'react-helmet'
import Dropzone from 'react-dropzone'

// 参考資料
// https://dev.to/bnevilleoneill/the-ultimate-guide-to-drag-and-drop-in-react-5955
// https://shiro-goma.hatenablog.com/entry/2016/02/29/034215
const Sell = () => {
  const [itemImages, setItemImages] = useState([])

  const onDrop = useCallback(acceptedFiles => {
    acceptedFiles.map(file => {
      console.log(file)
      // ファイルをバイナリ文字列に変換するため、FileReader オブジェクトを使用
      const reader = new FileReader()
      reader.readAsDataURL(file)
      reader.onload = e => {
        setItemImages(prevState => [...prevState, e.target.result])
      }
      return file
    })
  }, [])

  return (
    <>
      <Helmet>
        <title>Sell.js</title>
      </Helmet>
      {/* acceptedFilesに画像が格納される */}
      <Dropzone
        accept={'image/*'}
        onDrop={acceptedFiles => onDrop(acceptedFiles)}
      >
        {({ getRootProps, getInputProps }) => (
          <section>
            <div {...getRootProps()}>
              <input {...getInputProps()} />
              <p>
                ドラッグアンドドロップかここをクリックで画像をアップできます。
                <br />
                今は画像をアップするとconsoleに内容が表示されます。
              </p>
              <p>形式: png/jpeg/jpg</p>
            </div>
          </section>
        )}
      </Dropzone>
      <img src={itemImages[0]} alt='アップロードした写真' width="200" />
      <img src={itemImages[1]} alt='アップロードした写真' />
      <img src={itemImages[2]} alt='アップロードした写真' />
    </>
  )
}

export default Sell
